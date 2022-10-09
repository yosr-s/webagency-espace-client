<?php 
include('../layoutt/includes/connect_db.php');
$req = $bdd->query("SELECT * FROM service");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/services1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:11 GMT -->
<head>
	<title>service</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<?php include "includes/header.php"; ?>

			
			<br>
			<br>


			

			<section class="ls s-pt-30 s-pb-20 s-pb-lg-50 s-pt-lg-50 c-gutter-60 c-mb-40 c-mb-md-60 service-item2">
				<div class="d-none d-lg-block divider-65"></div>
				<div class="container">
					<div class="row">
					
				
						<!-- .col-* -->
						
						<!-- .col-* -->
					
						<!-- .col-* -->
					
						<?php 

						while ($donnees = $req->fetch()) {

						?>
						<div class="col-md-6 col-sm-8">

							<div class="vertical-item text-center">
								<div class="item-media">
								<img src="<?php echo 'http://localhost/layoutt/uploads/'.$donnees['image'] ?>" width="50px">


							</div>
								<div class="item-content">
									<h6>
										<a href="<?php echo $donnees['titre'] ?>.php?id=<?php echo $donnees['id'] ?>"><?php echo $donnees['titre'] ?></a>
									</h6>

									<p>
									<?php echo $donnees['description'] ?>
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<?php } ?>
						
						
						<div class="d-none d-lg-block divider-10"></div>
					</div>
					
				</div>
			</section>

			

			<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

				<div class="container">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
								<img class="margin-negative" src="images/footer_logo.png" alt="">
								<div class="widget widget_social_buttons">
									<a href="http://www.facebook.com/#" class="fa fa-facebook color-icon" title="facebook"></a>
									<a href="http://www.twitter.com/#" class="fa fa-twitter color-icon" title="twitter"></a>
									<a href="http://www.plus.google.com/#" class="fa fa-google color-icon" title="google"></a>
									<a href="http://www.youtube.com/#" class="fa fa-youtube-play color-icon" title="youtube-play"></a>
									<a href="http://www.linkedin.com/#" class="fa fa-linkedin color-icon" title="linkedin"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright
								<span class="copyright_year">2018</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/services1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:11 GMT -->
</html>