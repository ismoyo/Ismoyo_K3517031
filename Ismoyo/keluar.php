<?php
	setcookie('username', '' , time()-3600*24*7,"/ismoyo");
	header("Location: index.php");

?>