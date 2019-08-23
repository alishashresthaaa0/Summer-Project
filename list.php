
<?php session_start(); ?>

<?php 

	include_once 'includes/dbh-inc.php';
	$email=$_SESSION['u_email'];


	$sql="SELECT * FROM book WHERE useremail='$email'";
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
	<div style="padding:50px 0 10px 0;"><h1><center>BOOKS DETAILS</center></h1></div>
	

		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col-md-9 col-md-offset-1 " >
  				<table class="table table-hover table-condensed"  border="5px solid blue" >
    				 <thead>

				      <tr style="background-color: #f1f1f1; ">
				        <th style="width: 500px;">Book Name</th>
				        <th style="width: 500px;">Book Author</th>
				        <th style="width: 800px;">Book Publication</th> 
				        
				        <th style="width: 500px;">Book Price</th>    
				        <th style="width: 3000px;">Book Details</th>
				        <th style="width: 500px;">Book Image</th>  
				        <th style="width: 300px;">Edit</th>  
				        <th style="width: 300px;">Delete</th>  
				      </tr>
				    </thead>
				   <?php if($resultCheck >0){

	while ($row= mysqli_fetch_assoc($result))
				{ 	
?>
						

				    <tbody>

				        <tr>
				       
				        <th style="width: 500px;"><?php print $row['bookname']; ?></th>
				        <th style="width: 500px;"><?php print $row['bookauthor']; ?></th>
				        <th style="width: 800px;"> <?php print $row['bookpub']; ?></th>
				       
				        <th style="width: 500px;"><?php print $row['bookprice']; ?></th>
				         <th style="width: 3000px;"><?php print $row['bookdetails']; ?></th>
				         <th>
				    		<img src= "images/<?php print $row['bookimage']; ?>" class="img-thumbnail img-responsive" style="width:500px; height:100px; padding:10px;">
				    	</th>
				         <th>
				         	<form method="get" action="editlist.php">
				         		<input type="hidden" name="bookid" value="<?php print $row['bookid']; ?>">
				         	<button class="btn btn-default" name="edit" value="edit">Edit</button>
				         	</form>
				         </th>
				         <th>
				         	<form method="get" action="deletelist.php?bookid=<?php print $row['bookid']; ?>">
				         		<input type="hidden" name="bookid" value="<?php print $row['bookid']; ?>">
				         	<button class="btn btn-default" name="delete" value="delete">Delete</button>
				         </form>
				         </th>
				      </tr>
				   
				   
				      
				    <?php  		}

}
 ?>

				     
				  </tbody>
				</table>
				<div>
					<a href=""><button class="btn btn-info" type="submit" value="submit" name="submit" >Request Book</button></a>
				</div>
			</div>
		</div>


<?php include_once 'footer.php'; ?>

</body>
</html>



