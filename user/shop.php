<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"burger_shop");
?>

           

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Available Food Categories</h2>

 
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="appetizer.php"><img src="images/home/home.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="appetizer.php"><h2>Appetizer</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="burger.php"><img src="images/home/burg.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="burger.php"><h2>Fast Foods</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="soup.php"><img src="images/home/snp.jpeg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="soup.php"><h2>Soup & Noodles</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="chic.php"><img src="images/home/cnb.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="chic.php"><h2>Chicken & Beef</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="rice.php"><img src="images/home/rice.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="rice.php"><h2>Rice & Vegies</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="shake.php"><img src="images/home/mns.jpeg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="shake.php"><h2>Mocktail & Shakes</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="drink.php"><img src="images/home/drink.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="drink.php"><h2>Drinks</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
			
			<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="sweet.php"><img src="images/home/sweet.jpg" style="padding=10px;" alt="" height=200 width=300 /></a>
									<a href="sweet.php"><h2>Sweetened Foods</h2>
                                </div>
                            </div>
                        </div>
									<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    
									</ul>
									</div>
			</div>
					
                </div>
			</div>
</section>

<?php
include "footer.php";
?>