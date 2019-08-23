<?php session_start(); ?>

<?php 


	if (isset($_GET['deleteuser'])) {
		include_once 'includes/dbh-inc.php';

		$id= $_GET['id'];
		$sql="DELETE  FROM users WHERE id=$id";
		mysqli_query($conn ,$sql);
		header("Location: userlist.php");
		exit();

}

	

	

 ?>