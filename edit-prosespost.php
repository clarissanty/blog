<?php ;
include ("koneksi.php");
$title_post     = $_POST['title_post'];
$content    = $_POST['content'];
$category   = $_POST['category'];

mysqli_query($koneksi, "UPDATE tbl_post set title_post='$title_post', content='$content', category='$category' where title_post='$_GET[title_post]'");
header('location:berhasil-editpost.php');

?>


