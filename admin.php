<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<!--=======User Sign Up/ Registration=========-->
<?php
require 'connect.php';




$usrname='';
$password='';
$errors=array();
// LOGIN USER
if (isset($_POST['admlogin'])) {
  $usrname = mysqli_real_escape_string($conn, $_POST['usrname']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($usrname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$usrname' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $usrname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adminhome.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
<!--======End User Sign Up/ Registration======-->

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
<body style="background-image:url(img/678.jpg)">
    <div class="container" style="margin-top:150px;">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h2 style="color: #191970; font-weight: bold">Vehicle Insurance </h2>
                  <p class="mb-4" style="color: #fff; font-weight: bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
                </div>
                  <!--====Login form====-->
                <div class="col-lg-5 ml-auto">
                  <form action="admin.php" method="post" class="form-box">
                    <?php include('errors.php'); ?>
                    <h3 style="color: #191970; font-weight: bold">Administrator Login </h3>
                    <p>Login as <a href="index.php" style="font-weight: 600">Ordinary User</a></p>
                      <div class="form-group">
                      <input type="text" class="form-control" name="usrname" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
        
                  </form>
                             <div class="form-group">
       <button type="button" class="btn btn-primary btn-pill"><a href="adminhome.php" style="color: white">Login</a></button>
                
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>