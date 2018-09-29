# Checking The Token
Simple usage of library on checking validity of tokens.

This page gives the basic example about checking validity of token provided by client.

```PHP
<?php
include("SecureToken.php");

$st = new SecureToken();
if(isset($_POST['securetoken']))
{
    if ($st->CheckToken(($_POST['securetoken'])))
        GoAhead();
    else
        die ("Token is not valid");
}
?>
```
