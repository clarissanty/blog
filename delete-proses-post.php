
<?php
	include('koneksi.php');
	$title_post=$_GET['title_post'];
	$delete=mysqli_query($koneksi, "DELETE FROM tbl_post WHERE title_post='$title_post'");
	header('location: alert-delete-post.php');
?>