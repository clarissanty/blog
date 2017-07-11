<?php 
    
    include "koneksi.php";
    include "cek.php";

	$id 		= $_GET['detail_id'];
	$stmt       = mysqli_query($koneksi, "SELECT * FROM tbl_post  WHERE detail_id = '$id'");
	$r_tampil	= $stmt->fetch_object();

?>





