<header>
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span> Welcome to Grocery Basket</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">grocerybasket@gmail.com</a></li>
						<li><a href="#">+977-01123456</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div id="header">
			<div class="container">
				<div class="pull-left">
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="./img/logo.png" alt="Logo">
						</a>
					</div>

					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>

				<div class="pull-right">
					<ul class="header-btns">
						<li class="header-account dropdown default-dropdown">
							<div class="#" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase"><?php
								if(isset($_SESSION['login'])){
								echo $_SESSION['login'];
								}
								else{
									echo "Account";
								}
								?></strong>
							</div>
							<nav class="main-nav">
								<ul>
									<li><a class="cd-signin" href="#0">Login</a> /
											<a class="cd-signup" href="#0">Join</a></li>
								</ul>
							</nav>
							<!-- <ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="login/index.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul> -->
						</li>

						<?php
						include('Cart.php');
						?>

						

						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>