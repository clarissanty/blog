<!DOCTYPE html>
    <head>
        <title>Shans Blog - Login</title>
         <!-- Bootstrap Core CSS -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


        <style>
            .loginbox{
                margin: 180px auto;
                width: 470px;
                position: relative;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .body{
                background-color:#ffffff;
            }
            .text{
                text-align: center;
                font-size: 25px;
            }
            .satu{
                padding-top: 25px;
            }
        </style>
    </head>
    <body class="hold-transition login-page body">
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
               
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

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

        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p><h1><center>SELAMAT DATANG</center></h1></p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            </div>
            <div class="login-box loginbox">
            <div class="login-logo text">
        
            </div>
            <div class="satu">
                <form action="login-submit.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="Username">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass1" class="form-control" placeholder="Password">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">
                        <div align="center" class="col-xs-10">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
            <br></br>
            <div class="row">
                <form action="contact.php" method="post">
                    <div align="center" class="col-xs-10">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Make a New Account</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
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

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    
</body>

</html>

    