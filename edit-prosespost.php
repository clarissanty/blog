
<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
 
 //inlcude atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $id_post = $_GET['id'];
 //echo '<script>console.log('+ $id_post +')</script>';
 $title_post = $_POST['title_post'];

 $content = $_POST['posting'];
 
 //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id

 $query = "UPDATE tbl_post SET title_post='$title_post', content='$content' WHERE id_post=$id_post";
 $hasil = mysqli_query($koneksi,$query) or die(mysql_error());
 
 //jika query update sukses
 if ($hasil) 
{
    include ("berhasil-editpost.php");
}
else
{
    echo "Data Gagal Masuk.";exit();
}
?>

