<?php
include("SecureToken.php");
$st = new SecureToken();
 ?>
 <html>
 <body>
<form method="POST" action="withdraw.php">
 <input type="text" name="account">
 <input type="text" name="amount">
 <?=$st->WriteFormToken()?>
 <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>