<?php ob_start();
include "koneksi.php";
$title      = $_POST['title'];
$content    = $_POST['content'];
$category   = $_POST['category'];

$query=mysql_query("edit post set title='$tile', content='$content', category='$category' where title='$title'");
header('location:kategori.php');
?>