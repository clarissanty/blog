<?php
include('koneksi.php');

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];

if($password1==$password2)
{
	$pengacak="34LIE90NHFI976BKA02V9I4HKLW789HI";
	$password1=md5($pengacak.md5($password1).$pengacak);
	$query="INSERT INTO tbl_admin (name,email,username,password,birthday,gender) VALUES ('$name','$email','$username','$password1','$birthday','$gender')";
	$hasil=mysqli_query($koneksi,$query);
		if ($hasil) include "alert-register-berhasil.php";
		else include "alert-register-gagal.php";
}
else include "alert-salah-password.php";
?>


