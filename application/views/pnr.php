<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Indian Railway</title>

	
</head>
<body>
<?php if($_SESSION['isUserLoggedIn']==1){ ?>
	<a href="#">Logout</a>
<div id="container">
	<h1>PNR STATUS</h1>
	
	<?php
	
			// Open form and set URL for submit form
		echo form_open('pnr/data_submitted');
		
		// Show Name Field in View Page
		echo form_label('Pnr No. :', 'u_name');
		$data= array(
		'name' => 'u_name',
		'placeholder' => 'Please Enter Pnr No.',
		'class' => 'input_box'
		);
		echo form_input($data);
		
		$data = array(
			'type' => 'submit',
			'value'=> 'Pnr status',
			'class'=> 'submit'
			);
			echo form_submit($data);
			
	  echo form_close();		
	
	
	 ?>
	
	
</div>
<?php }else{
	
	redirect('users/login');
	
} ?>

</body>
</html>