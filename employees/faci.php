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

</head>
<style>
            .mine {
 display: grid;
 align-items: center; 
 grid-template-columns: 1fr 1fr 1fr;
 column-gap: 15px;
}
            .pop:hover{
                border-top-color: var(--teal_hover)!important;
                transform: scale(1.03);
                transition: all 0.3s;
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
                            <li class="#">
                                <a href="roomse.php" aria-expanded="true"><i class="ti-home"></i><span>Venues
                                    </span></a>
                            </li>
                            <li class="active">
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
                            <h4 class="page-title pull-left">Facilities of Venues</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="indtry.php">Home</a></li>
                                <li><span>Facilities</span></li>
                                
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
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="mine d-flex align-items-center mb-2">
                                <img src="../desk-with-chair.svg" width="60px">
                                <h5 class="m-0 ms-3"> Desk and Chairs </h5>
                            </div>
                            
                            <p> Almost all classrooms are equipped with more than 20 desks and can accommodate more than 40 students and all labs are with more than 60 chairs.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="mine d-flex align-items-center mb-2">
                                <img src="../wifi.svg" width="40px">
                                <h5 class="m-0 ms-3"> Wi-fi </h5>
                            </div>
                            <p> Almost all classrooms recieve Wi-fi. One must login through their sonic wall accounts to access the internet facility provided by the Institute.
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="mine d-flex align-items-center mb-2">
                                <img src="../blb.svg" width="60px">
                                <h5 class="m-0 ms-3"> Blackboard </h5>
                            </div>
                            <p> Almost all classrooms are equipped with a clean white board, 2 markers and a duster. One can use them when in need.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="wifi.svg" width="40px">
                                <h5 class="m-0 ms-3"> Wifi </h5>
                            </div>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis quaerat error nemo modi reiciendis atque harum sed qui saepe impedit animi laboriosam architecto sequi, voluptatibus enim magni accusantium molestias.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="wifi.svg" width="40px">
                                <h5 class="m-0 ms-3"> Wifi </h5>
                            </div>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis quaerat error nemo modi reiciendis atque harum sed qui saepe impedit animi laboriosam architecto sequi, voluptatibus enim magni accusantium molestias.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="wifi.svg" width="40px">
                                <h5 class="m-0 ms-3"> Wifi </h5>
                            </div>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis perferendis quaerat error nemo modi reiciendis atque harum sed qui saepe impedit animi laboriosam architecto sequi, voluptatibus enim magni accusantium molestias.
                            </p>
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
        
    </body>
</html>
                        
                        <?php } ?>