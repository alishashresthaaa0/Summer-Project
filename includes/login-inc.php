<?php

	session_start();



if (isset($_POST['submit'])) {
	

	include_once 'dbh-inc.php';

	$username=$_POST['user_email'];
	$password=$_POST['user_pwd'];


	if(empty($username) || empty($password)){
		header("Location: ../login.php?login=empty");
		exit();
	}else{
		$sql="SELECT * FROM users WHERE email= '$username'";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1)
		{
			header("Location: ../login.php?login=error");
			exit();
		}else{
			if ($row= mysqli_fetch_assoc($result)) {
				//Dehashing the password
				$hashedPwdCheck= password_verify($password, $row['pass']);
				if($hashedPwdCheck == false){
					header("Location: ../login.php?login=pwdisfalse");
					exit();
				}
				elseif($hashedPwdCheck == true){
					//login the user 
					$_SESSION['u_inum']=$row['inum'];
					$_SESSION['u_year']=$row['year'];
					$_SESSION['u_fname']=$row['fname'];
					$_SESSION['u_lname']=$row['lname'];
					$_SESSION['u_email']=$row['email'];

					// if($username="alisha@gmail.com" && $password="alisha")
					// {
					// 	header("Location: ../booklist.php?login=success");
					// 	exit();
					// }
					// else{
						header("Location: ../browse.php?login=sucess");
					exit();
					// }
					

				 }
					
				}
			}
		}
	}


else{
	header("Location: ../login.php?login=empty");
	exit();
}




