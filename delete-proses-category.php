<?php 
 include ('koneksi.php');
 $title_post=$_GET['title_post'];
 $delete= mysqli_query($koneksi, "DELETE FROM  tbl_post where title='$title_post'");
 header('location:kategori.php');

?>

 