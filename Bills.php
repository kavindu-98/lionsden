<?php

include "include/databse.php";
?>



<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Bill</title>
        
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
                        <a href="index.html" class="logo-text"><span>Lion's Den</span></a>
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
                                    <a href="login.html" class="log-out">
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
                    <h3>Payments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Payments</a></li>
                            <li class="active">Bills</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Bills</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST">    
                                        
                                    

                                    <div class="form-group">
                                            <label for="ename" class="col-sm-2 control-label">Purpose</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter Member's Name" onkeyup="checkEqName()" required >
                                                <span id="eqNameError"></span>
                                            </div>
                                        </div>
                                            
                                      

                                      
                                      

                                       <div class="form-group">
                                            <label class="col-sm-2 control-label">Date </label>
                                            <div class="col-sm-10 col-md-2">
                                                <input type="date" name="date" id="date" class="form-control " onkeyup="checkRegDate()" required >
                                                <span id="regDateError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Price</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" onkeyup="checkDescription()" required >
                                                <span id="descriptError"></span>
                                            </div>
                                        </div>   
                                       
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-6" style="margin-left:40%;">
                                                   
                                                    <div class="col-md-3">
                                                    <button type="submit" name="addeq" id="addeq" class="btn btn-primary btn-rounded">Add To Bill</button>
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
                    <div class="row">
                        <div class="invoice col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="m-b-md"><b>Lion's Den Gym</b></h1>
                                            <address>
                                                No.56/8, Colombo Road, Alawwa.<br>
                                                Contact No: 077-262 8585
                                            </address>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <h1>INVOICE</h1>
                                            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <p>
                                                <strong>Invoice to</strong><br>
                                               
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Item One</td>
                                                        <td>Lorem ipsum dolor sit amet</td>
                                                        <td>23</td>
                                                        <td>$3157</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Two</td>
                                                        <td>Consectetur adipiscing elit</td>
                                                        <td>13</td>
                                                        <td>$940</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Three</td>
                                                        <td>Eget porttitor lorem</td>
                                                        <td>36</td>
                                                        <td>$2080</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Four</td>
                                                        <td>Integer molestie lorem at massa</td>
                                                        <td>29</td>
                                                        <td>$1105</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Thank you !</h3>
                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <img src="assets/images/signature.png" height="150" class="m-t-lg" alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-right">
                                                <h4 class="no-m m-t-sm">Subtotal</h4>
                                                <h2 class="no-m">$7282</h2>
                                                <hr>
                                                <h4 class="no-m m-t-sm">Shipping</h4>
                                                <h2 class="no-m">$240</h2>
                                                <hr>
                                                <h4 class="no-m m-t-md text-success">Total</h4>
                                                <h1 class="no-m text-success">$7522</h1>
                                                <hr>
                                                <button class="btn btn-primary">Submit your invoice</button>
                                            </div>
                                        </div>
                                    </div><!--row-->
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
    
        //Equiname check
        function checkEqName(){
            const ename      = document.getElementById('ename');
            const enameValue =  ename.value.trim(); 
            let enameError   =   document.getElementById("eqNameError");

             // Equiname validation
            if (enameValue === ''){
            // if blank
                enameError.textContent = "Equipment name cannot be blank!";
                enameError.style.color = "#ff1617";
                return false;
                console.log('Equipment name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(enameValue)){
            // enters a valid character
                enameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                enameError.style.color = "#ff1617";
                enameError.textContent = "Equipment name cannot have special characters!";
                return false;
            }
        }

        //Amount validation
        function checkAmount(){
            const amount    = document.getElementById('amount');
            const amountValue =  amount.value.trim(); 
            let amountError =   document.getElementById("amountError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (amountValue === ''){
            //enters a valid character
                amountError.textContent = "Amount is required*!";
                amountError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(amountValue)){    
                // enters a valid character
                amountError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                amountError.style.color = "#ff1617";
                amountError.textContent = "Amount cannot have Letters!";
                return false;
            }
        }

        //regdate
        function checkRegDate() {
            const regdate   = document.getElementById('date');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("regDateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }
        }

        //description
        function checkDescription(){
            const descrip      = document.getElementById('description');
            const descripValue =  descrip.value.trim(); 
            let descripError   =   document.getElementById("descriptError");

             // Address validation
            if (descripValue === ''){
            // if blank
                descripError.textContent = "Description is required*!";
                descripError.style.color = "#ff1617";
                return false;
                console.log('descript. blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(descripValue)){
            // enters a valid character
                descripError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                descripError.style.color = "#ff1617";
                descripError.textContent = "Description cannot have special characters!";
                return false;
            }
        }

    </script>

    <script>
            const submit = document.querySelector('#addeq');
            function isValid(){

                if( checkEqName() && checkAmount() && checkRegDate() && checkDescription() ) {
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
                        alert("Equipment didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
        </script>



    <?php
        // if(isset($_POST['addeq'])){

        // $ename = $_POST['ename'];
        // $amount= $_POST['amount'];
        // $date= $_POST['date'];
        // $description= $_POST['description'];
        

        // $memreg = "INSERT INTO `equipment` ( `ename`,  `amount`, `date`, `description`) 
        //                     VALUES ('$ename','$amount','$date','$description')";

            
        //     $run_staff = mysqli_query($conn, $memreg );

        // if ($run_staff) {
        //         echo "<script> alert('ITEM Added successfully ')</script>";
        //         echo "<script> window.open('dashboard.php')</script>"; 
        //     }
        //     else{
        //         echo "<script> alert('Item Didnt Added  ')</script>";
        //         //   echo "Error: " . $run_staff . "<br>" . $conn->error;
        //     }
        // }

    ?>