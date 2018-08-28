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
	
	$details = json_decode(file_get_contents('https://api.railwayapi.com/v2/route/train/'.$trn_no.'/apikey/tyjdcm6izi'));  
	//echo "<pre>"; print_r($details); echo "</pre>";
	// die; ?>
<h2>Welcome To Indian Railway</h2>
<p>This is Route  of <?php echo $details->train->name; ?></p>


 <table style="width:100%">
  <tr>
  	<th>No</th>
  	<th>Station Name</th>
    <th>Arrival Time</th>
    <th>Departure Time</th> 
    <th>Halt Time</th> 
    <th>Day</th>
    <th>Distance</th> 
  </tr>
  <?php foreach ($details->route as $key => $value) { ?>
  <tr>
    <td><?php echo $value->no; ?></td>
    <td><?php echo $value->station->name; ?></td>
    <td><?php echo $value->scharr; ?></td>
    <td><?php echo $value->schdep; ?></td>
    <td><?php echo $value->distance; ?> min</td> 
    <td><?php echo $value->day; ?> st Day</td> 
    <td><?php echo $value->distance; ?>Km </td>
  </tr>
     <?php } ?> 
</table> 

</body>
</html>