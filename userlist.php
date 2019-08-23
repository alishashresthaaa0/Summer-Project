
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once 'adminheader.php' ?>

	<div style="padding:50px 0 10px 0;"><h1><center>USER LIST</center></h1></div>

	<?php 

		include_once 'includes/dbh-inc.php';

		$sql="SELECT * FROM users";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);
		?>

		

		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col-md-10 col-md-offset-1 " >
  				<table class="table table-hover table-condensed"  border="5px solid blue" >
    				 <thead>

				      <tr style="background-color: #f1f1f1; ">
				      	<th style="width: 300px;">ID Number</th>
				        <th style="width: 300px;">Batch Year</th>
				        <th style="width: 500px;">First Name</th>
				        <th style="width: 500px;">Last Name</th> 				        
				        <th style="width: 600px;">Email</th>
				        <th style="width: 200px;">Delete User</th>    
				        
				      </tr>
				    </thead>

				    <tbody>
				    	<?php if($resultCheck>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
			?>


				<tr>
						<th style="width: 300px;"><?php print $row['inum'] ?></th>
					   <th style="width: 300px;"><?php print $row['year']; ?></th>
				        <th style="width: 500px;"><?php print $row['fname']; ?></th>
				        <th style="width: 500px;"> <?php print $row['lname']; ?></th>
				       
				        <th style="width: 600px;"><?php print $row['email']; ?></th>
				         <th>
				         	<form method="get" action="userdelete.php?id=<?php print $row['id']; ?>">
				         		<input type="hidden" name="id" value="<?php print $row['id']; ?>">
				         	<button class="btn btn-default" name="deleteuser" value="delete">Delete</button>
				         </form>
				         </th>
				</tr>
				    </tbody>

	<?php }}?>
</table>
</div>
</div>


	<?php include_once 'footer.php'; ?>

</body>
</html>