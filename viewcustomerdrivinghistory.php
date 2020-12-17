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
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4380B8;
  color: white;
}
</style>
</head>
<body>
<section class="pricing_area container area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">

              <table id="customers">
                <thead>
                  <tr>
				  <th scope="col">Customer ID</th>
                    <th scope="col">Excessive Speed</th>
                    <th scope="col">Driving Miles</th>
					<th scope="col">Driving Hours</th>
					<th scope="col">Driving Date</th>
					<th scope="col">Average Speed</th>
					<th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
				

                  <?php 
                    $con=mysqli_connect("localhost","root","","ims");
                    global $con;
                    $query = "select * from customerdrivinghistory";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $cid = $row['customer_id'];
                      $espeed = $row['excessive_speed'];
                      $dmiles = $row['driving_miles'];
					  $dhours=$row['driving_hours'];
                      $ddate=$row['driving_date'];
                      $aspeed=$row['avrerage_speed'];
                      $dstatus=$row['status'];
                          
                      echo "<tr>
                        <td>$cid</td>
                        <td>$espeed</td>
                        <td>$dmiles</td>
						<td>$dhours</td>
						<td>$ddate</td>
						<td>$aspeed</td>
						<td>$dstatus</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
         
		 </div>
	  </div>
	  </section>

</body>
</html>
