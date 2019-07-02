<?php
$routes = glob('*', GLOB_ONLYDIR);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pluralsight Portfolio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/.img/51-hci2byjl.jpg" type="image/x-icon">
	<link rel="stylesheet" href="/root.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
		<a class="navbar-brand" href="/">Pluralsight</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Nav Toggle"></button>
		<div class="collapse navbar-collapse" id="mainNav">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">About</a>
				</li>
				<?php
				foreach ($routes as $route) {
					$subRoutes = glob("$route/*", GLOB_ONLYDIR);
					if (sizeof($subRoutes) > 0) {
						echo ("<li class='nav-item dropdown'>
									<a class='nav-link dropdown-toggle' href='#' id='" . $route . "Down' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$route</a>
									<div class='dropdown-menu' aria-labelledby='" . $route . "Down'>");
						foreach ($subRoutes as $subRoute) {
							if (strpos($subRoute, '.'))
								continue;
							echo ("<a class='dropdown-item' href='$subRoute'>$subRoute</a>");
						}

						echo ("<div class='dropdown-divider'></div>
				<a class='dropdown-item' href='$route'>Browse</a></div></li>");
						continue;
					}
					echo ("<li class='nav-item'><a class='nav-link' href='/$route'>$route</a></li>");
				}
				?>
			</ul>
		</div>
	</nav>
	<div class="main-content-container">
		<div class="inner">

		</div>
		<?php
		foreach ($routes as $route) {
			echo ("<div class='container $route'>
                <p class='image-caption'><a href='$route/'>$route</a></p>
			</div>
			");
			// echo("<a href='$route/'>$route</a>");
		}
		?>
	</div>

	<script src="main.js" async defer></script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

</body>

</html>