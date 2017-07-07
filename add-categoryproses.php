<?php 
include ("koneksi.php");
session_start();
$name_category = $_POST['name_category'];

$query = "INSERT INTO tbl_category (name_category) VALUES ('$name_category')";
$hasil = mysqli_query($koneksi,$query);
if ($hasil) 
{
	include ("alert-add-category.php");
}
else
{
	echo "Data Gagal Masuk.";exit();
}

?>

