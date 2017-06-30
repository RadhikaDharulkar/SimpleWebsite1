<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
  	<?php 
    	$con = mysqli_connect("localhost","root","","mystore");
        if(mysqli_connect_errno()){
          die("Can't connect:");
        }
        session_start();
        $query1 = "SELECT productCost FROM product WHERE productId = 1;";

			$result1 = mysqli_query($con,$query1);
			$row1 = mysqli_fetch_row($result1);
			$cost1 = $row1[0];
		$query2 = "SELECT productCost FROM product WHERE productId = 2;";

			$result2 = mysqli_query($con,$query2);
			$row2 = mysqli_fetch_row($result2);
			$cost2 = $row2[0];
    ?>
  	<div class="container">
  		<div class="jumbotron">
  			<img src="images/logo.jpg">
  			<img src="images/banner.jpg">
  			<h1>My Coffee Store</h1>
  			<p>
  				<h2>Welcome, <?php echo $_SESSION["username"] ?></h2>
  			</p>
  			
  		</div>
		<div class="row">
			<div class="col-md-offset-2 panel-md-6">
				<form class="form-horizontal" method="post" action="checkout.php?productId=1">
					<p> Java Coffee Beans</p>
					<p>
						<img src="images/java.jpg" class="img-responsive">
					</p>
					<p>
						<label>$<?php echo $cost1;?></label>
						<input type="submit" name="buy1" value="Buy">
					</p>
				</form>
			</div>

			<div class="col-md-offset-2 panel-md-6">
				<form class="form-horizontal" method="post" action="checkout.php?productId=2">
					<p> Colombian Bourbon Coffee</p>
					<p>
						<img src="images/colombia.jpg" class="img-responsive">
					</p>
					<p>
						<label>$<?php echo $cost2;?></label>
						<input type="submit" name="buy2" value="Buy">
					</p>
				</form>
			</div>
		</div>

      	<footer>
        <p></p>
      	</footer>
    </div> <!-- /container -->
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="css/bootstrap/dist/js/jquery.min.js"><\/script>')</script>
    <script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
