
<?php 
 
 	session_start();

	if (isset($_POST['update'])) 
	{
	
		include_once 'dbh-inc.php';

		
		$emails=$_SESSION['u_email'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];


			//Error Handlers

		//Check if inputs are empty
		if(empty($fname) || empty($lname) || empty($email) )
		{
			header("Location: ../eidtprofile.php?eidtprofile=empty");
			exit();
		}
		else{
				//Check if input characters are valid

				//Check if names are characters
				if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname) ) {
					header("Location: ../editprofile.php?editprofile=namemustbetext");
					exit();				
				}

			 		//Check the validity of inputted value
				else{

						 if(!filter_var($email, FILTER_VALIDATE_EMAIL))
						 {
							header("Location: ../editprofile.php?editprofile=invalidEmail");
							exit();
						}
						 
							else{
								$sql="UPDATE users SET fname='$fname', lname='$lname', email='$email' WHERE email='$emails'";
								mysqli_query($conn, $sql);
								header("Location: ../login.php?update=success");
							}				
						
			}		}
	}
	else
	{
		header("Location: ../editprofile.php");
		exit();
	}