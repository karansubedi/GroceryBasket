<?php
error_reporting(0);
$connection = oci_connect('example', 'example', '//localhost/xe');
session_start();
	$query = "SELECT USERID FROM USERS WHERE USERNAME = '".$_SESSION['login']."'";
	$result = oci_parse($connection , $query);
	oci_execute($result);
	$row =  oci_fetch_array($result);
	$userid = $row['USERID'];

if(isset($_POST['add'])){
	$id = $_GET['id'];
	if(isset($_POST['quantity'])){
	$quantity = $_POST['quantity'];
	}
	$qry = "SELECT * FROM PRODUCTS WHERE PRODUCTID = '".$id."'";
	$parse = oci_parse($connection,$qry);
	oci_execute($parse);
	$tab = oci_fetch_array($parse);
	$pname = $tab['NAME'];
	$img = $tab['PRODUCTIMAGE'];
	$price = $tab['PRICE'];
	
	$cart = "INSERT INTO CART(CARTID,PRODUCTID,QUANTITY,PRICE,PRODUCTIMAGE,USERID,NAME) VALUES('','$id','$quantity','$price','$img','$userid','$pname')";
	$pars = oci_parse($connection,$cart);
	oci_execute($pars);
}

?>





<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="primary-btn"><a href="checkout.html"> Checkout </a> <i
												class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>