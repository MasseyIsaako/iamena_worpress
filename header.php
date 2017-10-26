<!DOCTYPE html>
<html>
	<head>
		<title>ENA</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>
	<?php 

		if (is_front_page()) {
			$bodyClass = array("my_body", "front-page");
		} else{
			$bodyClass = array("my-body");
		}

	 ?>
	<body <?php body_class($bodyClass) ?>>