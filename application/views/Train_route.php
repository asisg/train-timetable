<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Indian Railway</title>

	
</head>
<body>

<div id="container">
	<h1>TRAIN STATUS</h1>
	
	<?php
	
			// Open form and set URL for submit form
		echo form_open('Train_route/data_submitted');
		
		// Show Name Field in View Page
		echo form_label('Train Number :', 't_name');
		$data= array(
		'name' => 't_name',
		'placeholder' => 'Please Enter Train No.',
		'class' => 'input_box'
		);
		echo form_input($data);
		
		$data = array(
			'type' => 'submit',
			'value'=> 'Train status',
			'class'=> 'submit'
			);
			echo form_submit($data);
			
	  echo form_close();		
	
	
	 ?>
	
	
</div>

</body>
</html>