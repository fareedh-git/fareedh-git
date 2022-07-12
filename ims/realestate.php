<?php
include 'connect.php';
require 'comment.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>IMS real estate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
 <!--================Header Menu Area =================-->
    <header class="header_area" style="background-color: black">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="home.php">IMS </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="policyreg.php">Personal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="companyreg.php">Company</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Policies</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="auto.php">Auto/Vehicle</a></li>
                                    <li class="nav-item"><a class="nav-link" href="life.php">Life</a></li>
                                    <li class="nav-item"><a class="nav-link" href="realestate.php">Real Estate</a></li>
                                    </ul>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="sign_up" href="index.php">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                    <div class="feature-img">
                            <img class="img-fluid" src="img/blog/causes-5.jpg" alt="">
                        </div>
                        <div class="blog_details">
                              <h1 style="color: black">Real Estate Insurance</h1>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> Housing, Lifestyle</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> source www.myinsurance.co.ke </a></li>
                            </ul>
                            <p class="excert">
                              More often referred to as Real Estate Title Insurance, Real Estate insurance is meant to protect customers in the case of financial loss due to any defects associated with purchasing a title. This type of policy is meant to protect a new owner from any hidden or unknown defects on a title they are purchasing. For example, in the case of liens, back rent, judgments, or similar title issues. Real estate title insurance even protects against lawsuits targeting the title. If, after a title is purchased, an issue is discovered there can be major financial loss to the owner, including potential loss of the property completely. However, real estate insurance protects against this possibility.<br>
Unlike other insurance types, real estate insurance is a single time purchase that does not have monthly premium or charges. The initial cost of the insurance is based on the cost of the title.

                            </p>
                            <h3>Who Needs this Insurance?</h3>
                            <p>
                                There are no requirements forcing home purchasers to buy real estate title insurance outside of a lender agreement policy. Real Estate is an expensive investment, rather it is a home or plot of land. Once the investment is purchased, a title exchanges hands. This title makes the real estate legally the new purchaser’s. However, if the title is defective in some way, the new owner is usually on the hook for financial issues.
                            </p>
                            
                            <p>
                                
                               Real Estate Title insurance may seem to be very specific in nature for the cost of the actual policy. However, there are a wide range of reasons a title could come under attack. Some common real estate issues are Misinterpretations of wills, mistake in recording legal documents, real estate fraud, deed forgery, false impersonation of the actual title owner, deeds by a minor, sell by someone who is deemed unsound of mind, or most commonly, liens from unpaid inheritance, income, estate, or gift taxes. All of these can be very expensive suits that target a new owner even if they have nothing to do with the fraud or evasion. Often, these suits will result in the loss of the property without any guarantee of a refund of the money paid to the purchase.
                                <br>
                               Overall, real estate title insurance may not seem like much, but in the case of a lawsuit it can be a big part of preventing financial loss. Even more, because it is a onetime purchase that lasts the entire time the title is held, it can ultimately be a small investment compared to the potential loss without it
                            </p>
                               <a href="policyreg.php" class="genric-btn success circle" style="background-color: black"><strong>Apply Policy</strong></a>
                        </div>
                    </div>



                    
          <!--Comment Area-->
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="realestate.php" method="post" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="comname" id="name" type="text" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="comemail" id="email" type="email" placeholder="Email" required >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submitcom" class="button button-contactForm">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment-->
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                       <!--Category Section-->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="auto.php" class="d-flex">
                                        <p >Auto Insurance</p>
                                     
                                    </a>
                                </li>
                                 <li>
                                    <a href="life.php" class="d-flex">
                                        <p>Life Insurance </p>
                                     
                                    </a>
                                </li>
                                <li>
                                    <a href="realestate.php" class="d-flex">
                                        <p style="color: #f84b67">Real Estate Insurance</p>
                               
                                    </a>
                                </li>
                                </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Theme:</h4>
                    <p>Assuring you a hopeful future</p>
                    <div class="footer-logo">
                        <h3 style="color: white; font-weight: bolder">Insurance Management System</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                    <p>Address : 123 abc street chennai <br> syed fareedh</p>
                        <span>Phone : +123 456789</span>
                        <span>Email : syedfareedh2000@gmail.com</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe to receive our lates news letters</p>

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body></html>