<?php include_once 'includes/dbh-inc.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<?php include 'header2.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>REQUEST BOOKS</center></h1></div>

	<div class="container-fluid padding bg-light">
		<div class="col-md-6 col-md-offset-2 register">
			<form method="post" action="includes/requestbooks-inc.php" enctype="multipart/form-data">
				
				<div class="form-group" >
				<input type="text" class="form-control" name="book_name" placeholder="Name of Book" autocomplete="off">
				</div>

				<div class="form-group" >
				<input type="text" class="form-control" name="book_author" placeholder="Name of Author" autocomplete="off">
				</div>

				<div class="form-group" >
				<input type="text" class="form-control" name="book_publication" placeholder="Name of Publication" autocomplete="off">
				</div>

				<div class="form-group">
 				<textarea class="form-control" rows="3" name="book_details" placeholder="Short Detail of  Book"></textarea>
				</div>

				<button type="submit" class="btn btn-default" name="request">Request Book</button>
			</form>
		</div>
	</div>


	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "request=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}

	if(strpos($fullUrl, "request=enterChar") == true){
		print "<p class='errorMsg'>**Please enter only characters</p>";
	}


	if(strpos($fullUrl, "request=detailsLength") == true){
		print "<p class='errorMsg'>**Details should be 150 words</p>";
	}



?>



		<div style="padding:50px 0 10px 0;"><h1><center>See Requested Books</center></h1></div>
		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col-md-9 col-md-offset-1 " >
  				<table class="table table-hover table-condensed"  border="5px solid blue" >

    				 <thead>
				      <tr style="background-color: #f1f1f1; ">
				      	 <th style="width: 500px;">User Email</th>
				        <th style="width: 500px;">Book Name</th>
				        <th style="width: 500px;">Book Author</th>
				        <th style="width: 800px;">Book Publication</th> 
				        <th style="width: 800px;">Book Details</th> 
				       </tr>
				    </thead>

				    <?php 

$sql="SELECT * FROM request";
$result=mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows($result);

				?>		<tbody>
					<?php if($resultCheck > 0 )
					{

						while ($row= mysqli_fetch_assoc($result))
						{  ?>

				    	<tr>
				    		<td>
				    		<?php print $row['useremail']; ?>
				    	</td>
				    	<td>
				    		<?php print $row['bookname']; ?>
				    	</td>
				    	<td>
				    		<?php print $row['bookauthor']; ?>
				    	</td>
				    	<td>
				    		<?php print $row['bookpub']; ?>
				    	</td>
				    	<td>
				    		<?php print $row['bookdetails']; ?>
				    	</td>
				    </tr>
<?php } } ?>

				    </tbody>
				</table>




	<?php include 'footer.php'; ?>
</body>
</html>