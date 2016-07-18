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
<link rel="stylesheet" type="text/css" href="../../css/header.css">
<link rel="stylesheet" type="text/css" href="../../css/footer.css">
<link rel="stylesheet" type="text/css" href="../../css/home.css">
<link rel="stylesheet" type="text/css" href="../../css/article.css">
<link rel="stylesheet" type="text/css" href="../../css/article_main.css">

<!-- Self created scripts -->
<script src="../../javascript/search.js"></script>


</head>
<body data-spy="scroll"  data-target="#myScrollspy" data-offset="20">
	<div class="header">
		<?php require '../header.php';?>
	</div>
	<div class="articles">
		<?php require './article_main.php';?>
	</div>

	<div class="footer">
		<?php require '../footer.php';?>
	</div>
</body>
</html>