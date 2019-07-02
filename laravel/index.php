<?php
$routes = glob('*', GLOB_ONLYDIR);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../root.css">
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="main-content-container">
			<div class="inner">

			</div>
			<?php 
			foreach ($routes as $route) {
				if (strpos($route, '.'))
					continue;
				echo("<div class='container $route'>
                <p class='image-caption'><a href='$route/'>$route</a></p>
			</div>
			");
				// echo("<a href='$route/'>$route</a>");
			} 
			?>
		</div>
		
		<script src="main.js" async defer></script>
	</body>
</html>