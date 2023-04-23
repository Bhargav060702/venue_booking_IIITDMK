<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>IIITDM Kurnool - FACILITIES</title>
        <style>
            .pop:hover{
                border-top-color: var(--teal_hover)!important;
                transform: scale(1.03);
                transition: all 0.3s;
            }
        </style>
    </head> 
<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    require('inc/links.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
            require('inc/header.php');
    }   else { ?>
       
    <body class="bg-light">
        <section style="background: linear-gradient(112.84deg, #FFFFFF 0.33%, #EEDFEF 100%)">
        
            <div class="container">
                <div class="row">
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
               
            <?php require('inc/footer.php')?>
                    
                        
            <?php } ?> 
    </body>
    
</html>