<?php 
include ("koneksi.php");
session_start();
$title_post = $_POST['title'];
$content = $_POST['posting'];
$category = $_POST['category'];

$query = "INSERT INTO tbl_post (title_post, content, id_category) VALUES ('$title_post', '$content', '$category')";
$hasil = mysqli_query($koneksi,$query);
if ($hasil) 
{
	include ("alert-add-berhasil.php");
}
else
{
	echo "Data Gagal Masuk.";exit();
}

?>