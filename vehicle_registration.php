 <?php
include 'connect.php';
?>
<?php
//variable declaration
$vno='';
$vprice='';
$cname='';
$vpdate='';
$mname='';
$piprice='';
$paccidents='';
$lstartdate='';
$lenddate='';


    //get values
if(isset($_POST['vsubmit'])){
$vno=mysqli_real_escape_string($conn,$_POST['vno']); 
$vprice=mysqli_real_escape_string($conn,$_POST['vprice']);
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$vpdate=mysqli_real_escape_string($conn,$_POST['vpdate']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$piprice=mysqli_real_escape_string($conn,$_POST['piprice']);
$paccidents=mysqli_real_escape_string($conn,$_POST['paccidents']);
$lstartdate=mysqli_real_escape_string($conn,$_POST['lstartdate']);
$lenddate=mysqli_real_escape_string($conn,$_POST['lenddate']);


    //post to database
$sql="INSERT into vehicle_registration (vehicle_number,vehicle_price,company_name,vehicle_purchase_date,model_name,previous_insurance_price,previous_accidents,lincense_start_date,lincense_end_date) VALUES('$vno','$vprice','$cname','$vpdate','$mname','$piprice','$paccidents','$lstartdate','$lenddate')";
$query=mysqli_query($conn,$sql);
      if(!$query){
        die ('could not submit data'. mysqli_error($conn));
    }
    echo 'successfull';

}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/2.jpg" type="image/png">
    <title>Vehicle Insurance</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<header class="header_area" style="background-color: #4380B8">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="home.php">Vehicle Insurance</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                            
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="policyreg.php">Registration</a></li>
							<li class="nav-item"><a class="nav-link" href="price.php">Pricing</a></li>
							<li class="nav-item"><a class="nav-link" href="customerdrivinghistory.php">Customer Driving History</a></li>
							<li class="nav-item"><a class="nav-link" href="payment.html">Payment</a></li>
							<li class="nav-item"><a class="nav-link" href="vehicle_registration.php">Vehicle Registration</a></li>
							
							
						</ul>
						</li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Policies</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="car.php">Car Insurance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bike.php">Bike Insurance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="auto.php">Auto Insurance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="van.php">Van Insurance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="motorcycle.php">Motor Cycle Insurance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tractor.php">Tractor Insurance</a></li>
                                </ul>
                            </li>
  
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="sign_up" href="index.php">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    


 <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="vehicle_registration.php" method="post">
                        <h1 style="color: black">Vehicle Registration
                            <hr style="color: black">
                        </h1>
                        
						<div class="mt-10">
                            <input type="text" name="vno" placeholder="Vehicle Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vehicle Number'" required class="single-input-primary">
                        </div>
						<div class="mt-10">
                            <input type="text" name="vprice" placeholder="Vehicle Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vehicle Price'" required class="single-input-primary">
                        </div>
						
						<div class="mt-10">
                            <input type="text" name="cname" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required class="single-input-primary">
                        </div>
						
						<div class="mt-10">
                            <input type="date" name="vpdate" placeholder="Vehicle Purchase Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Vehicle Purchase Date'" required class="single-input-primary">
                        </div>
						
						<div class="mt-10">
                            <input type="text" name="mname" placeholder="Model Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Model Name'" required class="single-input-primary">
                        </div>
						
						<div class="mt-10">
                            <input type="text" name="piprice" placeholder="Previous Insurance Price" onfocus="this.placeholder = 'Previous Insurance Price'" onblur="this.placeholder = 'Model Name'" required class="single-input-primary">
                        </div>
						
						<div class="mt-10" style="margin-left: 25px">
						<label>Previous Accidents</label>
                            Yes
                            <input type="radio" id="primary-radio" value="yes" name="paccidents">
                            No
                            <input type="radio" id="primary-radio" placeholder="no" value="no" name="paccidents">
                        </div>
                        
						<div class="mt-10">
						<label>License Start Date</label>
                        
                            <input type="date" name="lstartdate" placeholder="License Start Date" onfocus="this.placeholder = 'License Start Date'" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
						<div class="mt-10">
						<label>License End Date</label>
                        
                            <input type="date" name="lenddate" placeholder="License End Date" onfocus="this.placeholder = 'License End Date'" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div
						
						<div class="mt-10" align="center">
                            <button type="submit" name="vsubmit" class="genric-btn success-border">Add Vehicle Details
                            </button>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	</body>
	</html>