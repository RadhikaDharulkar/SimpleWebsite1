
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>




    
    
    <div class="container">
      <div class="jumbotron">
        <img src="images/logo.jpg">
        <img src="images/banner.jpg">
        <h1>My Coffee Store</h1>
        
      </div>
      <!-- Example row of columns -->
      <div class="row">
      	 <div class="col-md-offset-2">
      <div class="container">
       	<form method="post">
			<label>Username</label>
			<input type="text" name="username">
			<br>
			<label>Password</label>
			<input type="password" name="password">	
			<br>
			<input type="submit" name="loginButton" value="Login">
		</form> 
      </div>
        </div>
      </div>

      <footer>
        <p></p>
      </footer>
    </div> <!-- /container -->
    <?php 
    	$con = mysqli_connect("localhost","root","","mystore");
        if(mysqli_connect_errno()){
          die("Can't connect:");
        }


        if(isset($_POST["loginButton"])){
        	$uname = $_POST["username"];
	        $pass = $_POST["password"];

	        $query = "SELECT username, password FROM customer WHERE username='$uname' AND password='$pass'";

			$result = mysqli_query($con,$query);
			$num_row = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if( $num_row ==1 ){
 				session_start();
        $_SESSION["username"] = $uname;

 				header("Location: home.php");

			}
  			else
     		{
 				echo "Wrong username/password";
  			}
 		}

    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="css/bootstrap/dist/js/jquery.min.js"><\/script>')</script>
    <script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
