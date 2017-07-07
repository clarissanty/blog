


<?php
	include("koneksi.php");
	
	$title_post = $_POST['title_post'];
	
	$update = "UPDATE tbl_post SET WHERE title_post='$title_post'" ;

    $hasil = mysqli_query($koneksi,$update);
    if ($hasil) 
    {
        include ("berhasil-editpost.php");
    }
    else
    {
        echo "Data Gagal Masuk.";exit();
    }

    
    
?>
