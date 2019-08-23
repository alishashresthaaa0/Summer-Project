
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<?php include 'header.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>REGISTER HERE</center></h1></div>

	<div class="container-fluid padding light" style="padding-bottom: 5px;">
		<div class="col-md-6 col-md-offset-3 register">
			<form method="post" name="myForm" action="includes/register-inc.php">
 

 			<div class="form-group" >
				<input type="text" class="form-control" name="inum" placeholder="ID Num" autocomplete="off">
			</div>

			<div class="form-group">
				<select class="form-control" name="year">
					<option value="0" selected="selected">Select Year</option>
					<option>2070</option>
					<option>2071</option>
					<option>2072</option>
					<option>2073</option>
				</select>
			</div>

			<div class="form-group" >
				<input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="text" name="lname" class="form-control" placeholder="Last Name" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="E-mail" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="password" name="rpass" class="form-control" placeholder="Retype Password" autocomplete="off">
			</div>

		<button type="submit" class="btn btn-default" name="submit" >Register</button>
		</form>
		</div>
	</div>

<br><br>


	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "register=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}
		
	if(strpos($fullUrl, "register=Idmustbenumber") == true){
		print "<p class='errorMsg'>**ID must be number</p>";
	}
	
	if(strpos($fullUrl, "register=namemustbetext") == true){
		print "<p class='errorMsg'>**Name must be text</p>";
	}
	if(strpos($fullUrl, "register=passwordInvalid") == true){
		print "<p class='errorMsg'>**Password must contain only letters and numbers</p>";
	}
	if(strpos($fullUrl, "register=PasswordLength") == true){
		print "<p class='errorMsg'>**Password must be between 6 and 12 characters</p>";
	}
	if(strpos($fullUrl, "register=invalidID") == true){
		print "<p class='errorMsg'>**ID must be between 1 and 62</p>";
	}

	if(strpos($fullUrl, "register=invalidEmail") == true){
		print "<p class='errorMsg'>**Please enter valid email</p>";
	}
	if(strpos($fullUrl, "register=EmailTaken") == true){
		print "<p class='errorMsg'>**Email is already taken.</p>";
	}	
	
	if(strpos($fullUrl, "register=NotMatch") == true){
		print "<p class='errorMsg'>**Password doesnot match</p>";
	}



	 ?>

<br><br>
	<?php include 'footer.php'; ?>



	<!-- <script type="text/javascript">
		function Validation()
		{
			var	inum= document.getElementById('inum');
			var name=inum.options[inum.selectedIndex].value;
			var	year= document.getElementById('year');
			var yearselected= year.options[year.selectedIndex].value;
			
			var fname= document.getElementById('fname').value;
			var lname= document.getElementById('lname').value;
			var email= document.getElementById('email').value;
			var pass= document.getElementById('pass').value;
			var rpass= document.getElementById('rpass').value;
			


			if(idnumber==0)
			{
				document.getElementById('idnum').innerHTML="** Please select your ID";
				return false;
			}

			if (yearselected== 0) {
				document.getElementById('years').innerHTML="** Please select your year";
				return false;
			}
		
			
			if (fname==0) {
				document.getElementById('firstname').innerHTML="** Please enter your first name";
				return false;
			}

			if (!isNaN(fname)) {
				document.getElementById('firstname').innerHTML="** Numbers not allowed";
				return false;
			}

			if (lname==0) {
				document.getElementById('lastname').innerHTML="** Please enter your last name";
				return false;
			}
			if (!isNaN(lname)) {
				document.getElementById('lastname').innerHTML="** Numbers not allowed";
				return false;
			}

			if (email==0) {
				document.getElementById('mail').innerHTML="** Please enter your E-mail";
				return false;
			}
			if (email.indexOf('@')<=0) {
				document.getElementById('mail').innerHTML="** Please enter valid E-mail";
				return false;
			}

			if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.'))
			{
				document.getElementById('mail').innerHTML="** Please enter valid E-mail";
				return false;
			}
			if (pass==0) {
				document.getElementById('pw').innerHTML="** Please enter your password";
				return false;
			}
			if(pass.length<6 || pass.length>9){
				document.getElementById('pw').innerHTML="** Password must be between 6 and 9 charaters";
				return false;
			}


			if (rpass==0) {
				document.getElementById('rpw').innerHTML="** Please retype your password";
				return false;
			}

			if(rpass!=pass)
			{
				document.getElementById('rpw').innerHTML="** Please enter same password";
				return false;
			}
		}


	</script> -->


</body>
</html>

