<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="10">
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
	
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>

<body>

    <!--================Header Menu Area =================-->
   
<h3>Payment Page</h3>

<div>
  <form action="payment.php">
    <label>Customer Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label>Customer Phone Number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
 <label>Card Number</label>
    <input type="text" id="cnumber" name="lastname" placeholder="Enter Card Number.." required>
	 <label>Card Expire Date</label>
    <input type="date" id="" name="lastname" placeholder="Card Expire Date.." required>

 <label>Security Code</label>
    <input type="text" id="lname" name="lastname" placeholder="Security Code.." required>

   
   

   
    <label>Payment Method</label>
    <select id="country" name="country">
      <option value="Paytym">Paytym</option>
      <option value="UPI Payment">UPI Payment</option>
      <option value="Card Payment">Card Payment</option>
    </select>
  
 <button style="margin-left: 50px" type="reset" name="submit" class="genric-btn danger-border"><a href="success.php">Pay</a>
                            </button>
  </form>
</div>

</body>
</html>
