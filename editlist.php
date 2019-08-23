<?php session_start(); ?>

<?php 
	 if (isset($_GET['bookid']))
	  {
	 	include_once 'includes/dbh-inc.php';

	 	$id= $_GET['bookid'];
	}
	$sql="SELECT * FROM book WHERE bookid=$id";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	


 ?> 




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<?php include 'header2.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>EDIT YOUR LIST</center></h1></div>

	<div class="container-fluid padding bg-light">
		<div class="col-md-6 col-md-offset-2 register">
			<form method="post" enctype="multipart/form-data" action="includes/updatelist-inc.php">

				<?php if($resultCheck>0){

	while ($row= mysqli_fetch_assoc($result))
				{ 	
					$_SESSION['bookid']=$row['bookid'];
					


					?>

				<div class="form-group" >
				<input type="text" class="form-control" name="book_name" placeholder="Name of Book" autocomplete="off" value="<?php print $row['bookname'];?>">
				</div>

				


				

				<div class="form-group" >
				<input type="text" class="form-control" name="book_author" placeholder="Name of Author" autocomplete="off" value="<?php print $row['bookauthor'];?>">
				</div>

				<div class="form-group" >
				<input type="text" class="form-control" name="book_publication" placeholder="Name of Publication" autocomplete="off" value="<?php print $row['bookpub'];?>">
				</div>

				<div class="form-group">
 				<textarea class="form-control" rows="3" name="book_details"  placeholder="Short Detail of  Book" ><?php print $row['bookdetails'];?></textarea>
				</div>
				
				<div class="form-group" >
				<input type="text" class="form-control" name="book_price" placeholder="Price of book" autocomplete="off" value="<?php print $row['bookprice'];?>">
				</div>

				

			<?php }}  ?>

				<button type="submit" class="btn btn-default" name="updatebook">Update Book</button>
			</form>
		</div>
	</div>


	
	<?php include 'footer.php'; ?>
</body>
</html>