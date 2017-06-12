<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo "<h1>Anda Belum Login<h2>";exit;
}
?>