<!DOCTYPE html>
<html>
	<head>
		<title>ENA</title>
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
	<div id="wrapper">