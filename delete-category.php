<?php 
    include "cek.php";
    include "koneksi.php";

    $id_category    = $_GET['id_category'];
    
    $query      = mysqli_query($koneksi, "DELETE FROM tbl_category  WHERE id_category = '$id_category'");
    if ($query) {
        header("location: alert-delete-category.php");
    }
    else {
        header("location: kategori.php");
    }
    
 ?>





