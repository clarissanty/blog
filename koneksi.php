
<?php
$host="localhost";
$username="root";
$password="";
$db="db_blog";
$koneksi=mysqli_connect($host,$username) or die ("Gagal koneksi");
$database=mysqli_select_db($koneksi,$db) or die ("Database tidak bisa dipilih");
?>