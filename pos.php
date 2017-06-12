<?php
    include "cek.php";
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<style>

    table {
            border-color:blue;
            color:blue;

    }
    tr, td {
            text-align: center;
            }
    td {
        color:blue;
    }
    tr {
        height : 50px;
    }

</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shans Blog - Pos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="pos.php">Post</a>
                    </li>
                    <li>
                        <a href="kategori.php">Category</a>
                    </li>
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>ADMINISTRATOR</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <center>
                    <h1>SELAMAT DATANG ADMIN</h1>
                </center>
                <br></br>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-default">            
                <a href="add-post.php">Add Post</a>
            </button>
        </div>
        <br></br>
    </div>
    <table align="center" border="1" width="900px">
        <thead>
            <tr>
                <th><center>Title</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_post"); 
                while($r_tampil=mysqli_fetch_array($tampil)){
                    echo "
                        <tr>
                            <td>$r_tampil[title_post]</td>
                            <td>
                                <a href='edit-post.php'> <button type='button' class='btn btn-info'><i class='fa fa-pencil'></i></button></a>
                                <a href='delete-post.php'><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button></a>
                            </td>
                        </tr>
                    ";  
                }    
            ?>
        </tbody>
    </table>
    </br>
    </br>
    <center>
    <table border="1" width="900px">
    <tr>
        <td><center><b>TITLE</b></center></td>
        <td><center><b>ACTION</b></center></td>
    </tr>
    <tr>
        <td><a href="post.php">APAKAH YANG DIMAKSUD CODING ITU?</a></td>
        <td><a href="edit-post.php">Edit</a>  /  <a href="delete-post.php">Delete</a></td>
       
    </tr>
    <tr>
        <td><a href="post2.php">APAKAH ANDA INGIN MENJADI PROGRAMMER?</a></td>
         <td><a href="edit-post.php">Edit</a>  /  <a href="delete-post.php">Delete</a></td>
    </tr>
    <tr>
        <td><a href="post3.php">CARA SANTAI BELAJAR PEMROGRAMAN</a></td>
         <td><a href="edit-post.php">Edit</a>  /  <a href="delete-post.php">Delete</a></td>
    </tr>
    <tr>
        <td><a href="post4.php">JENIS-JENIS ERROR SAAT CODING</a></td>
         <td><a href="edit-post.php">Edit</a>  /  <a href="delete-post.php">Delete</a></td>
    </tr>
    <tr>
        <td><a href="post5.php">Cara Membuat Database Dan Table Mysql Di PHP Myadmin XAMPP</a></td>
         <td><a href="edit-post.php">Edit</a>  /  <a href="delete-post.php">Delete</a></td>
    </tr>
    </table>
    </center>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <br></br>
                    <center>
                    <a href="https://www.facebook.com/clarissanuril.ristanty"><img src="img/fb.png"></a>
                    <a href="https://plus.google.com/u/0/114011647164395005859"><img src="img/google.jpg"></img></a>
                    <a href="https://twitter.com/ClarisShanty"><img src="img/twitter.png"></img></a>
                    <a href="https://www.instagram.com/clarissanuril/"><img src="img/insagram.jpg"></img></a>
                    <a href="https://www.youtube.com/channel/UCmOKXHaXrQJOqRxxlOWB3NQ"><img src="img/youtobe.jpg"></img></a>
                   </center>
                    <p class="copyright text-muted">Copyright &copy; Shans Blog 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
