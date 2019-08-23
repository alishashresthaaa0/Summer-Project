
<?php  
		session_start();

		include_once 'includes/dbh-inc.php';
		$id=$_SESSION['u_email'];

		$sql="SELECT * FROM users where email= '$id'";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_array($result))
		{
			$inum="$row[inum]";
			$year="$row[year]";
			$fname="$row[fname]";
			$lname="$row[lname]";
			$email="$row[email]";

		}
		
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php include 'header2.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>EDIT PROFILE</center></h1></div>


	<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">
			<div class="col-md-6 col-md-offset-3 " >	
			<table class="table table-hover" border="1">
		    <thead>
		      <tr>
		        <th>Profile Information</th>
		        <th>User Data</th>
		       </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>ID Number</td>
		        <td><?php print "$inum"; ?></td>		        
		      </tr>
		      <tr>
		        <td>Year</td>
		        <td><?php print "$year"; ?></td>		        
		      </tr>
		      <tr>
		        <td>First Name</td>
		        <td><?php print "$fname"; ?></td>		        
		      </tr>
		      <tr>
		        <td>Last Name</td>
		        <td><?php print "$lname"; ?></td>		        
		      </tr>
		      <tr>
		        <td>Email</td>
		        <td><?php print "$email"; ?></td>		        
		      </tr>
		      
		      	
		     
		    </tbody>
		</table>
		<a href="editprofile.php"><button class="btn btn-default">Edit Profile</button></a>
    	</div>
    </div>
  




<?php include 'footer.php'; ?>
</body>
</html>