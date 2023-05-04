<!DOCTYPE html>
<html lang="en">
<?php
require "includes/head.inc.php";
echo "<br>"
?>

<body>
<!-- <form action="includes/signup.inc.php" method="post">
  
    <label for="reg_no/email">reg_no</label><br><input type="text" name="RegnoEmail" placeholder="Enter number"><br>
    <label for="email">Email</label><br><input type="text" name="email" placeholder="Email"><br>
    <label for="pwd">Password</label><br><input type="password" name="pwd" placeholder="Enter password"><br>
    <button name='signup'>login</button>

</form> -->
<div class="container d-flex justify-content-center align-items-center"

      style="min-height: 100vh">
	  
      	<form class="border shadow p-3 rounded"
      	      action="includes/login.inc.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } 
			  session_start();
			 if(isset($_SESSION['uname'])) 
			 {
				// header("location:index.php");
			 }
			  ?>
		  <div class="mb-3">
		    <label for="name" 
		           class="form-label">Email address</label>
		    <input type="text" 
		           class="form-control"
                   placeholder="Enter registration number or email" 
		           name="UsernameEmail" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
					name="pwd" 
		           class="form-control" 
		           id="password">
		  </div>
		 
		  <button type="submit" 
		          class="btn btn-primary" name="login">LOGIN</button><br>
		  <p>Not signed up?<a href="signup.php">Click here</a></p>
		</form>
	
      </div>

</body>
</html>