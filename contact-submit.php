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
	
	$query="INSERT INTO admin (name,email,username,password,birthday,gender) VALUE ('$name','$email','$username','$password1','$birthday','$gender')";
	$hasil=mysql_query($koneksi,$query);
		if ($hasil)
			echo include "alert-register-berhasil.php";
		else
			echo include "alert-register-gagal.php";
}
else
	echo include "alert-salah-password.php";
?>


