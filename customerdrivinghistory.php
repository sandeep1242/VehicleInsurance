 <?php
include 'connect.php';
?>
<?php
//variable declaration
$cid='';
$espeed='';
$dmiles='';
$dhours='';
$ddate='';
$aspeed='';
$dstatus='';


    //get values
if(isset($_POST['csubmit'])){
if(isset($_POST['csubmit'])){
$cid=mysqli_real_escape_string($conn,$_POST['cid']); 
$espeed=mysqli_real_escape_string($conn,$_POST['espeed']);
$dmiles=mysqli_real_escape_string($conn,$_POST['dmiles']);
$dhours=mysqli_real_escape_string($conn,$_POST['dhours']);
$ddate=mysqli_real_escape_string($conn,$_POST['ddate']);
$aspeed=mysqli_real_escape_string($conn,$_POST['aspeed']);
$dstatus=mysqli_real_escape_string($conn,$_POST['dstatus']);

    //post to database
$sql="INSERT into customerdrivinghistory (customer_id,excessive_speed,driving_miles,driving_hours,driving_date,avrerage_speed,status) VALUES('$cid','$espeed','$dmiles','$dhours','$ddate','$aspeed','$dstatus')";
$query=mysqli_query($conn,$sql);
      if(!$query){
        die ('could not submit data'. mysqli_error($conn));
    }
    echo 'successfull';

}
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


 <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="customerdrivinghistory.php" method="post">
                        <h1 style="color: black">Add Customer Driving History
                            <hr style="color: black">
                        </h1>
                        
						<div class="mt-10">
                            <input type="text" name="cid" placeholder="Custumer ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                        </div>
						<div class="mt-10" style="margin-left: 25px">
						<label>Excessive Speed</label>
                            Yes
                            <input type="radio" id="primary-radio" value="yes" name="espeed">
                            No
                            <input type="radio" id="primary-radio" placeholder="no" value="no" name="espeed">
                        </div>
                        <div class="mt-10">
						<label>Driving Miles</label>
                        
                            <input type="text" name="dmiles" placeholder="Driving Miles" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
						<label>Driving Hours</label>
                        
                            <input type="text" name="dhours" placeholder="Driving Hours" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
						<div class="mt-10">
						<label>Date</label>
                        
                            <input type="date" name="ddate" placeholder="Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
						<div class="mt-10">
						<label>Average Speed</label>
                        
                            <input type="text" name="aspeed" placeholder="Driving Hours" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
						<div class="mt-10" style="margin-left: 25px">
						<label>Status</label>
                            Safe
                            <input type="radio" id="primary-radio" value="safe" name="dstatus">
                            Rash
                            <input type="radio" id="primary-radio" value="rash" name="dstatus">
                        </div>
						
						<div class="mt-10" align="center">
                            <button type="submit" name="csubmit" class="genric-btn success-border">Add Customer Driving History
                            </button>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	</body>
	</html>