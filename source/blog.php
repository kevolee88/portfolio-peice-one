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
	<!-- BLOG -->
			<div class="row">
				<div class="col-md-8">
					<div class="blog">
						<div class="article">
							<h2>Heading</h2>
							<p class="date">Date</p>
								<img class="image-responsive" src="<?=$assetsRoot;?>/img/article.jpg" alt="">
								<p>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit, fusce ac sed tempora odio nec phasellus.</p>
								<p>Source: <a class="source" href="http://kevinrdesign.com/#filter=kevinrdesign.com/?p=166" target="_blank">Kevin Rogers</a></p>
							<div class="comment">
								<p><a href="#">Comment</a></p>
								<p><a href="#">Share</a></p>
							</div>
						</div>
					</div>
				</div>
	<!-- END OF BLOG -->
	<!-- SIDEBAR -->
				<div class="col-md-4">
					<div class="sidebar">
						<h2 class="block-title">Latest &amp; Greatest</h2>
						<div class="block-item">
							<h3>One</h3>
							<p>2 YEARS AGO</p>
						</div>
						<div class="block-item">
							<h3>Two</h3>
							<p>4 YEARS AGO</p>
						</div>
						<div class="block-item">
							<h3>Three</h3>
							<p>6 YEARS AGO</p>
						</div>
						<div class="page-divider"></div>
						<h2 class="block-title">Fresh Tweets</h2>
						<div class="block-item">
							<h4>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit.</h4>
							<h4>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit.</h4>
							<h4>Lorem ipsum dolor sit amet, semper nisl a pellentesque dolor quisque, sit aliquam, aliquet velit.</h4>
						</div>
						<div class="page-divider"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
	<!-- END OF SIDEBAR -->
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
