<?php
//simple usage with timeout mechanism enabled


$timeout=0;
include("SecureToken.php");
$st = new SecureToken();
$token = $st->GetToken();
echo $st->WriteFormToken();
sleep(3); //timeout mechanism can be checked by this way
if($st->CheckToken($token))
	echo "Sesion is Valid<br>";
echo "Token is : $token <br>";
?>