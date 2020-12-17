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
				  <th scope="col">Vehicle Number</th>
                    <th scope="col">Vehicle Speed</th>
                    <th scope="col">Company Name</th>
					<th scope="col">Vehicle Purchase Date</th>
					<th scope="col">Model Name</th>
					<th scope="col">Previous Insurance Price</th>
					<th scope="col">Privious Accidents</th>
					<th scope="col">License Start Date</th>
					<th scope="col">License End Date</th>
                  </tr>
                </thead>
                <tbody>
				

                  <?php 
                    $con=mysqli_connect("localhost","root","","ims");
                    global $con;
                    $query = "select * from vehicle_registration";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $vno = $row['vehicle_number'];
                      $vprice = $row['vehicle_price'];
                      $cname = $row['company_name'];
					  $vpdate=$row['vehicle_purchase_date'];
                      $mname=$row['model_name'];
                      $piprice=$row['previous_insurance_price'];
                      $paccidents=$row['previous_accidents'];
                      $lstartdate=$row['lincense_start_date'];
                      $lenddate=$row['lincense_end_date'];
                          
                      echo "<tr>
                        <td>$vno</td>
                        <td>$vprice</td>
                        <td>$cname</td>
						<td>$vpdate</td>
						<td>$mname</td>
						<td>$piprice</td>
						<td>$paccidents</td>
						<td>$lstartdate</td>
						<td>$lenddate</td>
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
