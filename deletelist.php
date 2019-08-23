<?php session_start(); ?>

<?php 


	if (isset($_GET['bookid'])) {
		include_once 'includes/dbh-inc.php';

		$id= $_GET['bookid'];
		$sql="DELETE  FROM book WHERE bookid=$id";
		mysqli_query($conn ,$sql);
		header("Location: list.php");
		exit();

}

	

	

 ?>