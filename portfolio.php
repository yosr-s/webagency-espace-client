<?php 
include('../layoutt/includes/connect_db.php');
$req = $bdd->query("SELECT * FROM portfolio");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/gallery-regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:17 GMT -->
<head>
	<title>portfolio</title>
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

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
			<?php include "includes/header.php"; ?>
<br>
<br>
<br>



			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Portfolio</h1>
							
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-50 s-pb-100 gallery-pagination gallery-regular">
				<div class="d-none d-lg-block divider-20"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".web-design">Web Design</a>
										<a href="#" data-filter=".logo-design">Logo Design</a>
										<a href="#" data-filter=".advertisement">Advertisement</a>
										<a href="#" data-filter=".branding">Branding</a>
										<a href="#" data-filter=".design">Design</a>
										<a href="#" data-filter=".photo">Photo</a>
									</div>
								</div>
							</div>


							<div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
							<?php 

							  while ($donnees = $req->fetch()) {

							?>

								<div class="col-xl-4 col-sm-6 web-design design">

									<div class="vertical-item item-gallery content-absolute gallery text-center ls">
										<div class="item-media">
										<td><img src="<?php echo 'http://localhost/layoutt/uploads/'.$donnees['image'] ?>" width="50px" minheight="50px"></td>



											<div class="media-links">


										</div>
										</div>
										<div class="item-content">
											<h6>
												<br>
												<a href="<?php echo $donnees['lien'] ?>"><?php echo $donnees['titre'] ?></a>
											</h6>
										</div>
									</div>

								</div>
								<?php } ?>


								

								

								

								

								

							</div>
							<!-- .isotope-wrapper-->

							<nav class="navigation pagination @@navClass" role="navigation">
								<h2 class="screen-reader-text">Posts navigation</h2>
								<div class="nav-links">
									<a class="prev page-numbers" href="blog-1.html">
										<i class="fa fa-chevron-left"></i>
										<span class="screen-reader-text">Previous page</span>
									</a>
									<span class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>
										1
									</span>
									<a class="page-numbers" href="blog-1.html">
										<span class="meta-nav screen-reader-text">Page </span>
										2
									</a>
									<a class="page-numbers" href="blog-1.html">
										<span class="meta-nav screen-reader-text">Page </span>
										3
									</a>
									<a class="next page-numbers" href="blog-1.html">
										<span class="screen-reader-text">Next page</span>
										<i class="fa fa-chevron-right"></i>
									</a>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-block divider-105"></div>
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


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/gallery-regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:20 GMT -->
</html>