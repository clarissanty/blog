<?php
$host		= 'localhost'; 
$username	= 'root'; //nama username
$password	= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db      	= 'db_blog'; //nama database

$db_link	= mysqli_connect($host,$username,$password,$db);
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>