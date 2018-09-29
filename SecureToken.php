<?php

//SecureToken v0.2.1 by Mesut Timur
//contact : mesut@h-labs.org
//webguvenligi.org && h-labs.org
//date : 02/2009
//last update: 12/2009

// A simple CSRF token operations class

class SecureToken
{
	//Database details
	var $_serverIP="localhost";
	var $_dbName="test";
	var $_tableName="securetoken";
	var $_dbUser="root";
	var $_dbPass="root";
	var $_con;
	
	//constructor
	function __construct()
	{
		$this->_ConnectDB();
		if (session_id() == null)
			session_start();
    }
	
	//destructor
	function __destruct()
	{
		$this->_CloseDB();
	}
	
	//check routine
	//requiring $uds for cross token attacks
	//if it's null, SESSION_ID will be used for $uds
    function CheckToken($token,$seconds = 0,$uds=null)
    { 
		if ($uds == null)
			$uds = session_id();
		// SQLi checks
		$token = mysql_real_escape_string($token);
		$uds = mysql_real_escape_string($uds);
		$seconds = mysql_real_escape_string($seconds);
		$sql = "SELECT Time FROM $this->_tableName WHERE Token ='$token' AND UserDescriptor='$uds'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result) > 0)
		{ 
			$time=mysql_fetch_array($result,MYSQL_NUM);
			$timeSaved = $time[0];
			$timeNow = time();
			if ( ($timeNow <= $timeSaved + $seconds) || $seconds == 0 )
			{
				//echo "token deleted";
				$this->_RemoveToken($token,$uds);
				return true;
			}
			//echo "timeout";
		}
		return false;
 	}

	//requiring $uds for cross token attacks
	//if it's null, SESSION_ID will be used for $uds
	function GetToken($uds=null) 
	{
		$time = time();
		if ($uds == null)
			$uds = session_id();
		$uds = mysql_real_escape_string($uds);
		$token = md5(uniqid(rand(),true));
		//we are creating token as MD5 form
		//so no need to check for SQL Injection
		$sql ="INSERT INTO $this->_tableName (Token,UserDescriptor,Time) VALUES ('$token','$uds','$time')";
		mysql_query($sql) or die (mysql_error());
		return $token;
	}

	//returns a form token
	function WriteFormToken($uds=null)
	{
		if ($uds == null)
			$uds = session_id();
		$token = $this->GetToken($uds);
		$ret = "<input type=\"hidden\" name=\"securetoken\" value=\"$token\"/>";
		return $ret;
	}
	//deletes only specified token for specified user
	//supports concurrent sessions
	function _RemoveToken($token,$uds=null)
	{
		if ($uds == null)
			$uds = session_id();
		//SQLi checks are disabled because already 
		//made in caller function CheckToken
		//$token = mysql_real_escape_string($token);
		//$uds = mysql_real_escape_string ($uds);
		$sql = "DELETE FROM $this->_tableName WHERE Token = '$token' AND UserDescriptor = '$uds'";
		mysql_query($sql);
	}
	//clears all table
	function Clear()
	{
		$sql = "DELETE FROM $this->_tableName";
		mysql_query($sql);
	}
	//db operation routines
	function _ConnectDB()
	{
		if($this->_con)
			return;
		$this->_con = mysql_connect($this->_serverIP,$this->_dbUser,$this->_dbPass);
		mysql_select_db($this->_dbName,$this->_con);	
	}	

	function _CloseDB()
	{
		if($this->_con)
			mysql_close($this->_con);
	}
	
}
?>
