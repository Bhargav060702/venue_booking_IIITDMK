<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
        header('location:index.php');
    } else {
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel - Booking</title>
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <a href=""> <img src="../assets/images/icon/sa.png"> </a>
</head>

<body class="bg-light">
            <section style="background: linear-gradient(112.84deg, #FFFFFF 0.63%, #EEDFEF 100%)">
<!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><img src="../assets/images/icon/ji.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='dashboard';
                        include '../includes/admin-sidebar.php';
                    ?>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        
            <!-- header area start -->
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
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                            <!-- Notification bell -->
                            <?php include '../includes/admin-notification.php'?>

                        </ul>
						<!-- notification ends -->
                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                <div class="col-sm-6 clearfix">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">Home</a></li>
                                <li><span>Admin's Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 clearfix">
                    <?php include '../includes/admin.php'?>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="leave-section.php">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-briefcase"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Available Clubs</h4>
                                            
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/leavetype-counter.php'?></h1>
                                            <span>Club Types</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="employees.php">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-users"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Registered Club Members</h4>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/emp-counter.php'?></h1>
                                            <span>Active Members</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="department.php">
                                <div class="single-report">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-th-large"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Available Departments</h4>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/dept-counter.php'?></h1>
                                            <span> Departments</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        
                        <div class="col-md-4">
                            <a href="pending-history.php">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-spinner"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Pending Application</h4>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/pendingapp-counter.php'?></h1>
                                            <span>Pending</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="declined-history.php">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-times"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Declined Application</h4>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/declineapp-counter.php'?></h1>
                                            <span>Declined</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                    
                        <div class="col-md-4">
                            <a href="leave-history.php">
                                <div class="single-report">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Approved Application</h4>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h1><?php include 'counters/approvedapp-counter.php'?></h1>
                                            <span>Approved</span>
                                        </div>
                                    </div>
                                    <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                
                <!-- row area start -->
                <div class="row">
                    
                    <!-- trading history area start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                        <!-- <h4 class="header-title">Employee Leave History</h4> -->
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="dashboard.php" role="tab">Recent List</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 7 Requests</option>
                                    </select>
                                </div>
                                &nbsp;
                                        <!-- <h4 class="header-title"></h4> -->
                                <div class="single-table data-tables datatable-dark">
                                    <div class="table-responsive ">
                                        <table id="dataTable3" class="table  table-hover table-striped table-bordered progress-table text-center">
                                            <thead class="text-uppercase">

                                            <tr>
                                                    <td>S.No</td>
                                                    <td>Institute ID</td>
                                                    <td width="120">Full Name</td>
                                                    <td>Club</td>
                                                    <td>Requested Venue</td>
                                                    <td>Requested From</td>
                                                    <td>Requested To</td>
                                                    <td>Current Status</td>
                                                    <td></td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                    
                                                    $sql = "SELECT requests.id as lid,club_members.FirstName,club_members.LastName,club_members.EmpId,club_members.id,requests.RequestedVenue,requests.Club,requests.PostingDate,requests.FromDate,requests.ToDate,requests.Status from requests join club_members on requests.empid=club_members.id order by lid desc limit 7";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0){
                                                    foreach($results as $result)
                                                    {         
                                                ?>  

                                                <tr>
                                                    <td> <b><?php echo htmlentities($cnt);?></b></td>
                                                    <td><?php echo htmlentities($result->EmpId);?></td>
                                                    <td><a href="update-employee.php?empid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->FirstName." ".$result->LastName);?></a></td>
                                                    <td><?php echo htmlentities($result->Club);?></td>
                                                    <td><?php echo htmlentities($result->RequestedVenue);?></td>
                                                    <td><?php echo htmlentities($result->FromDate);?></td>
                                                    <td><?php echo htmlentities($result->ToDate);?></td>
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

                                                    
                                                    <td><a href="employeeLeave-details.php?requestid=<?php echo htmlentities($result->lid);?>" class="btn btn-secondary btn-sm">View Details</a></td>
                                                </tr>
                                                <?php $cnt++;} }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                        
                                        
                            </div>
                                               <a href="pending-history.php" class="btn btn-secondary btn-sm">View More Requests</a>
                        </div>
                        
                    </div>
                    
                    <!-- trading history area end -->
                </div>
            </div>
        
                <!-- row area end -->
                
    </div>
                                                            </div>
                <!-- row area start-->
            
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    
</body>

</html>

<?php } ?>