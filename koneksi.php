<?php  
$host = "localhost";  
$username = "root";   
$password = "";   
$db = "db_blogger";  
  
$koneksi=mysql_connect($server,$username) or die ("Koneksi Gagal");  
  
$database=mysql_select_db($koneksi,$database) or die ("Database Tidak Bisa Di Buka " );  
  
?> 