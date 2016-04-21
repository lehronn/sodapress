<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Podstawowe meta-tagi
  ================================================== -->
	<meta charset="utf-8">
	<title>sodapress framework</title>
	<meta name="description" content="opis strony">
	<meta name="keywords" content="słowa kluczowe">
	<meta name="author" content="autor">
	<meta name="robots" content="index,follow,all">
	<meta name="generator" content="sodapress 7.1" />

	<!-- Skalowanie strony na urządzeniach mobilnych
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Ładowanie arkuszy CSS
  ================================================== -->
	<link rel="stylesheet" href="lib/base.css">
	<link rel="stylesheet" href="lib/skeleton.css">
	<link rel="stylesheet" href="lib/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="lib/html5.js"></script>
	<![endif]-->

	<!-- Favikony
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png">
	
	<!-- Skrypt informujący o plikach cookies
	================================================== -->
	<script type="text/javascript" src="lib/cookiesyes.js"></script>
</head>
<body>

	<div class="container">
	
	
	<?php 
		include('content/tmenu.txt');
		include('content/header.txt');
		include('content/menu.txt');

		@$id=$_GET['id'];
  
		if (file_exists('content/'.$id.'.txt'))
			include('content/'.$id.'.txt');
		else  
			include('content/index.txt');
		include "content/bmenu.txt";
		include "content/footer.txt";  ?>
		
		
		

		
		

	</div><!-- container -->

</body>
</html>