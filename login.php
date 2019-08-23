
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>LOGIN HERE</center></h1></div>

	<div class="container-fluid padding light" >
		<div class="col-md-6 col-md-offset-2 ">	

			<form method="post" name="myLogin"  action="includes/login-inc.php">
				

				<div class="form-group">
				<input type="text" name="user_email" class="form-control" placeholder="E-mail" autocomplete="off">
				</div>

				<div class="form-group">
				<input type="password" name="user_pwd" class="form-control" placeholder="Password" autocomplete="off">
				</div>

				<button type="submit" class="btn btn-default" name="submit" >Login</button>
			</form>
		</div>
	</div>

	<br><br>
	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "login=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}

	if(strpos($fullUrl, "login=error") == true){
		print "<p class='errorMsg'>**Your email or password is incorrect</p>";
	}


	if(strpos($fullUrl, "login=pwdisfalse") == true){
		print "<p class='errorMsg'>**Your email or password is incorrect</p>";
	}

?>

<br><br>
	<?php include 'footer.php'; ?>

</body>
</html>