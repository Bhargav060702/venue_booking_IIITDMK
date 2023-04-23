<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0){   
    header('location:../index.php');
    } else {
        ?>
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
            <!-- modernizr css -->
            <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
        </head>
        <style>
            @media print {
                body * {
                    visibility: hidden;
                }
                .print-container, .print-container * {
                    visibility: visible;
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
                <div class="header-area ">
                <div class="row justify-content-center align-items-center">
                            <!-- nav and search button -->
                            <div class="col-md-1 col-sm-3 clearfix">
                                
                                <div class="nav-btn pull-left">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                
                            </div>
                            <div class="breadcrumbs-area clearfix">
                                    <h4 class="page-title pull-left">Details of Request</h4>
                                    <ul class="breadcrumbs pull-left">
                                        <li><a href="indtry.php">Home</a></li>
                                        <li><a href="df.php">View My Request History</a></li>
                                        <li><span>More Details</span></li>
                                        
                                    </ul>
                                </div>
                            <div class="col-md-1 col-sm-6 clearfix">
                            
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
                                
                    <!-- page title area end -->
                    <div class="main-content-inner align-items-center">
                        <div class="row print-container">
                        <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-center">
                                            
                                            <tbody>

                                            <?php 
                                            $lid=intval($_GET['requestid']);
                                            $sql = "SELECT requests.id as lid,requests.RequestedVenue,club_members.FirstName,club_members.LastName,club_members.EmpId,club_members.id,club_members.Gender,club_members.Phonenumber,club_members.EmailId,requests.Club,requests.ToDate,requests.FromDate,requests.Description,requests.PostingDate,requests.Status,requests.AcademicsRemark,requests.AcademicsRemarkDate,requests.FICremark,requests.FICremarkdate from requests join club_members on requests.empid=club_members.id where requests.id=:lid";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':lid',$lid,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {         
                                                ?>

                                                <tr>

                                                <td ><b>Institute ID:</b></td>
                                              <td colspan="1"><?php echo htmlentities($result->EmpId);?></td>
                                            <td> <b>Member Name:</b></td>
                                              <td colspan="1">
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?></a></td>

                                              <td ><b>Gender :</b></td>
                                              <td colspan="1"><?php echo htmlentities($result->Gender);?></td>
                                          </tr>

                                          <tr>
                                             <td ><b>Institute Email:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->EmailId);?></td>
                                             <td ><b>Contact:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->Phonenumber);?></td>

                                            <td ><b>Club:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->Club);?></td>
                                            
                                        </tr>

                                    <tr>
                                             
                                             <td ><b>Request for the Date From:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->FromDate);?></td>
                                            <td><b>Request for the Date To:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->ToDate);?></td>
                                            
                                        </tr>

                                    

                                <tr>
                                <td ><b> Requested On:</b></td>
                                <td><?php echo htmlentities($result->PostingDate);?></td>

                                <td ><b>Status:</b></td>
                                <td><?php $stats=$result->Status;
                                if($stats==1){
                                    ?>
                                        <span style="color: green">Approved by FIC Academics</span>
                                        <?php } if($stats==2)  { ?>
                                        <span style="color: red">Declined by FIC Academics</span>
                                        <?php } if($stats==3)  { ?>
                                        <span style="color: green">Recommended by FIC Student Affairs</span>
                                        <?php } if($stats==4)  { ?>
                                        <span style="color: red">Declined by FIC Student Affairs</span>
                                        <?php } 
                                        if($stats==0)  { ?>
                                        <span style="color: blue">Pending</span>
                                        <?php } ?>
                                        </td>
                                <td><b>Requested Venue: </b></td>
                                <td><?php echo htmlentities($result->RequestedVenue);?></td>
                                    
                                </tr>

                                <tr>
                                     <td ><b>Occassion for the Request: </b></td>
                                     <td colspan="5"><?php echo htmlentities($result->Description);?></td>
                                          
                                </tr>
                                
                                <tr>
                                    <td ><b>FIC Student Affairs Remark: </b></td>
                                    <td colspan="12"><?php
                                    if($result->FICremark==""){
                                    echo "Waiting for Action";  
                                    }
                                    else{
                                    echo htmlentities($result->FICremark);
                                    }
                                    ?></td>
                                </tr>

                                <tr>
                                <td ><b>FIC Student Affair's Action On: </b></td>
                                    <td><?php
                                    if($result->FICremarkdate==""){
                                    echo "NA";  
                                    }
                                    else{
                                    echo htmlentities($result->FICremarkdate);
                                    }
                                    ?></td>
                                </tr>

                                <tr>
                                    <td ><b>FIC Academics Remark: </b></td>
                                    <td colspan="12"><?php
                                    if($result->AcademicsRemark==""){
                                    echo "Waiting for Action";  
                                    }
                                    else{
                                    echo htmlentities($result->AcademicsRemark);
                                    }
                                    ?></td>
                                </tr>

                                <tr>
                                <td ><b>FIC Academic's Action On: </b></td>
                                    <td><?php
                                    if($result->AcademicsRemarkDate==""){
                                    echo "NA";  
                                    }
                                    else{
                                    echo htmlentities($result->AcademicsRemarkDate);
                                    }
                                    ?></td>
                                </tr>
                                <tr> 
                                <tr>
                            <td colspan="12">
                            <button type="button" id="print" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Print</button>
                            
                            <!-- Modal -->
                            

                            </td>
                            </tr>
                            </form>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main content area end -->
                <!-- footer area start-->
                <!-- footer area end-->
            </div>
                                </div>
            <!-- page container area end -->
            <!-- offset area start -->
            <div class="offset-area">
                <div class="offset-close"><i class="ti-close"></i></div>
                
                
            </div>
            <br> <br> 
            <h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by P.V.S. Bhargav </h6>
            </body>
            <!-- offset area end -->
            <!-- jquery latest version -->
            <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>

            <script>
                const printBtn = document.getElementById('print');
                printBtn.addEventListener('click', function() {
                    print();
                })
            </script>
            <!-- bootstrap 4 js -->
            <script src="../assets/js/popper.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/owl.carousel.min.js"></script>
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
            <script src="../assets/js/plugins.js"></script>
            <script src="../assets/js/scripts.js"></script>
        
        
        </html>
        
        <?php } ?> 