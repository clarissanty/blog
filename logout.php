<?php
	session_start();
	unset($_SESSION['username']);

	echo include("alert-logout.php");
?>