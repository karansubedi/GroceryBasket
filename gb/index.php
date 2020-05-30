<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G R O C E R Y || Basket</title>
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/login.css" />



</head>

<body>
		<?php
	include('php/header.php');
	?>
	<div class="cd-user-modal">
		<!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container">
			<!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a class="sign" href="#0">Sign in</a></li>
				<li><a class="sign" href="#0">Register</a></li>
			</ul>
			<?php
			include('php/login/loginform.php');
			?>


				<?php
				include('php/register/registerform.php');
				?>
			<div id="cd-reset-password">
				<!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link
					to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email"
							placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->


	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">
				<div class="category-nav ">
					<span class="category-header ">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Greengrocer<i
									class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Greengrocer Categories</h3>
											</li>
											<li><a href="#">Fruit</a></li>
											<li><a href="#">Salad</a></li>
											<li><a href="#">Vegatables</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>


								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">Greengrocer</h2>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<ul class="category-list">
							<li class="dropdown side-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Meats<i
										class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Meat Categories</h3>
												</li>
												<li><a href="#">Frozen Mutton & Fresh Mutton</a></li>
												<li><a href="#">Frozen Chicken & Fresh Chicken</a></li>
												<li><a href="#">Frozen Pork & Fresh Pork</a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>


									</div>
									<div class="row hidden-sm hidden-xs">
										<div class="col-md-12">
											<hr>
											<a class="banner banner-1" href="#">
												<img src="./img/bakery.png" alt="">
												<div class="banner-caption text-center">
													<h2 class="white-color">Bakery</h2>
												</div>
											</a>
										</div>
									</div>
								</div>
							</li>
							<ul class="category-list">
								<li class="dropdown side-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Bakery<i
											class="fa fa-angle-right"></i></a>
									<div class="custom-menu">
										<div class="row">
											<div class="col-md-4">
												<ul class="list-links">
													<li>
														<h3 class="list-links-title">Bakery Categories</h3>
													</li>
													<li><a href="#">Cakes</a></li>
													<li><a href="#">Cup Cakes</a></li>
													<li><a href="#">Chocolates Box</a></li>
													<li><a href="#">Cookies & Pastries</a></li>
													<li><a href="#">Ice Cream</a></li>
												</ul>
												<hr class="hidden-md hidden-lg">
											</div>


										</div>
										<div class="row hidden-sm hidden-xs">
											<div class="col-md-12">
												<hr>
												<a class="banner banner-1" href="#">
													<img src="./img/bakery.png" alt="">
													<div class="banner-caption text-center">
														<h2 class="white-color">NEW COLLECTION</h2>
														<h3 class="white-color font-weak">HOT DEAL</h3>
													</div>
												</a>
											</div>
										</div>
									</div>
								</li>
								<ul class="category-list">
									<li class="dropdown side-dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown"
											aria-expanded="true">Fishmarket<i class="fa fa-angle-right"></i></a>
										<div class="custom-menu">
											<div class="row">
												<div class="col-md-4">
													<ul class="list-links">
														<li>
															<h3 class="list-links-title">Fish Categories</h3>
														</li>
														<li><a href="#">Fish & Seafood</a></li>
														<li><a href="#">Canned seafood</a></li>
														<li><a href="#">Dry Fish</a></li>
														<li><a href="#">Frozan Fish</a></li>
													</ul>
													<hr class="hidden-md hidden-lg">
												</div>


											</div>
											<div class="row hidden-sm hidden-xs">
												<div class="col-md-12">
													<hr>
													<a class="banner banner-1" href="#">
														<img src="./img/fish.png" alt="fish">
														<div class="banner-caption text-center">
															<h2 class="white-color">Fish</h2>
														</div>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#">View All</a></li>
								</ul>
				</div>

				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="index.html">Home</a></li>
						<li><a href="products.html">Products</a></li>

						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
				</div>
			</div>
		</div>
	</div>

	<div id="home">
		<div class="container">
			<div class="home-wrap">
				<div id="home-slick">
					<div class="banner banner-1">
						<img src="./img/banner01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1>Greengrocer
								sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>

					<div class="banner banner-1">
						<img src="./img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50%
									OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>

					<div class="banner banner-1">
						<img src="./img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<?php
							include('php/displayimages.php');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Latest Products</h2>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="./img/product01.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
									Cart</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="./img/product02.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
									Cart</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="./img/product03.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
									Cart</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
							</div>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="./img/product04.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
									Cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>



		<?php
		include('php/footer.php');
		?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/login.js"></script>
		<!-- partial -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="./script.js"></script>

</body>

</html>