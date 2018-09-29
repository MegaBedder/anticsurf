# Introduction
Setup and Simple Usage Instructions

This page contains setup and usage instructions about AntiCSurf. Class functions are explained what they actually do and how they do it. 


# Setup

Database connection configurations must be done at SecureToken.php
```PHP
	var $_serverIP="localhost";
	var $_dbName="securetoken";
	var $_tableName="securetoken";
	var $_dbUser="root";
	var $_dbPass="root";
```

# Usage

There are four `public` functions at AntiCSurf. Three of them can be used for CSRF defenses and one for deleting the contents of table that currently holding token records.
```PHP
function CheckToken($token,$seconds = 0,$uds=null)
function GetToken($uds=null) 
function WriteFormToken($uds=null)
function Clear()
```

* 1. CheckToken

This function accepts two default parameters named `$seconds` and `$uds`. The first one, `$seconds`, will be used for checking against timeout restrictions. If you don't specify a timeout restriction, it will use 0.

* 2. GetToken

This function is giving a token that can be used for CSRF defense. You can pass a unique number or something else for identifying user, or cookie, or don't pass anything. If you don't pass anything, it will use session id (`session_id`).

* 3. WriteFormToken

This function is using GetToken in it and returns the token value as an html form input. For example :
```HTML
<input type="hidden" name="securetoken" value="03f73a743ae8d59099942e25fc0257a1"/> 
```

* 4. Clear

This function clears all the records at the located specified table.
