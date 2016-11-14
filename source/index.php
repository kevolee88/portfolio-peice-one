<?php

$assetsRoot = 'http://' . $_SERVER['HTTP_HOST'] . '/assets';
$sourceRoot = 'http://' . $_SERVER['HTTP_HOST'] . '/source';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$assetsRoot;?>/css/styles.css">
<body>
	<div class="container">

		<?php include('_partials/header/header.php') ?>

		<div class="page-divider"></div>
	<!-- CONTENT -->
		<div class="content">
	<!-- ROW ONE -->
			<div class="row">
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a id="one" href=""><img id="one" class="image-responsive" src="<?=$assetsRoot;?>/img/photo1.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>One</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Two</h4>
					</div>
				</div>
				<div id="col4" id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo3.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Three</h4>
					</div>
				</div>
			</div>
	<!-- END OF ROW ONE -->
	<!-- ROW TWO -->
			<div class="row">
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo4.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Four</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo5.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Five</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo6.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Six</h4>
					</div>
				</div>
			</div>
			<div class="clear"></div>
	<!-- END OF ROW TWO -->
	<!-- ROW THREE -->
			<div class="row">
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo7.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Seven</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo8.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Eight</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo9.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Nine</h4>
					</div>
				</div>
			</div>
			<div class="clear"></div>
	<!-- END OF ROW THREE -->
	<!-- ROW FOUR -->
			<div class="row">
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo10.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Ten</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo11.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Eleven</h4>
					</div>
				</div>
				<div id="col4" class="col-md-4">
					<div class="intrinsic">
						<div class="fill">
							<a href=""><img class="image-responsive" src="<?=$assetsRoot;?>/img/photo12.jpg" alt=""></a>
						</div>
					</div>
					<div>
						<h4>Twelve</h4>
					</div>
				</div>
			</div>
			<div class="clear"></div>
	<!-- END OF ROW THREE -->
		</div>
	<!-- END OF CONTENT -->
		<div class="page-divider"></div>
	<!-- FOOTER -->
		<footer>
			<div class="footer">
				<div class="by">
					<p>Sample by <a href="http://kevinrdesign.com/#filter=kevinrdesign.com/?p=166" target="_blank">Kevin Rogers</a></p>
				</div>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/kevin.rogers.1048" target="_blank"><img src="<?=$assetsRoot;?>/img/facebook.jpg" alt=""></a></li>
						<li><a href="https://twitter.com/xkevoxlee" target="_blank"><img src="<?=$assetsRoot;?>/img/twitter.jpg" alt=""></a></li>
						<li><a href="http://instagram.com/25_lean" target="_blank"><img src="<?=$assetsRoot;?>/img/instagram.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
		</footer>
	<!-- END OF FOOTER -->
	</div>
	<!-- JQUERY -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="<?=$assetsRoot;?>/js/script.js"></script>
</body>
</html>
