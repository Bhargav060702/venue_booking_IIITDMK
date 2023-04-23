<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    { 
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Booking Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../sty.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<style>
     @media screen and (max-width: 575px) {
                        .availability-form{
                        margin-top: 25px;
                        padding: 0 35px;
                    }
                }
</style>
<body class="bg-light">
            <section style="background: linear-gradient(112.84deg, #FFFFFF 0.63%, #EEDFEF 100%)"> 
            
            <!-- preloader area start -->
            <div id="preloader">
                <div class="loader"></div>
            </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="indtry.php"><img src="../assets/images/icon/ji.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li class="#">
                                <a href="indtry.php" aria-expanded="true"><i class="ti-dashboard"></i><span>Home
                                    </span></a>
                            </li>
                            <li class="#">
                                <a href="leave.php" aria-expanded="true"><i class="ti-user"></i><span>Request Booking
                                    </span></a>
                            </li>
                            <li class="active">
                                <a href="roomse.php" aria-expanded="true"><i class="ti-home"></i><span>Venues
                                    </span></a>
                            </li>
                            <li class="#">
                                <a href="faci.php" aria-expanded="true"><i class="ti-blackboard"></i><span>Facilities
                                    </span></a>
                            </li>
                            <li class="#">
                                <a href="df.php" aria-expanded="true"><i class="ti-agenda"></i><span>View My Request History
                                    </span></a>
                            </li>
                            <li class="#">
                                <a href="lh.php" aria-expanded="true"><i class="ti-agenda"></i><span>View whole Request History
                                    </span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <div class="header-area">
        <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-1 col-sm-3 clearfix">
                        
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">More Info on Venues</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="indtry.php">Home</a></li>
                                <li><span>Venues</span></li>
                                
                            </ul>
                        </div>
                    <div class="col-md-3 col-sm-6 clearfix">
                    
                    <a aria-expanded="true">
                                    </a> 
                    </div> 
                    <div class="col-md-4 col-sm-3 clearfix">
                    <?php include '../includes/employee-profile-section.php'?>
                        
                    </div>
                    <!-- profile info & task notification -->
                    
                </div>
            </div>
                        <!-- Copyright -->
                        
                        <br> 
                        <br>
                        <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 px-4">
                        <div class="card mb-4 border-0 shadow-none">
                            <div class="row g-0 p-3 align-items-center">
                                <div class="col-md-5 mb-lg-0 mb-md-0">
                                <div class="swiper swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="../images/CR1b.jpeg" class="w-100 d-block"/></div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                                </div>
                                <div class="col-md-7 text-align-center">
                                    <div class="card-body">
                                        <h3 class="card-title mb-3 text-center mt-2">CR1</h3>
                                        <div class="features mb-4">
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Wifi Available
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                80 Occupancy
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                36 Benches
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Projector and speaker assisted monitors
                                            </span>
                                        </div>
                                        <p><b>It is located behind ATM, on the way to Seminar Hall. It usually carries all kinds of academic activities.</b></p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
                                        <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary "><b>Request Venue Now<b></a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card mb-4 border-0 shadow-none">
                            <div class="row g-0 p-3 align-items-center">
                                <div class="col-md-5 mb-lg-0 mb-md-0">
                                <div class="swiper swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="../images/CR2.jpeg" class="w-100 d-block"/></div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                                </div>
                                <div class="col-md-7 text-align-center">
                                    <div class="card-body">
                                        <h3 class="card-title mb-3 text-center mt-2">CR2</h3>
                                            <div class="features mb-4">
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    Wifi Available
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    34 benches
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    70 Occupancy
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    
                                                </span>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                    Projector and speaker assisted monitors
                                                </span>
                                            </div>
                                        <p class="card-text">It is located behind ATM, on the way to Seminar Hall. It usually carries all kinds of academic activities.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
                                        <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary "><b>Request Venue Now<b></a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card mb-4 border-0 shadow-none">
                            <div class="row g-0 p-3 ">
                                <div class="col-md-5 mb-lg-0 mb-md-0">
                                    <img src="../images/CR3.jpeg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-7 text-align-center">
                                    <div class="card-body">
                                        <h3 class="card-title mb-3 text-center mt-2">Seminar Hall</h3>
                                        <div class="features mb-4">
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Wifi Available
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                60 Occupancy
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                
                                            </span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                                Projector and speaker assisted monitors
                                            </span>
                                        </div>
                                        <p class="card-text">It is located opposite the physics lab, on the way to library on the first floor of main building. It usually carries all kinds of academic activities.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
                                        <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary "><b>Request Venue Now<b></a></div>
                                        
                                          
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
            </div>
        <!-- main content area end -->
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <br> 
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        
        
    </div>
    <h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by P.V.S. Bhargav </h6>
       
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>     
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>           

                        <script>
                            var swiper = new Swiper(".swiper-container", {
                                rewind: true,
                                effect: "fade",
                                spaceBetween: 20,
                                autoplay: {
                                delay: 4000,
                                disableOnInteraction: false,
                                },
                                pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                                dynamicBullets: true,
                                },
                                navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                                },
                            });
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
                        
                        <?php } ?>