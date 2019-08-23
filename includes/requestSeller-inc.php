<?php 
	session_start();
	include_once 'dbh-inc.php';
	if (isset($_GET['submit'])) {
		$mydate= date("Y-m-d H:i:s");
		$seller= $_GET['useremail'];
		$book= $_GET['bookname'];
		$buyer=$_SESSION['u_email'];
		
		
		$sql="INSERT INTO requestseller (seller, bookname, buyer, daterequest) VALUES ('$seller', '$book', '$buyer' ,'$mydate')";
		mysqli_query($conn, $sql);
		header("Location: ../browse.php?requestSucess");
		exit();
	}


 ?>