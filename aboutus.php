<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" comntent="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>IIITDM Kurnool - About Us</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        
        <?php require('inc/links.php')?>
        <style>
                    .swiper {
                width: 100%;
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 300px;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
            }
            .content {
                position: absolute;
                bottom: 10%;
                left: 45%;
                z-index: 20;
                color: white;
            }
        </style>
    </head>
    <body class="bg-light">
        <section style="background: linear-gradient(112.84deg, #FFFFFF 0.33%, #EEDFEF 100%)">
            <?php require('inc/header.php')?>  
            <div class="my-5 px-4">  
            <h2 class="fw-bold h-font text-center"> About Us </h2>
                <div class="h-line bg-dark">
                </div>
                <p class="text-center mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, tenetur magnam? Placeat aut, consectetur fugiat asperiores ullam rerum assumenda officiis deleniti minus velit. Odio velit officia harum beatae animi perferendis!    
                    </p>
            </div>

            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                        <h3 class="mb-3">
                            Lorem ipsum dolor sit 
                        </h3>
                        <p> 
                        amet consectetur adipisicing elit. Quaerat quasi debitis assumenda aperiam commodi excepturi suscipit magnam iste aut voluptatum temporibus fugit cumque porro reprehenderit corporis impedit, soluta dolore numquam.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                        <img src="images/dir.png" width="500px">
                    </div>
                </div>
            </div>
            &nbsp &nbsp &nbsp
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                        <h3 class="mb-3">
                            Lorem ipsum dolor sit 
                        </h3>
                        <p> 
                        amet consectetur adipisicing elit. Quaerat quasi debitis assumenda aperiam commodi excepturi suscipit magnam iste aut voluptatum temporibus fugit cumque porro reprehenderit corporis impedit, soluta dolore numquam.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                        <img src="images/ak.png" width="280px">
                    </div>
                </div>
            </div>  
            <h3 class="my-5 fw-bold h-font text-center text-dark">MANAGEMENT TEAM</h3>
            <div class="container px-4">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper text-center mb-5">
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="300px"/>
                            <div class="content">
                                <h5 class="text-center"> Test </h5>
                            </div>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" width="300px"/>
                        <h5 class="mt-2"> CR2 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" width="300px"/>
                        <h5 class="mt-2"> CR3 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" width="300px"/>
                        <h5 class="mt-2"> CR4 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" width="300px"/>
                        <h5 class="mt-2"> CR5 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" width="300px"/>
                        <h5 class="mt-2"> CR6 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" width="300px"/>
                        <h5 class="mt-2"> CR7 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" width="300px"/>
                        <h5 class="mt-2"> CR8 </h5>
                        </div>
                        <div class="swiper-slide text-center overflow-hidden rounded">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" width="300px"/>
                        <h5 class="mt-2"> CR9 </h5>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <?php require('inc/footer.php')?>
                    
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    rewind: true,
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                    
                    },
                    autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>            
        
    </body>
</html>