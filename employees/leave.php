<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    {
        if(isset($_POST['apply']))
        {

        $empid=$_SESSION['eid'];
        $ClubType=$_POST['ClubType'];
        $fromdate=$_POST['fromdate'];  
        $Fromtime=$_POST['Fromtime'];
        $Totime=$_POST['Totime'];
        $todate=$_POST['todate'];
        $RequestedVenue=$_POST['RequestedVenue'];
        $ExpOccu=$_POST['ExpOccu'];
       
// Compare the timestamp date 
        $description=$_POST['description'];  
        $status=0;
        $isread=0;
        $xxx = date("Y-m-d");
        
        if($fromdate > $todate){
            $error=" Please enter correct details: End Date should be ahead of Starting Date in order to be valid! ";
            }
        else if($fromdate == $todate){
            if($Fromtime > $Totime) {
                $error=" Please enter correct details: End time should be ahead of Starting time in order to be valid! "; 
            }
            else if($Fromtime < $Totime) {
                $error=" Please enter correct details: End time should be ahead of Starting time in order to be valid! "; 
            }
        }
        else {
        $sql="INSERT INTO requests(Club,ToDate,FromDate,RequestedVenue,Fromtime,Totime,ExpOccu,Description,Status,IsRead,empid) VALUES(:ClubType,:todate,:fromdate,:RequestedVenue,:Fromtime,:Totime,:ExpOccu,:description,:status,:isread,:empid)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':ClubType',$ClubType,PDO::PARAM_STR);
        $query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
        $query->bindParam(':todate',$todate,PDO::PARAM_STR);
        $query->bindParam(':RequestedVenue',$RequestedVenue,PDO::PARAM_STR);
        $query->bindParam(':Fromtime',$Fromtime,PDO::PARAM_STR);
        $query->bindParam(':Totime',$Totime,PDO::PARAM_STR);
        $query->bindParam(':ExpOccu',$ExpOccu,PDO::PARAM_STR);
        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);
        $query->bindParam(':isread',$isread,PDO::PARAM_STR);
        $query->bindParam(':empid',$empid,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        if($lastInsertId)
        {
            $msg="You requested for venue booking, Thank You.";
        }   else    {
            $error="Sorry, couldn't process this time. Please try again later.";
        }
    }  }
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
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
<style>
    a:link {
  color: black;
}
a:visited {
  color: black;
}
a:hover {
  color: green;
}
a:active {
  color: blue;
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
                            <li class="active">
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
                    <div class="col-md-1 col-sm-3 clearfix">
                        
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Request a Venue</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="indtry.php">Home</a></li>
                                <li><span>Request Booking</span></li>
                                
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
                    
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                            <?php $xxx = date("Y-m-d");
                                 
                            if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                             </div><?php } 
                                 else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?>
                                <div class="card" >
                                <form name="addemp" method="POST">

                                    <div class="card-body">
                                        <h4 class="header-title">Requisition Form</h4>
                                        <p class="text-muted font-14 mb-4">Please fill up the form below.</p>

                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Starting Date</label>
                                            <input class="form-control" type="date" value="<?php $xxx ?>" data-inputmask="'alias': 'date'" required id="example-date-input" name="fromdate">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-time-input" class="col-form-label">From Time</label>
                                            <input class="form-control" type="time" value="<?php $tt ?>" data-inputmask="'alias': 'time'" required id="example-time-input" name="Fromtime">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">To time</label>
                                            <input class="form-control" type="time" value="<?php $tt ?>" data-inputmask="'alias': 'time'" required id="example-time-input" name="Totime">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">End Date</label>
                                            <input class="form-control" type="date" value="<?php $xxx ?>" data-inputmask="'alias': 'date'" required id="example-date-input" name="todate">
                                        </div>

                                        <div class="form-group">
                                            <label for="col-form-label" class="col-form-label">Expected Occupancy</label>
                                            <input class="form-control" type="int"  required id="example-text-input" name="ExpOccu">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-form-label">Request from Club</label>
                                            <select class="custom-select" name="ClubType" autocomplete="off" required>
                                                <option value="">Click here to select any ...</option>

                                                <?php $sql = "SELECT ClubType from club_type";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->ClubType);?>"><?php echo htmlentities($result->ClubType);?></option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Venue/Location</label>
                                            <select class="custom-select" name="RequestedVenue" autocomplete="off" required>
                                                <option value="">Click here to select any ...</option>
                                                
                                                <?php $sql = "SELECT RequestedVenue from venue";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->RequestedVenue);?>"><?php echo htmlentities($result->RequestedVenue);?></option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Describe the reason for the Request</label>
                                            <textarea class="form-control" name="description" type="text" name="description" id="example-text-input" rows="3" required></textarea>
                                        </div>
                                        <div class="col-12"><div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div></div>
                                        
    <br>
                                        <button class="btn btn-primary" name="apply" id="apply" type="submit">Request Venue Now</button>
                                        
                                    </div>
                                </form>
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