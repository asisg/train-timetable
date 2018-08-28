<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Indian Railway</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
	</style>
</head>
<body>
<?php
	print_r($_SESSION);
	$details = json_decode(file_get_contents('https://api.railwayapi.com/v2/pnr-status/pnr/'.$pnr_no.'/apikey/tyjdcm6izi'));  ?>
	 
<h2>Welcome To Indian Railway</h2>
<p>This is your PNR Status of <?php echo $details->train->name; ?></p>



 <table style="width:100%">
  <tr>
  	<th>Date of journey</th>
    <th>Boarding Point</th>
    <th>To Station</th> 
    <th>Total Passenger</th>
    <th>Journey Class</th>
  </tr>
  <tr>
    <td><?php echo $details->doj; ?></td>
    <td><?php echo $details->to_station->code; ?></td>
    <td><?php echo $details->boarding_point->code; ?></td>
    <td><?php echo count($details->passengers); ?></td>
    <td><?php echo $details->journey_class->code; ?></td>
  </tr>
</table> 

 <table style="width:100%">
  <tr>
  	<th>Passengers No.</th>
    <th>Passengers Name</th>
    <th>Booking Status</th> 
   <th>Current Status</th> 
  </tr>
  <?php foreach ($details->passengers as $key => $value) { ?>
  <tr>
  
    <td><?php echo $value->no; ?></td>
    <td>Passenger-<?php echo $value->no; ?></td>
    <td><?php echo $value->booking_status; ?></td>
    <td><?php echo $value->current_status; ?></td> 
  </tr>
     <?php } ?> 
</table> 

</body>
</html>