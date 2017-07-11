 
<?php
    include "koneksi.php";
    include "cek.php";
    
    $id         = $_GET['id_post'];
    $stmt       = mysqli_query($koneksi, "SELECT * FROM tbl_post WHERE id_post = '$id'");
    $r          = $stmt->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shans Blog - Edit Pos</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


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
            <form action="edit-prosespost.php?id=<?php echo $id?>" method="POST" name="loginAdmin" id="contactForm" novalidate>
            <input type="hidden" name="" value="<?php $r->id_post; ?>" name="id_post">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <center><p><h1>SELAMAT DATANG ADMIN</h1></p></center>
                 <center>(Silakan isi tabel di bawah ini..)</center>
                <br></br>
                <br></br>
                <h1>POST :</h1>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Title</label>
                            <input type="text" class="form-control" value="<?php echo $r->title_post; ?>" id="Title"  name="title_post" required >
                            <p class="help-block text-danger"></p>
                            
                        </div>
                    </div>
                    <div class="row control-group">
                        <div>
                            <br/>
                            <label>Content : </label>
                            <br/>
                            <textarea id="posting" name="posting">
                                <?php echo $r->content; ?>
                            </textarea>

                            <script type="text/javascript">
                            var editor = CKEDITOR.replace('posting');
                            </script>
                            
                        </div>
                    </div>
                   <div class="row control-group">
                        <div>
                            <br/>
                            <label>Category :</label>
                            <div class="input-field col s6">
                            <?php 
                            $result = mysqli_query ($koneksi,"SELECT * FROM tbl_category");
                            echo '<select name="name_category" class="browser-default"';
                            echo '<option>---Pilih Category---</option>';
                            while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['id_category'] . '">' . $row['name_category'] . '</option>';
                            }
                            echo '</select>';
                            ?>
                        </div>
                    </div>
                    <br></br>
                    <div>
                    <br/>
                        <center>
                        <button type="submit" class="btn btn-default">UPDATE</button>

                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
          
    <!-- Footer -->
    <br>
    </br>
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

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>


  
</body>

</html>


 