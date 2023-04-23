<?php
    
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if(strlen($_SESSION['emplogin'])==0){   
    header('location:../index.php');
    }   else    {
        $lid=intval($_GET['requestid']); 

 ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Venue Booking Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <section style="background: linear-gradient(112.84deg, #FFFFFF 0.63%, #EEDFEF 100%)"> 
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
</style>
</head>

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
                            <li class="#">
                                <a href="faci.php" aria-expanded="true"><i class="ti-blackboard"></i><span>Facilities
                                    </span></a>
                            </li>
                            <li class="active">
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
                            <h4 class="page-title pull-left">My Requests</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">Home</a></li>
                                <li><span>View My Requests History</span></li>
                                
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
                        
                        
    
    
        <!-- main content area start -->
        
            <!-- header area start -->
            
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"></h4>
                                <?php if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                             </div><?php } 
                                 else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?>
                                 <div class="card-body">
                                        <!-- <h4 class="header-title"></h4> -->
                                        <div class="single-table data-tables datatable-dark">
                                            <div class="table-responsive ">
                                                <table id="dataTable3" class="table  table-hover table-striped table-bordered progress-table text-center">
                                                <thead class="text-uppercase">

                                                <tr>
                                                <th>S.No.</th>
                                                <th>Club Type</th>
                                                <th>Conditions</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th width="150">Applied</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $eid=$_SESSION['eid'];
                                        $sql = "SELECT requests.id as lid,Club,ToDate,FromDate,Description,PostingDate,Status from requests where empid=:eid";
                                        $query = $dbh -> prepare($sql);
                                        $query->bindParam(':eid',$eid,PDO::PARAM_STR);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt=1;
                                        if($query->rowCount() > 0){
                                        foreach($results as $result)
                                        {  ?> 

                                            <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->Club);?></td>
                                            <td><?php echo htmlentities($result->Description);?></td>
                                            <td><?php echo htmlentities($result->FromDate);?></td>
                                            <td><?php echo htmlentities($result->ToDate);?></td>
                                            <td><?php echo htmlentities($result->PostingDate);?></td>
                                            
                                            <td><?php $stats=$result->Status;
                                if($stats==1){
                                    ?>
                                        <span style="color: green">Approved by Academics</span>
                                        <?php } if($stats==2)  { ?>
                                        <span style="color: red">Declined by Academics</span>
                                        <?php } if($stats==3)  { ?>
                                        <span style="color: green">Recommended by FIC Student Affairs</span>
                                        <?php } if($stats==4)  { ?>
                                        <span style="color: red">Declined by FIC Student Affairs</span>
                                        <?php } 
                                        if($stats==0)  { ?>
                                        <span style="color: blue">Pending</span>
                                        <?php } ?>
                                        </td>
                                        <td><a href="det.php?requestid=<?php echo htmlentities($result->lid);?>" class="btn btn-secondary btn-sm">View Details</a></td>
                                            

                                        </tr>

                                         <?php $cnt++;} }?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
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
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

<?php } ?> 