<?php
 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>ShanBlog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.css">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="post.php">Sample Post</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Shans Blog</h1>
                        <hr class="small">
                        <span class="subheading">SELAMAT DATANG DI SHANS BLOG</span>
                         <span class="subheading">@Shanty</span>
                    </div>
                 </div>
            </div>
        </div>
    </header>

    <!-- Coba Dulu -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_post AS post ORDER BY post.id_post ASC"); 
                        while($r=mysqli_fetch_array($query)){ ?>   
                            <a href="detail.php?detail_id=<?php echo $r['id_post'];?>">
                                <h2><?php echo $r['title_post']; ?></h2>
                            </a>
                            
                            <p class="post-meta">Di posting pada : <?php echo $r['created_at']; ?></p>         
                    <?php
                        }    
                    ?>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
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

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    <script src="asset/js/sweetalert.min.js"></script>

</body>

</html>
