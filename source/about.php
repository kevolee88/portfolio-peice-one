<?php

$assetsRoot = 'http://' . $_SERVER['HTTP_HOST'] . '/assets';
$sourceRoot = 'http://' . $_SERVER['HTTP_HOST'] . '/source';

?>
<!DOCTYPE html>
<head>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$assetsRoot;?>/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?=$assetsRoot;?>/css/grid.css">
<body>
	<div class="container">

		<?php include('_partials/header/header.php') ?>

		<div class="page-divider"></div>
	<!-- CONTENT -->
		<div class="content">
	<!-- ROW ONE -->
			<div class="row">
				<div class="col-md-6">
					<img class="image-responsive kevin" src="<?=$assetsRoot;?>/img/kevin.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h1>Kevin Rogers</h1>
					<p>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit, fusce ac sed tempora odio nec phasellus, nullam mauris eget ligula magna cursus. Velit sit risus pulvinar venenatis nec, vel eros. Vitae amet dolor dictum hic varius, luctus sed ultrices integer dictumst nullam vitae, ut mattis sed turpis semper quam orci, quis sed consequatur vel, eros sociosqu ipsum.</p>
					<p>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit, fusce ac sed tempora odio nec phasellus, nullam mauris eget ligula magna cursus. Velit sit risus pulvinar venenatis nec, vel eros. Vitae amet dolor dictum hic varius, luctus sed ultrices integer dictumst nullam vitae, ut mattis sed turpis semper quam orci, quis sed consequatur vel, eros sociosqu ipsum.</p>
				</div>
			</div>
			<div class="clear"></div>
	<!-- END OF ROW ONE -->
		<div class="page-divider"></div>

		<?php include('_partials/footer/footer.php') ?>

	</div>
	<!-- JQUERY -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="<?=$assetsRoot;?>/js/script.js"></script>
</body>
</html>
