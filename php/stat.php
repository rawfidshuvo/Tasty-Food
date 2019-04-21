<?php
session_start();
if($_SESSION["admin"]=="")
{
?>
<script type="text/javascript">
window.location="admin_login.php";
</script>
<?php
}
include "header.php";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "burger_shop");
$adm1=mysqli_query($link, "select count(id) as numberofproduct from product");
$min1=mysqli_fetch_array($adm1);

$adm2=mysqli_query($link, "select count(placement_id) as totalorder from order_placement");
$min2=mysqli_fetch_array($adm2);

$adm3=mysqli_query($link, "select count(placement_id) as totalbooking from booking_placement");
$min3=mysqli_fetch_array($adm3);

$adm4=mysqli_query($link, "select count(pid) as totalreview from review");
$min4=mysqli_fetch_array($adm4);

$adm5=mysqli_query($link, "select count(id) as totaluser from checkout_address");
$min5=mysqli_fetch_array($adm5);

$adm6=mysqli_query($link, "select sum(total) as totalsale from display_order");
$min6=mysqli_fetch_array($adm6);
?>

<body>
    
        
        
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Overall Statistics</h2>
                
            </div>
            <div class="box round">
                <h2>
                    Figures</h2>
                <div class="block">
                    <div class="stat-col">
                        <span>Total Products</span>
                        <a href="product.php"><p class="purple">
                            <?php echo $min1["numberofproduct"];?></p></a>
                    </div>
                    <div class="stat-col">
                        <span>Total Delivery</span>
                        <a href="display_order.php"><p class="yellow">
                            <?php echo $min2["totalorder"];?></p></a>
                    </div>
					
                    <div class="stat-col">
                        <span>Total Booking</span>
                        <a href="booking_order.php"><p class="green">
                            <?php echo $min3["totalbooking"];?></p></a>
                    </div>
					
                    <div class="stat-col">
                        <span>Total Reviews</span>
                        <a href="review.php"><p class="blue">
                            <?php echo $min4["totalreview"];?></p></a>
                    </div>
					
                    <div class="stat-col">
                        <span>Total Users</span>
                        <a href="user.php"><p class="red">
                            <?php echo $min5["totaluser"];?></p></a>
                    </div>
                    <div class="stat-col">
                        <span>Total sale from delivery</span>
                        <p class="purple">
                            <?php echo $min6["totalsale"];?></p>
                    </div>
                    <div class="stat-col last">
                        <span>Total Admins</span>
                        <p class="darkblue">
                            2</p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="box round">
                <h2>Most Ordered Product</h2>
                <div class="block">
				<img src="img/112.jpg" alt="Ginger" class="top" width=300px height=200px/>
                    <h3 class="start">
                        Beef Burger</h3>
                    
                </div>
            </div>
        </div>
		<a href="stat.php"><div class="grid_3">
            <div class="box round">
                <h2>Most Reviewed Product</h2>
                <div class="block">
                    <img src="img/111.jpg" alt="Ginger" class="top" width=300px height=200px/>
                    <h3 class="start">
                        Pizza</h3>
                    
                </div>
            </div>
        </div></a>
        <div class="grid_3">
            <div class="box round">
                <h2>Most Rated Product</h2>
                <div class="block">
                    <img src="img/112.jpg" alt="Ginger" class="top" width=300px height=200px/>
                    <h3 class="start">
                        Beef Burger</h3>
                    
                </div>
            </div>
        </div>
		
		<div class="grid_4">
            <div class="box round">
                <h2>Most Ordered Product</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/horizontal.jpg" alt="Ginger" class="left" />Lorem ipsum dolor sit
                        amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..</p>
                    
                </div>
            </div>
        </div>
		
		<a href="stat.php"><div class="grid_3">
            <div class="box round">
                <h2>Most Reviewed Product</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/horizontal.jpg" alt="Ginger" class="left" />Lorem ipsum dolor sit
                        amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..</p>
                    
                </div>
            </div>
        </div></a>
        <div class="grid_3">
            <div class="box round">
                <h2>Most Rated Product</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/vertical.jpg" alt="Ginger" class="right" />Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.</p>
                    
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
dfjgkdgj
        </p>
    </div>
</body>
</html>


<?php
include "footer.php";  
  
?>         
     