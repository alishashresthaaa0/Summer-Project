<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once 'header2.php' ?>

	<div style="padding:50px 0 10px 0;"><h1><center>FEEDBACK RECEIVED</center></h1></div>

	<?php 

		include_once 'includes/dbh-inc.php';
		$user=$_SESSION['u_email'];

		$sql="SELECT * FROM feedbacks WHERE sellerfeed='$user'";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);
		?>

		

		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col-md-10 col-md-offset-1 " >

				<?php if($resultCheck>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
			?>

				<div class="list-group padding " style="background-color: blue; margin-bottom: 50px;">
  <h4 class="list-group-item">Buyer: <b><?php print $row['buyerfeed'] ?></b></h4>
  <h4 class="list-group-item">Feed Title: <b><?php print $row['feedtitle'] ?></b></h4>
  <h4 class="list-group-item">FeedBack: <b><?php print $row['feeds'] ?></b></h4>
 
</div>

  				
	<?php }}?>
</table>
</div>
</div>


	<?php include_once 'footer.php'; ?>

</body>
</html>