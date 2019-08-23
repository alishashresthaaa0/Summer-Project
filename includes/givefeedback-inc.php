<?php session_start(); ?>

 
	<?php	if (isset($_GET['submitfeed'])) {
		include_once 'dbh-inc.php';

		$buyeremail=$_SESSION['u_email'];
		$selleremail=$_GET['useremail'];
		$feedtitle=$_GET['feedtitle'];
	 	$feedComment=$_GET['feedComment'];
		print "The person who buys".$buyeremail;
		print "The person who sells".$selleremail;
		print "oie baulais";

		print $feedtitle;
		print $feedComment;

		$sql="INSERT INTO feedbacks(sellerfeed, buyerfeed, feedtitle, feeds) VALUES('$selleremail', '$buyeremail', '$feedtitle', '$feedComment')";
		mysqli_query($conn,$sql);
		header("Location:../browse.php");
		exit();
			}
	 
	 		
	

 ?>

