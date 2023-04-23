<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    require('../inc/links.php'); 
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    { ?>
        

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
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
                    
                    .text-box{
                        margin-top: 0%;
                        font-size: 17px;
                        letter-spacing: 1px;
                        line-height: 12px;
                    }
                    .text-box p{
                        font-family: 'Poppins', sans-serif;
                        color:black;
                        margin-left: 7%;
                        font-size: 12px;
                    }
                    .text-box h1{
                        font-family: 'Lucida', cursive;
                        font-size: 100px;
                        line-height: 150px;
                        color: black;
                        margin-left: 6%;
                    }
                        .availability-form{
                            margin-top: -50px;
                            z-index:2;
                            position:relative;
                        }
                        
                        @media screen and (max-width: 575px) {
                            .availability-form{
                            margin-top: 25px;
                            padding: 0 35px;
                        }
                        .pop:hover{
                            border-top-color: var(--teal_hover)!important;
                            transform: scale(1.03);
                            transition: all 0.3s;
                        }
                        .mine {
 display: grid;
 align-items: center; 
 grid-template-columns: 1fr 1fr 1fr;
 column-gap: 15px;
}
    </style>
</head>

<body class="bg-light">

        <section style="background: linear-gradient(112.84deg, #FFFFFF 0.63%, #EEDFEF 100%)"> 
            
    <div id="preloader">
        <div class="loader"></div>
    </div>
    
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

                            <li class="active">
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
                <div class="col-md-6 col-sm-8 clearfix">
                    
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                </div>
                <div class="col-md-6 col-sm-8 clearfix">
                    <?php include '../includes/employee-profile-section.php'?>
                    
                </div>

                    <!-- profile info & task notification -->
                    
            </div>
        </div>
        <br> <br> <br>
        <br>
        <div class="text-box">
                  
                                    <h1> Welcome to </h1>
                                    <h1> <span class="auto-input"> </span> </h1>
                                    <p> <b> Copyright @IIITDM KURNOOL </p>
        </div>
        
        </div>
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> VENUE ROOMS </h2>
        
        <div class="container">
            <div id="rooms" class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="../images/CR1b.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center">CR1</h5>
                            <p class="card-text">Carries regular academic activities.</p>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    80 Occupancy
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Projector and speaker assisted monitors
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1"> Facilities </h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi with firewall
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Well furnished furniture 
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            
                            <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary ">Request Venue Now</a></div>
                        </div>
                    </div>
                </div>    
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="../images/CR2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center">CR2</h5>
                            <p class="card-text">Carries regular academic activities.</p>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    75 Occupancy
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Projector and speaker assisted monitors
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1"> Facilities </h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi with firewall
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Well furnished furniture 
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary ">Request Venue Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="../images/CR3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center">CR3</h5>
                            <p class="card-text">Carries regular academic activities.</p>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    60 Occupancy
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Projector and speaker assisted monitors
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1"> Facilities </h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi with firewall
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Well furnished furniture 
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <div class="align-items-center text-center"><a href="leave.php" class="btn btn-primary ">Request Venue Now</a></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
    
        <div class="col-lg-12 d-flex justify-content-evenly mt-5">
                    <a href="roomse.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>
                </div>
    
                <br> <br> 
                        
                                <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> FACILITIES </h2>

        <div class="container">
            <div class="row">
                <div class="mine col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="../desk-with-chair.svg" width="60px">
                            <h5 class="m-0 ms-3">Desks and Chairs</h5>
                        </div>
                        <p> Almost all classrooms are equipped with more than 20 desks and can accommodate more than 40 students and all labs are with more than 60 chairs.
                        </p>
                    </div>
                </div>
                <div class="mine col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="wifi.svg" width="60px">
                            <h5 class="m-0 ms-3"> Wi-fi </h5>
                        </div>
                        <p> Almost all classrooms recieve Wi-fi. One must login through their sonic wall accounts to access the internet facility provided by the Institute.
                        </p>
                    </div>
                </div>
                <div class="mine col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="../blb.svg" width="60px">
                            <h5 class="m-0 ms-3"> White Board </h5>
                        </div>
                        <p> Almost all classrooms are equipped with a clean white board, 2 markers and a duster. One can use them when in need.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-12 d-flex justify-content-evenly mt-5">
                                <a href="faci.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none align-items-center"> More Facilities >>></a>
        </div>
        <br>
    </div>
    </div>
    <br> <br> 
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
    
    <!--Auto Input -->     
                                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                                <script>
                                    var typed = new Typed(".auto-input", {
                                        strings: ["Venue Booking System","IIITDM Kurnool","Venue Booking Portal"],
                                        typeSpeed: 100,
                                        backSpeed: 100,
                                        loop: true
                                    });
                                </script>

                        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>           
                        <script src="../assets/js/popper.min.js"></script>
                        <script src="../assets/js/bootstrap.min.js"></script>
                        <script src="../assets/js/metisMenu.min.js"></script>
                        <script src="../assets/js/jquery.slimscroll.min.js"></script>
                        <script src="../assets/js/jquery.slicknav.min.js"></script>
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
</body>

</html>
<?php } ?>