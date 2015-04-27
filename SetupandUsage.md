# Introduction #

This page contains setup and usage instructions about AntiCSurf. Class' functions are explained what they actually do and how they do it.


# Setup #

Database connection configurations must be done at SecureToken.php
```
	var $_serverIP="localhost";
	var $_dbName="securetoken";
	var $_tableName="securetoken";
	var $_dbUser="root";
	var $_dbPass="root";
```

# Usage #

There are four _public_ functions at AntiCSurf. Three of them can be used for CSRF defenses and one for deleting the contents of table that currently holding token records.
```
1. function CheckToken($token,$seconds = 0,$uds=null)
2. function GetToken($uds=null) 
3. function WriteFormToken($uds=null)
4. function Clear()
```

**1.CheckToken**

This function accepts two default parameters named _$seconds and_$uds. The first one, _$seconds_, will be used for checking against timeout restrictions. If you don't specify a timeout restriction, it will use 0.

**2.GetToken**

This function is giving a token that can be used for CSRF defense. You can pass a unique number or something else for identifying user, or cookie, or don't pass anything. If you don't pass anything, it will use session id (_session\_id_).

**3.WriteFormToken**

This function is using GetToken in it and returns the token value as an html form input. For example :
```
<input type="hidden" name="securetoken" value="03f73a743ae8d59099942e25fc0257a1"/> 
```

**4.Clear**

This function clears all the records at the located specified table.