<?php

include "include/databse.php";
?>

<?php


if(isset($_GET['editSch'])){

$edit_id = $_GET['editSch'];

$get_pro = "select * from schedule where id='$edit_id'";

$run_pro = mysqli_query($conn ,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);



$mname = $row_pro['mname'];
$Exname = $row_pro['Exname'];
$sets = $row_pro['sets'];
$reps = $row_pro['reps'];
$date = $row_pro['date'];
$rtime = $row_pro['rtime'];






}

?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Edit Schedules</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Code busters 2021" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
     
        
   
        
       
        
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
                                    <a href="login.php" class="log-out">
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
                    <h3>Equipments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Schedules</a></li>
                            <li class="active">Update Schedules Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Update Schedules</h4>
                                </div>
                                <div class="panel-body">
                                <form class="form-horizontal" name="form" method="post" action="" id="form">
                                        
                                    <div class="form-group">

                                      
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Member Name</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Member Name" onkeyup="checkMname()" value="<?php echo $mname?>" required>
                                                <span id="MnameError"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Exercise Name</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="Exname" id="Exname" placeholder="Enter Exercise Name" onkeyup="checkExname()" value="<?php echo $Exname?>" required>
                                                <span id="ExnameError"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Sets</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="sets" id="sets" placeholder="Enter Sets" onkeyup="checkSet()" value="<?php echo $sets?>" required>
                                                <span id="setsError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Reps</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="reps" id="reps" placeholder="Enter Reps" onkeyup="checkRep()" value="<?php echo $reps?>" required>
                                                <span id="RepError"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                    <label for="input-Default" class="col-sm-2 control-label">Rest Time</label>
                                                    <div class="col-md-3">
                                                        <!-- <input type="text" class="form-control" id="input-Default" placeholder="Enter Height"> -->
                                                        <div class="input-group m-b-sm">
                                                        
                                                            <input type="text" class="form-control"  name="rtime" id="rtime" placeholder="Enter Rest Time" onkeyup="checkRTime()" value="<?php echo $rtime?>" required>
                                                            <span class="input-group-addon" id="basic-addon2">Min</span>
                                                            
                                                        </div>
                                                        <span id="RTimeError"></span>
                                                    </div>
                                        </div>

                                       
                                      
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Date</label>
                                            <div class="col-sm-10 col-md-2">
                                                <input type="date" name="date" id="date" class="form-control " onkeyup="checkDate()" value="<?php echo $date?>" required >
                                                <span id="DateError"></span>
                                            </div>
                                        </div>
                                       
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-6" style="margin-left:40%;">
                                                   
                                                    <div class="col-md-3">
                                                    <button type="submit" name="UpdateSch" id="UpdateSch" class="btn btn-primary btn-rounded">Update</button>
                                                    </div>

                                                    <div class="col-md-3">
                                                    <button type="button" class="btn btn-primary btn-rounded">Reset</button>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>

                                        
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
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
        <script src="assets/plugins/summernote-master/summernote.min.js"></script>
        <!-- <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!-- <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script> -->
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
        
    </body>
</html>


<script>
    
        //Member name check
        function checkMname(){
            const mname      = document.getElementById('mname');
            const mnameValue =  mname.value.trim(); 
            let mnameError   =   document.getElementById("MnameError");

             // Equiname validation
            if (mnameValue === ''){
            // if blank
                mnameError.textContent = "Member name cannot be blank!";
                mnameError.style.color = "#ff1617";
                return false;
                console.log('Member name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(mnameValue)){
            // enters a valid character
                mnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                mnameError.style.color = "#ff1617";
                mnameError.textContent = "Member name cannot have special characters!";
                return false;
            }
        }
        //excercise name check
        function checkExname(){
            const Exname      = document.getElementById('Exname');
            const ExnameValue =  Exname.value.trim(); 
            let ExnameError   =   document.getElementById("ExnameError");

             // Equiname validation
            if (ExnameValue === ''){
            // if blank
                ExnameError.textContent = "Exercise name cannot be blank!";
                ExnameError.style.color = "#ff1617";
                return false;
                console.log('Exercise name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(ExnameValue)){
            // enters a valid character
                ExnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                ExnameError.style.color = "#ff1617";
                ExnameError.textContent = "Exercise name cannot have special characters!";
                return false;
            }
        }

        //Sets validation
        function checkSet(){
            const sets    = document.getElementById('sets');
            const setsValue =  sets.value.trim(); 
            let setsError =   document.getElementById("setsError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (setsValue === ''){
            //enters a valid character
                setsError.textContent = "Sets is required*!";
                setsError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(setsValue)){    
                // enters a valid character
                setsError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                setsError.style.color = "#ff1617";
                setsError.textContent = "Sets cannot have Letters!";
                return false;
            }
        }


         //Reps validation
         function checkRep(){
            const reps    = document.getElementById('reps');
            const repsValue =  reps.value.trim(); 
            let repsError =   document.getElementById("RepError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (repsValue === ''){
            //enters a valid character
                repsError.textContent = "Reps is required*!";
                repsError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(repsValue)){    
                // enters a valid character
                repsError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                repsError.style.color = "#ff1617";
                repsError.textContent = "Reps cannot have Letters!";
                return false;
            }
        }

        //Ret time validation
        function checkRTime(){
            const rtime    = document.getElementById('rtime');
            const rtimeValue =  rtime.value.trim(); 
            let rtimeError =   document.getElementById("RTimeError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (rtimeValue === ''){
            //enters a valid character
            rtimeError.textContent = "Rest Time is required*!";
            rtimeError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(rtimeValue)){    
                // enters a valid character
                rtimeError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                rtimeError.style.color = "#ff1617";
                rtimeError.textContent = "Rest Time cannot have Letters!";
                return false;
            }
        }



        //date
        function checkDate() {
            const regdate   = document.getElementById('date');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("DateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a  date!";
                return false;
            }
        }

        

    </script>

    <script>
            const submit = document.querySelector('#UpdateSch');
            function isValid(){

                if( checkMname() && checkExname() && checkSet() && checkRep() && checkRTime() && checkDate() ) {
                    return true;
                }
                else{
                    return false;
                }
            }

            if(submit.addEventListener) {
                submit.addEventListener('click', returnToPrevious);
            } else {
                submit.attachEvent('onclick', returnToPrevious);
            }

            function returnToPrevious (e) {
                e = e || window.event;

                if(!isValid()) {
                    //if(true) {
                    if(e.preventDefault) {
                        e.preventDefault();
                        alert("Schedule didn't Update. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
        </script>



    <?php
        if(isset($_POST['UpdateSch'])){

        $mname = $_POST['mname'];
        $Exname= $_POST['Exname'];
        $sets= $_POST['sets'];
        $reps= $_POST['reps'];
        $date= $_POST['date'];
        $rtime= $_POST['rtime'];
      
        


        $UpdateSch = "UPDATE schedule  set mname='$mname',Exname='$Exname',sets='$sets',reps='$reps' ,date='$date' ,rtime='$rtime' where id= '$edit_id'";

            
            $run_staff = mysqli_query($conn, $UpdateSch );

        if ($run_staff) {
                echo "<script> alert('Schedule Updated successfully ')</script>";
                echo "<script> window.open('viewSchedules.php')</script>"; 
            }
            else{
                echo "<script> alert('Schedule Didn't Update ')</script>";
                //   echo "Error: " . $run_staff . "<br>" . $conn->error;
            }
        }

    ?>