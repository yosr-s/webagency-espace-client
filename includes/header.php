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

			<!--topline section visible only on small screens|-->
			<div class="header_absolute s-pb-30">
				<header class="page_header ds">
					<div class="container-fluid">
						<div class="row align-items-center">
							

						<div class="col-xl-2 col-lg-3 col-11">
								<a href="index.html" class="logo text-center">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-lg-6 col-1 text-sm-center">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">


										<li class="active">
											<a href="index.php">Acceuil</a>
											
										</li>
										<li>
											<a href="about.php">Qui sommes nous?</a>
										</li>
										<li>
											<a href="service.php">Services</a>
											<ul>
											<?php 


	include('../layoutt/includes/connect_db.php');
	$req3 = $bdd->query("SELECT * FROM service");
	while ($donnees3 = $req3->fetch()) {

?>
											
											<li>
									<a href="<?php echo $donnees3['titre'] ?>.php"><?php echo $donnees3['titre'] ?></a>
								</li>
							<?php }  ?>
											
			                        
												
																					
												
											</ul>
										</li>
										<li class="active">
											<a href="portfolio.php">Portfolio</a>
											
										</li>
										

										

										<li>
											<a href="contact.php">Contacts</a>
										
										</li>
                                         <li>
										     <a href="login.php">
											<button type="button" class="btn btn-maincolor">Espace client</button>
			                                 </a>
										
										<!-- eof contacts -->
			                            </li>
										

										<!-- contacts -->

									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							
							
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu">
					<span></span>
				</span>
			</header>