
<?php
session_start();
$username=$_POST['username'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
include('koneksi.php');

$query="SELECT * FROM tbl_admin WHERE username='$username'";
$hasil=mysqli_query($koneksi,$query) or die ("Error");
$data=mysqli_fetch_array($hasil);

$pengacak="34LIE90NHFI976BKA02V9I4HKLW789HI";

	if (md5($pengacak.md5($password1).$pengacak)== $data['password1'])
	{
		$_SESSION['username']=$username;
		echo include ("sukses-login.php");
	}
	else
		echo include ("gagal-login.php");
	
?>









