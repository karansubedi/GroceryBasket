<?php
$connection = oci_connect('example', 'example', '//localhost/xe');
$query  = "Select * from Products";
$result = oci_parse($connection,$query);
$sample = oci_execute($result);
while($row = oci_fetch_array($result)){
	?>
	
	<div class="product product-single">
	<form action="php/Cart.php?action=add&id=<?php echo $row["PRODUCTID"];?>" method = "POST">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span class="sale">-20%</span>
                                    </div>
                                    <ul class="product-countdown">
                                        <li><span>00 H</span></li>
                                        <li><span>00 M</span></li>
                                        <li><span>00 S</span></li>
                                    </ul>
                                    <button class="main-btn quick-view">
                                        <i class="fa fa-search-plus"></i> Quick
                                        view
                                    </button>
									
                                    <?php
                                   echo"<img src='./img/".$row['PRODUCTIMAGE']."' alt=''/>";
                                   ?>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price"><?php echo $row['NAME'] ?><del class="product-old-price">$45.00</del></h3>
									<input type = "hidden" value="<?php echo $row['NAME']; ?>" name="hidden_name">
									<input type = "text" value="" name ="quantity">
									 
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href=""><?php echo $row['NAME'] ?></a></h2>
                                    <div class="product-btns">
                                        <input type ="submit" class="primary-btn add-to-cart" name="add" value ="Add to Cart">
                                    </div>
                                </div>
								</form>
                            </div>
							

<?php
}
?>