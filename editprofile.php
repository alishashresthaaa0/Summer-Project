
<?php session_start(); ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php include 'header2.php'; ?>
	<div style="padding:50px 0 10px 0;"><h1><center>EDIT PROFILE</center></h1></div>


	<div class="container-fluid padding bg-light" style="padding-bottom: 5px;">
		<div class="col-md-6 col-md-offset-2 register">
			<form method="post" name="myForm" action="includes/editprofile-inc.php">
 

 		

			<div class="form-group" >
				<label for="fname">First Name :</label>
				<input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off" value="<?php print $_SESSION['u_fname']; ?>" >
			</div>

			<div class="form-group">
				<label for="fname">Last Name :</label>
				<input type="text" name="lname" class="form-control" placeholder="Last Name" autocomplete="off" value="<?php print $_SESSION['u_lname']; ?>">
			</div>

			<div class="form-group">
				<label for="fname">Email :</label>
				<input type="text" name="email" class="form-control" placeholder="E-mail" autocomplete="off" value="<?php print $_SESSION['u_email']; ?>">
			</div>


		<button type="submit" class="btn btn-default" name="update" >Update</button>
		</form>
		</div>
	</div>



	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "eidtprofile=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}

	if(strpos($fullUrl, "editprofile=namemustbetext") == true){
		print "<p class='errorMsg'>**Name must be text</p>";
	}


	if(strpos($fullUrl, "editprofile=invalidEmail") == true){
		print "<p class='errorMsg'>**Please enter valid email</p>";
	}

	

?>


	<?php include 'footer.php'; ?>



</body>
</html>