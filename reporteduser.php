
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once 'adminheader.php' ?>

	<div style="padding:50px 0 10px 0;"><h1><center>REPORTED USER</center></h1></div>

	<?php 

		include_once 'includes/dbh-inc.php';

		$sql="SELECT * FROM reportuser";
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
  <h4 class="list-group-item">Culprit: <b><?php print $row['culprit'] ?></b></h4>
  <h4 class="list-group-item">Reporter: <b><?php print $row['reporter'] ?></b></h4>
  <h4 class="list-group-item">Report Reason: <b><?php print $row['reportreason'] ?></b></h4>
 
</div>

  				
	<?php }}?>
</table>
</div>
</div>


	<?php include_once 'footer.php'; ?>

</body>
</html>