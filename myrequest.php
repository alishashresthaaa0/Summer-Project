<?php 
	session_start();
	include_once 'includes/dbh-inc.php';
$email=$_SESSION['u_email'];


	$sql="SELECT * FROM requestseller WHERE seller='$email'";
	$result=mysqli_query($conn, $sql);
	$resultCheck=mysqli_num_rows($result);
?>


	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	
		<?php include_once 'header2.php'; ?>
		<div style="padding:50px 0 10px 0;"><h1><center>REQUEST FOR MY BOOKS</center></h1></div>
	

		<div class="container padding" style="width: 100%; background-color:	#f9f9f9	;">
			<div class="col-md-6 col-md-offset-3">
<?php 
	if($resultCheck>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{?>
			<div class="well well-lg">
				<?php print "<h4>"."<u>".$row['buyer']."</u>"." &nbsp;has requested&nbsp;  "."<u>". $row['bookname']."</u>"." &nbsp; on&nbsp;  ". $row['daterequest']. "</h4>"; ?>
			</div>
<?php 	}
	}
?>


</div>
</div>
		<?php include_once 'footer.php'; ?>


	</body>
	</html>

	
			
	

