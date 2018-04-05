<!DOCTYPE html>

<html>



<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!--
    Kool Store Template
    http://www.templatemo.com/preview/templatemo_428_kool_store
    -->
        <meta charset="utf-8">
        <title> DustBusters - eCommerce Store</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="css/temp.css">
        <html class="no-js"> <!--<![endif]-->
        <head>

            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/normalize.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="css/templatemo-misc.css">
            <link rel="stylesheet" href="css/templatemo-style.css">

            <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        </head>
        <body>
            <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->


            <header class="site-header">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="top-header-left">
                                    <a href="register.php">Sign Up</a>
                                    <a href="loginForm.php">Log In</a>
                                </div> <!-- /.top-header-left -->
                            </div> <!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div> <!-- /.social-icons -->
                            </div> <!-- /.col-md-6 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.top-header -->
                <div class="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-8">
                                <div class="logo">
                                    <h1><a href="index.php">Dustbusters</a></h1>
                                </div> <!-- /.logo -->
                            </div> <!-- /.col-md-4 -->
                            <div class="main-header">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-8">
                                            <div class="logo">
                                                <h2>Vacuum Specalists</a></h2>
                                            </div> <!-- /.logo -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-8 col-sm-6 col-xs-4">
                                            <div class="main-menu">
                                                <a href="#" class="toggle-menu">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <ul class="menu">
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">Catalogs</a></li>
                                                    <li><a href="#">FAQs</a></li>
                                                    <li><a href="#">Policies</a></li>
                                                    <li><a href="#">About</a></li>
                                                </ul>
                                            </div> <!-- /.main-menu -->
                                        </div> <!-- /.col-md-8 -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.main-header -->
                            <div class="main-nav">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-7">
                                            <div class="list-menu">
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="products.php">Shop</a></li>
                                                    <li><a href="basket.php">My Account</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div> <!-- /.list-menu -->
                                        </div> <!-- /.col-md-6 -->
                                        <div class="col-md-6 col-sm-5">
                                            <div class="notification">
                                                <span>Free Shipping on any order above $50</span>
                                            </div>

                                        </div> <!-- /.col-md-6 -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.main-nav -->
                            <br />
                            <div class="menu">
                                <a class="item" href="basket.php">Basket</a>
                            </div>
                        </header>

<body>



    <div class="main">
       <?php
        include "website.php";
        display_products();
        ?>
            </div>

            <footer id="footer" class="footer">
                <div class="div-block-3"><a class="footer-link" href="footer-pages/guarentee.html"">Our Guarentee</a><a class="footer-link" href="#"">Terms and Conditions</a><a class="footer-link" href="#">Privacy Policy</a>
                </div>
                <div class="div-block-3"><a class="footer-link" href="#">Office of Dustbusters</a><a class="footer-link" href="#">Delivery</a><a class="footer-link" href="#">FAQ</a>
                </div>
                <div class="div-block-3"><a class="footer-link" href="#">Returns</a><a class="footer-link" href="#">Repairs</a><a class="footer-link" href="contact.html">Contact Us</a>
                </div>
                <div class="div-block-3"><a class="footer-link" href="https://twitter.com">Twitter</a><a class="footer-link" href="https://www.instagram.com/?hl=en">Instagram</a><a class="footer-link" href="https://www.facebook.com">Facebook</a>
                </div>
                <div class="div-block-3 extended">
                  <h3 class="footer-title">Newsletter</h3>
                  <div class="w-form">
                    <form class="form" data-name="Email Form" id="email-form" name="email-form">
                      <input class="text-field w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Your e-mail" required="required" type="email">
                      <input class="submit-button w-button" data-wait="Please wait..." type="submit" value="Send">
                    </form>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form</div>
                    </div>
                  </div>
                </div>
                <div class="footer-bottom">

                </div>
                <a class="dribbble-link" href="index.php" target="_blank"><img src="img/newlogo.png" width="55"></a>
              </footer>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
              <script src="js/webflow.js" type="text/javascript"></script>
              <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

                    <script src="js/vendor/jquery-1.10.1.min.js"></script>
                    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
                    <script src="js/jquery.easing-1.3.js"></script>
                    <script src="js/bootstrap.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/main.js"></script>
                    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
          <script type="text/javascript" src="slick/slick.min.js"></script>


            </html>
