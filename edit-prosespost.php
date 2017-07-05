

<?php
	include("koneksi.php");
	
	$title_post = $_POST['title'];
	$content    = $_POST['posting'];
	$category   = $_POST['category'];
	
	mysqli_query($koneksi, "UPDATE tbl_post SET title='$title_post', content='$posting', category='$category' WHERE id='$_GET[id_post]'");
    $r_tampil['id_post'];
    $r_tampil['title_post'];
    $r_tampil['content'];
    $r_tampil['category'];

     if($r_tampil){
     	header('location:berhasil-editpost.php');
     }
     else{
     	header('location:edit-post.php');
     }
	
?>
