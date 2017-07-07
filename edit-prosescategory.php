

<?php
	include("koneksi.php");
	
    $id_category = $_GET['id_category'];
	$name_category = $_POST['name_category'];
	
	$update = "UPDATE tbl_category SET ='$name_category' WHERE id_category='$id_category'";

    $hasil = mysqli_query($koneksi,$update);
    if ($hasil) 
    {
        include ("berhasil-editcategory.php");
    }
    else
    {
        echo "Data Gagal Masuk.";exit();
    }

    
    
?>





