<?php 
    include "cek.php";
    include "koneksi.php";

    $id_post    = $_GET['id_post'];
    $query      = mysqli_query($koneksi, "DELETE FROM tbl_post WHERE id_post = '$id_post'");
    if ($query) {
        header("location: alert-delete-post.php");
    }
    else {
        header("location: pos.php");
    }
    
 ?>


