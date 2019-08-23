<?php session_start(); ?>
<?php include_once 'includes/dbh-inc.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php include 'header2.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>BROWSES BOOKS</center></h1></div>


	



<?php

$sql="SELECT * FROM book ORDER by bookid DESC;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);

if($resultCheck > 0 )
{

	while ($row= mysqli_fetch_assoc($result))
	{  
?>

				
				<div class=" bookContent col-md-4 ">
					

					<form method="get" action="book-details.php?bookid=<?php print $row['bookid']; ?>">	
						<div class="container-fluid  bookDisplay">
							<div class="thumbnail " style="height: 200px; width: 300px;">							
								<center><img src= "images/<?php print $row['bookimage']; ?>" class="img-thumbnail img-responsive" style="width:280px; height:180px; padding:10px;"></center>
							</div>
							<div class="caption">
								<h4 class="text-info view"><b>Bookname : </b><?php print $row['bookname']; ?></h4>
								<h4 class="text-info view"><b>Book Author : </b><?php print $row['bookauthor']; ?></h4>
								<h4 class="text-info view"><b>Book Publication : </b><?php print $row['bookpub']; ?></h4>
								<h4 class="text-info view"><b>Useremail : </b><?php print $row['useremail']; ?></h4>
								<h4 class="text-info view"><b>Book Price : </b><?php print $row['bookprice']; ?></h4>
								<input type="hidden" name="bookid" value="<?php print $row['bookid']; ?>"/>
								<input type="hidden" name="useremail" value="<?php print $row['useremail']; ?>"/>
								<button class="btn btn-info" type="submit" name="submit" value="View Details"style="margin-top: 5px;">View Details</button>
							</div>	
						</div>		
					</form>
				</div>
				
		

	
<?php	}

}?>

<div style="padding-bottom: 500px;">.</div>
<?php include 'footer.php'; ?>
 

</body>
</html>