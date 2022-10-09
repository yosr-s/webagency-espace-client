<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:47 GMT -->
<head>
	<title>contact</title>
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

				<!-- header toggler -->
				<br>
				<br>


			


			

			<section class="ls s-pt-30 s-pb-130 s-pt-md-75">
				<div class="container">
					<div class="row">

						<div class="divider-40 d-none d-xl-block"></div>

						<div class="col-lg-8 offset-lg-2 animate" data-animation="scaleAppear">

							<h4 class="text-center">
								Formulaire contact
							</h4>
							<div class="divider-40 d-none d-xl-block"></div>
							<?php 
                                            if (isset($_GET['resultat'])) {

                                            if ($_GET['resultat'] == 'oui') {
                                           ?>
                                        <div class="alert alert-danger" role="alert">
                                          Contact ajouté avec succès!
                                        </div>
                                    <?php } } ?>
							<form class="form-wizard" id="regForm" action="controller/ajoutcontact.php" method="post">
                      <div class="tab">
                        <div class="form-group">
                          <label for="name"></label>
                          <input class="form-control" id="name" type="text" placeholder="nom" required="required" name="nom">
                        </div>

                        <div class="form-group">
                          <label for="name"></label>
                          <input class="form-control" id="name" type="text" placeholder="email" required="required" name="email">
                        </div>
                        
                        <div class="form-group">
                           <label for="example-number-input" class="form-label"></label>
                             <textarea class="form-control" placeholder="sujet" name="sujet"></textarea>
                        </div>
                        <div class="form-group">
                           <label for="example-number-input" class="form-label" ></label>
                             <textarea class="form-control" placeholder="message" name="message"></textarea>
                        </div>
						<div class="row">
							<div class="col-sm-12 text-center mt-15">
								<div class="form-group">
									<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Envoyer
									</button>
								</div>
							</div>

						</div>
                      </div>
                      
                      
                      
                    
                    </form>
						</div>
						<!--.col-* -->

						<div class="divider-75 d-none d-xl-block"></div>

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


	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 20:49:47 GMT -->
</html>