<?php
session_start();
include "header.php";
?>

<section id="cart_items"> 
<div class="container"> 
  <div class="breadcrumbs"> 
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Register</li>
    </ol>
  </div>


<div class="step-one"> 
    <h2 class="heading">Step 2</h2>
  </div>
  
  <!--/checkout-options-->
  <div class="register-req"> 
    <p>Please give proper details about you.</p>
  </div>
  <!--/register-req-->
  <div class="shopper-informations"> 
    <div class="row"> 
      <div class="col-sm-4"> </div>
      <div class="col-sm-5 clearfix"> 
        <div class="bill-to"> 
          <h3>Customer Information</h3>
          <div class="form-one"> 
            <form name="form1" action="" method="post" >
              <input type="text" placeholder="First Name" name="firstname" required pattern="[A-Za-z]+" title="please enter valid firstname[a-z only]" style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="Last Name" name="lastname" required pattern="[A-Za-z]+" title="please enter valid lastname[a-z only]" style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="please enter valid email address" style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="Resi. Address" name="resi" required style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="City" name="city" required pattern="[A-Za-z]+" title="please enter valid city name[a-z only]" style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="Postal Code" name="pincode" required pattern="[0-9]{4}" title="please enter valid pincode[0-9 and 4 digits only]" style="width:350px; background-color: #FFA500">
              <input type="text" placeholder="Contact Number" name="cno" required pattern="[0-9]{11}" title="please enter valid contact number[0-9 and 11 digits only]" style="width:350px; background-color: #FFA500">
              <input type="password" placeholder="Password" name="pass" required style="width:350px; background-color: #FFA500">
			  <input type="submit" name="submit1" value="SUBMIT" style="background-color:#9ACD32; color:white; font-weight:bold">
			  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
<?php
			if(isset($_POST["submit1"]))
			{
				$link=mysqli_connect("localhost","root","");
				mysqli_select_db($link,"burger_shop");
				mysqli_query($link,"insert into checkout_address values('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[resi]','$_POST[city]','$_POST[pincode]','$_POST[cno]','$_POST[pass]')");
				$res=mysqli_query($link,"select id from checkout_address order by id desc limit 1");
				while($row=mysqli_fetch_array($res))
				{
					$_SESSION["userid"]=$row["id"];
				}
				?>
				<script type="text/javascript">
	window.location="shop.php";
	</script>
				<?php
			}
			?>

 
<?php
include "footer.php";
?>
 

</body>
</html>
	

