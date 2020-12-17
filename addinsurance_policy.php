<?php

//variable declaration
$pid='';
$pname='';
$pprice='';

    //get values
if(isset($_POST['psubmit'])){
$pid=mysqli_real_escape_string($conn,$_POST['pid']);
$pname=mysqli_real_escape_string($conn,$_POST['pname']); 
$pprice=mysqli_real_escape_string($conn,$_POST['pprice']); 

    //post to database
$sql="INSERT into insurance_policies (policy_id,policy_name,policy_price) VALUES('$pid','$pname','$pprice')";
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

    <!--================Header Menu Area =================-->
    <!--================Policy Registration =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="addinsurance_policy.php" method="post">
                        <h1 style="color: black">ADD INSURANCE POLICY
                            <hr style="color: black">
                        </h1>
                        <div class="mt-10">
                            <input type="text" name="pname" placeholder="Policy Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Policy Name'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <input type="text" name="pprice" placeholder="Policy Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Policy Price'" required class="single-input">
                        </div>
                        
                       <br>
                        <div align="center">
                            <button type="submit" name="psubmit" class="genric-btn success-border">Add Policy
                            </button>
                            

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->


    <!-- ================ start footer Area ================= -->
  
</body>

</html>
