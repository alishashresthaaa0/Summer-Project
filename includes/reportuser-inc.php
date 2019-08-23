<?php 
	session_start();
	include_once 'dbh-inc.php';
	if (isset($_GET['submitfeed'])) {
		$mydate= date("Y-m-d H:i:s");
		$culprit= $_GET['useremail'];
		$reporter=$_SESSION['u_email'];
		$report=$_GET['reportreason'];
		
		

		$sql="INSERT INTO reportuser (culprit, reporter, reportreason, mydate) VALUES ('$culprit', '$reporter', '$report' ,'$mydate')";
		mysqli_query($conn, $sql);
		header("Location: ../browse.php?requestSucess");
		exit();
	}


 ?>