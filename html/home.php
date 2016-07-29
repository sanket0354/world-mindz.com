<!DOCTYPE html>
<html>
<head>
<title>Mind Worldz</title>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width, initial-scale = 1">


<!-- To Get Bootstrap content -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- To get W3.css content -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet"
	href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Google custom fonts -->
<link href="https://fonts.googleapis.com/css?family=Inconsolata"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu"
	rel="stylesheet">



<!-- Self-created css style-sheets -->
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<link rel="stylesheet" type="text/css" href="../css/main_body.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">

<!-- Self created scripts -->
<script src="../javascript/search.js"></script>
<script src="../javascript/search_article_page.js"></script>


</head>
<body>
	<div class="header">
		<?php require './header.php';?>
	</div>
	<div class="home_image_banner">
		<?php require './home_image.php';?>
	</div>
	<div class="main_body">
		<?php require './main_body.php';?>
	</div>
	<div class="footer">
		<?php require './footer.php';?>
	</div>
</body>
</html>