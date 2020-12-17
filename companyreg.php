<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
include 'connect.php';
//Declare Variables
$cname='';
$cmail='';
$caddress='';
$cocity='';
$cocountry='';
$cid='';
$coumail='';
$cphone='';

//get form values
if(isset($_POST['cosubmit'])){
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$cmail=mysqli_real_escape_string($conn,$_POST['cmail']);
$caddress=mysqli_real_escape_string($conn,$_POST['caddress']);
$cocity=mysqli_real_escape_string($conn,$_POST['cocity']);
$cocountry=mysqli_real_escape_string($conn,$_POST['cocountry']);
$cid=mysqli_real_escape_string($conn,$_POST['cid']);
$coumail=mysqli_real_escape_string($conn,$_POST['coumail']);
$cphone=mysqli_real_escape_string($conn,$_POST['cphone']);

    //insert values into database
$csql="insert into company_details(co_name,co_email,co_address,co_city,co_country,co_id,co_umail,co_phone) values ('$cname','$cmail','$caddress','$cocity','$cocountry','$cid','$coumail','$cphone')";
$cquery=mysqli_query($conn,$csql);
if(!$cquery){
    die ('Data Entry Unsuccessful'. mysqli_error($conn));
}
}
    
//$cname,$cmail,$caddress,$cocity,$cocountry,$cid,$coumail,$cphone
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/l.png" type="image/png">
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

    <!--================Header Menu Area =================-->
    <header class="header_area" style="background-color: black">
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
							<li class="nav-item"><a class="nav-link" href="driverreg.php">Driver Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a></li>
							<li class="nav-item"><a class="nav-link" href="customerdrivinghistory.html">Customer Driving History</a></li>
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
    <!--================Header Menu Area =================-->
    <!--================Policy Registration =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="companyreg.php" method="post">
                        <h1 style="color: black">Update Company Details
                            <hr style="color: black">
                        </h1>
                        <p style="color: black">Fill form below to apply your employer's details.</p>
                        <div class="mt-10">
                            <input type="text" name="cname" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>


                        <div class="mt-10">
                            <input type="email" name="cmail" placeholder="Company Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <input type="text" name="caddress" placeholder="Company Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="form-select" id="default-select" align="center">
                                <select name="cocity">
                                    <option value="1">* City</option>
                                    <option>Nairobi</option>
                                    <option>Nakuru</option>
                                    <option>Mombasa</option>
                                    <option>Eldoret</option>
                                    <option>Naivasha</option>
                                </select>

                                <select style="margin-left: 20px" name="cocountry">
                                    <option value="1">* Country</option>
                                    <option>Kenya</option>
                                    <option>Uganda</option>
                                    <option>Tanzania</option>
                                    <option>Somalia</option>
                                </select>
                            </div>

                        </div>

                        <div class="mt-10">
                            <input type="text" name="cid" placeholder="Company ID Number" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="coumail" placeholder="User Email Address" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="cphone" placeholder="Company Phone Number" required class="single-input-accent" maxlength="20">
                        </div>

                        <br>
                        <div class="mt-10" align="center">
                            <button type="submit" name="cosubmit" class="genric-btn success-border">Update Details
                            </button>
                            <button style="margin-left: 50px" type="reset" name="submitreg" class="genric-btn danger-border"><a href="home.html">Cancel Update</a>
                            </button>

                        </div>
                    </form>
                </div>
                <!--==End policy Registration==-->

                <!--category section-->
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!--Category Section-->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="auto.php" class="d-flex">
                                        <p>Auto Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="cargo.php" class="d-flex">
                                        <p>Cargo Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="life.php" class="d-flex">
                                        <p>Life Insurance </p>

                                    </a>
                                </li>
                                <li>
                                    <a href="health.php" class="d-flex">
                                        <p>Health Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="realestate.php" class="d-flex">
                                        <p>Real Estate Insurance</p>

                                    </a>
                                </li>
                                <li>
                                    <a href="incomeprotection.php" class="d-flex">
                                        <p>Income Protection Insurance</p>

                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Quick Links</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p style="color: #f84b67">Update Company Details</p>

                                    </a>
                                </li>

                                <li>
                                    <a href="policyreg.php" class="d-flex">
                                        <p>User Policy Registration</p>

                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!--End category section-->
            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->


    <!-- ================ start footer Area ================= -->
   





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
