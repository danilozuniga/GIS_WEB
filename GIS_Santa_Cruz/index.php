<!DOCTYPE html>
<html>
<head>
<title>Bienvenidos GADMSC</title>
<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
<link href="http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="_/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body id="home">
<section class="container">
<div class="content row">
<?php include "_/components/php/header.php"; ?>
<?php include "_/components/php/snippet-carousel.php"; ?>
<section class="main col col-lg-8">
<?php include "_/components/php/article_sitios_turisticos.php"; ?>
<?php include "_/components/php/article_agencias_viaje.php"; ?>
<?php include "_/components/php/article_sitios.php"; ?>
</section>
<section class="sidebar col col-lg-4">
<?php include "_/components/php/aside_topten.php"; ?>
<?php include "_/components/php/aside_accordion.php"; ?>
</section>
</div>
<?php include "_/components/php/footer.php"; ?>
</section>
<script type="text/javascript" src="_/js/jquery.min.js" charset="utf-8"></script>
<script src="_/js/bootstrap.min.js"></script>
<script src="_/js/myscript.js"></script>
</body>
</html>