<?php
extract($_POST);
session_start();
include("include/dbconnect.php");
 $username= $_SESSION['username'];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="#">
                        Orphanage<span class="sublog">Home</span>
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="donor_home.php">Home</a>                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="donor_view_trust.php">View Trust</a>                        </li>
						 <li class="nav-item">
                            <a class="nav-link active" href="donor_view_donation.php">Donation</a>                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout</a>                        </li>

                    </ul>
               

                    <!-- //toggle switch for light and dark theme -->
                    <!-- search popup -->
     
                    <!-- /search popup -->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids text-center pt-5">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="#">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Donor </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//breadcrumb-->

     <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="contactct-fm map-content-9">
                    <div class="header-title text-center">
                       
                        <h3 class="title-w3l mb-2">DONATION DETAILS</h3>
                       
                  </div>
					
                    <form action="" class="pt-lg-4" method="post" enctype="multipart/form-data">
                      <table width="50%" height="127" align="center">
                        <tr>
                          <td>Id</td>
                          <td>Trust</td>
                          <td>Amount</td>
                          <td>Date</td>
                          <td>Time</td>
                        </tr>
                        <?php
	 $qrys1="select * from  payment_details where user='$username'";
		$result = $conn->query($qrys1);
 
	 
		
	 	while($row = $result->fetch_assoc())
		  {
	 ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['trust_id'];?></td>
                          <td><?php echo $row['amount'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td><?php echo $row['report'];?></td>
                        </tr>
                        <?php
	 }
	 ?>
                      </table>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
    <!--//w3l-project-->
    <!--/w3l-footer-29-main-->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
              <div class="bottom-copies text-center">
                    <p class="copy-footer-29">All rights reserved. Design by
                        <a href="#"> Admin</a>
                    </p>
              </div>
          </div>
        </div>

        <!-- move top -->
        <button onClick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->

    </footer>
    <!--//footer-9 -->
    <!-- Js scripts -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
