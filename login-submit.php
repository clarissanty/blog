<?php
session_start();
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['pass1'];

$query = "SELECT * FROM tbl_admin WHERE username='$username'";
$hasil=mysqli_query($koneksi,$query) or die ("Error");
$data=mysqli_fetch_array($hasil);

$pengacak="34LIE90NHFI976BKA02V9I4HKLW789HI";

	if (md5($pengacak.md5($password).$pengacak) == $data['password'])
	{
		$_SESSION['username']=$username;
		echo include ("sukses-login.php");
	}
	else
	{
		echo include ("gagal-login.php");
	}

?>








