<?php 
            require('inc/links.php');
            include('includes/dbconn.php');
            
            
                require('inc/header.php');
                session_start();
                error_reporting(0);
                
?>
<!DOCTYPE html>
        <html lang="en">

            <head> 
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial scale=1.0">
                <title> IIITDM Kurnool - HOME</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
                
                
                
            </head>
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
                        font-family: 'Merienda', cursive;
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
                }
</style>
                
            <body class="bg-light">
            <section style="background: linear-gradient(112.84deg, #FFFFFF 0.63%, #EEDFEF 100%)"> 
                        <!-- Copyright -->
                        <div class="text-box">
                        <br> <br> <br>
                        <br>   
                        <br> <br> <br>
                        <br>    
                                            <h1> Welcome to </h1>
                                            <h1> <span class="auto-input"> </span> </h1>
                                            <p> <b>Copyright @IIITDM KURNOOL </p>
                        </div>
                        <br> <br> <br>
                        <br>
                        
                        <!-- Carousel -->
                        <div class="container-fluid px-lg-4 mt-4">
                            <div class="swiper swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="images/e.jpg" class="w-100 d-block"/></div>
                                    <div class="swiper-slide"><img src="images/b.jpg" class="w-100 d-block"/></div>
                                    <div class="swiper-slide"><img src="images/c.jpg" class="w-100 d-block"/></div>
                                    <div class="swiper-slide"><img src="images/a.jpeg" class="w-100 d-block"/></div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <br> <br> 
    <h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by P.V.S. Bhargav </h6>
       
                                            
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