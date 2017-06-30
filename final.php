<ht<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Final Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
  	<?php 
        session_start();
        $totalcost = $_SESSION["cost"] * $_SESSION["quantity"];
        echo $totalcost;
    ?>
  	<div class="container">
  		<div class="jumbotron">
  			<img src="images/logo.jpg">
  			<img src="images/banner.jpg">
        <h1>My Coffee Store</h1>
  			<p>
  				<h2>Welcome, <?php echo $_SESSION["username"] ?></h2>
  				<h3><a href="home.php">Go back</a></h3>
  			</p>
  			
  		</div>
		<div class="row">
			<div>
				<form method="post">
					<label>Your total is: <?php echo $totalcost;?></label>
					<input type="submit" name="buy" value="Buy">
				</form>
			</div>
		</div>
		<?php
			if (isset($_POST["buy"])) {
        session_destroy();
        header("Location:index.php");
			}
		?>

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
