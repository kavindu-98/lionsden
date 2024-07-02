<?php
session_start();

include('include/databse.php');

// if(!isset($_SESSION['username'])){

//   echo "<script>window.open('login.php','_self')</script>";
  
//   }
  
//   else {


  
?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Dashboard</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Code busters 2021" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>		
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>	
        	
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
     
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
      
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        
      

        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class=" push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.php" class="logo-text"><span>Lion's Den</span></a>
                    </div><!-- Logo Box -->
                   
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                
                                <li>		
                                    <a href="javascript:void(0);" class="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                               
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                
                              
                               
                        
                                <li>
                                    <a href="user_login.php" class="log-out">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                               
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="assets/images/Final-01.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>Lion's Den Gym<br><small></small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index.php" class=" waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon "><i class="fas fa-id-card"></i></span><p>Registration</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <!-- <i class="fas fa-id-badge"></i> -->
                                <li><a href="MemReg.php">Member Registration</a></li>
                                <li><a href="CoachReg.php">Coach Registration</a></li>
                                
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fas fa-dumbbell"></i></span><p>Equipments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addEquipment.php">Add Equipments</a></li>
                                <li><a href="viewEquipment.php">View Equipments</a></li>
                               
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fa fa-money"></i></span><p>Payments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="MemFee.php">Member Fee</a></li>
                                <li><a href="Bills.php">Bills</a></li>
                                <li><a href="CoachFee.php">Coach Fee</a></li>
                                <li><a href="SupPayment.php">Suppliment Payments</a></li>
                               
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon glyphicon-calendar"></span><p>Schedules</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addSchedules.php">Add Schedules</a></li>
                                <li><a href="viewSchedules.php">View Schedules</a></li>
     
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fas fa-prescription-bottle"></i></span><p>Suppliments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addSuppliment.php">Add Suppliments</a></li>
                                <li><a href="viewSuppliments.php">View Suppliments</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fa fa-bar-chart"></i></span><p>Reports</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="IncomeReport.php">Income Reports</a></li>
                                <li><a href="Reminder.php">Reminder</a></li>
                                <li><a href="MemberSummary.php">Member Summary</a></li>
                                <li><a href="CoachSummary.php">Coach Summary</a></li>
                                <li><a href="SupSummary.php">Suppliment Summary</a></li>
                            </ul>
                        </li>
     
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

            <div class="page-inner">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">107,200</p>
                                        <span class="info-box-title">User activity this month</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">340,230</p>
                                        <span class="info-box-title">Page views</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>$<span class="counter">653,000</span></p>
                                        <span class="info-box-title">Monthly revenue goal</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">47,500</p>
                                        <span class="info-box-title">New emails recieved</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row">
                        
                       
                     
                       
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Project Stats</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                       <table class="table">
                                           <thead>
                                               <tr>
                                                   <th>#</th>
                                                   <th>Project</th>
                                                   <th>Status</th>
                                                   <th>Manager</th>
                                                   <th>Progress</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <th scope="row">452</th>
                                                   <td>Mailbox Template</td>
                                                   <td><span class="label label-info">Pending</span></td>
                                                   <td>David Green</td>
                                                   <td>
                                                   <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th scope="row">327</th>
                                                   <td>Wordpress Theme</td>
                                                   <td><span class="label label-primary">In Progress</span></td>
                                                   <td>Sandra Smith</td>
                                                   <td>
                                                       <div class="progress progress-sm">
                                                           <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th scope="row">226</th>
                                                   <td>Modern Admin Template</td>
                                                   <td><span class="label label-success">Finished</span></td>
                                                   <td>Chritopher Palmer</td>
                                                   <td>
                                                       <div class="progress progress-sm">
                                                           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th scope="row">178</th>
                                                   <td>eCommerce template</td>
                                                   <td><span class="label label-danger">Canceled</span></td>
                                                   <td>Amily Lee</td>
                                                   <td>
                                                       <div class="progress progress-sm">
                                                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th scope="row">157</th>
                                                   <td>Website PSD</td>
                                                   <td><span class="label label-info">Testing</span></td>
                                                   <td>Nick Doe</td>
                                                   <td>
                                                       <div class="progress progress-sm">
                                                           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th scope="row">157</th>
                                                   <td>Fronted Theme</td>
                                                   <td><span class="label label-warning">Waiting</span></td>
                                                   <td>David Green</td>
                                                   <td>
                                                       <div class="progress progress-sm">
                                                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                <p class="no-s">2021 &copy; Lion's Den  by Code-Busters.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
       
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/metrojs/MetroJs.min.js"></script>
        <script src="assets/js/modern.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        
        
    </body>
</html>

<?php 

if(isset($_GET['editMem'])){
include("EditMember.php");

}

?>