
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include_once 'adminheader.php' ?>

	<div style="padding:50px 0 10px 0;"><h1><center>BOOK LIST</center></h1></div>

	<?php 

		include_once 'includes/dbh-inc.php';

		$sql="SELECT * FROM book";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);
		?>

		

		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col-md-10 col-md-offset-1 " >
  				<table class="table table-hover table-condensed"  border="5px solid blue" >
    				 <thead>

				      <tr style="background-color: #f1f1f1; ">
				      	<th style="width: 300px;">User Email</th>
				        <th style="width: 500px;">Book Name</th>
				        <th style="width: 500px;">Book Author</th>
				        <th style="width: 800px;">Book Publication</th> 
				        
				        <th style="width: 500px;">Book Price</th>    
				        <th style="width: 3000px;">Book Details</th>
				        <th style="width: 500px;">Book Image</th>  
				      </tr>
				    </thead>

				    <tbody>
				    	<?php if($resultCheck>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
			?>


				<tr>
						<th style="width: 300px;"><?php print $row['useremail'] ?></th>
					   <th style="width: 500px;"><?php print $row['bookname']; ?></th>
				        <th style="width: 500px;"><?php print $row['bookauthor']; ?></th>
				        <th style="width: 800px;"> <?php print $row['bookpub']; ?></th>
				       
				        <th style="width: 500px;"><?php print $row['bookprice']; ?></th>
				         <th style="width: 3000px;"><?php print $row['bookdetails']; ?></th>
				         <th>
				    		<img src= "images/<?php print $row['bookimage']; ?>" class="img-thumbnail img-responsive" style="width:500px; height:100px; padding:10px;">
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