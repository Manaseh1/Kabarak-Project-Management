<!DOCTYPE html>
<html lang="en">
<?php
require "includes/head.inc.php";
echo "<br>"
?>

<body>
<!-- <form action="includes/signup.inc.php" method="post"> -->
    <!-- <label for="name">First name</label><br><input type="text" name="name" placeholder="name"><br>
    <label for="reg_no">reg_no</label><br><input type="text" name="reg_no" placeholder="Enter number"><br>
    <label for="email">Email</label><br><input type="text" name="email" placeholder="Email"><br>
     <label for="role">role</label><br><input type="text" name="role" placeholder="role"><br>  -->
    <!-- <label for="rep_pwd">Repeat password</label><br><input type="password" "name="rep_pwd placeholder="Firstname"><br>  -->
    <!-- <button name='signup'>Signup</button> -->
<!-- </form>  -->
<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="includes/signup.inc.php"
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">Sign up</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="name" 
		           class="form-label">Name</label>
		    <input type="text" 
		           class="form-control" 
		           name="name" 
		           id="username">
		  </div>
          <div class="mb-3">
		    <label for="name" 
		           class="form-label">Email</label>
		    <input type="text" 
		           class="form-control" 
		           name="email" 
		           id="username">
		  </div>

          <div class="mb-3">
		    <label for="reg_no" 
		           class="form-label">User_ID</label>
		    <input type="text" 
		           class="form-control" 
		           name="reg_no" 
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
          <div class="mb-3">
		    <label for="password" 
		           class="form-label">Confirm password</label>
		    <input type="password" 
                    name="rep_pwd"
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
          
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="lecturer">lecturer</option>
			  <option value="student">student</option>
			  <option value="group">group</option>

		  </select>
		 
		  <button type="submit" 
		          class="btn btn-primary" name="signup">signup</button>
		</form>
      </div>

</body>
</html>