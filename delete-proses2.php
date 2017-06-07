<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from post where title='$_GET[title]'");
 header('location:kategori.php');

?>