<?php session_start(); ?>

<?php 
	

	if(isset($_GET['bookid']))
	{
		include_once 'includes/dbh-inc.php';

		$id=$_GET['bookid'];
	}

	$sql="SELECT * FROM book WHERE bookid=$id";
	$result=mysqli_query($conn, $sql);
	$row= mysqli_fetch_assoc($result);
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

			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<img src= "images/<?php print $row['bookimage']; ?>" class="img-thumbnail img-responsive" style="width:280px; height:180px; padding:10px;">
				</div>
			
			<div class="col-md-6 col-md-offset-1 " >
				
  				<table class="table table-hover table-condensed"  border="1px solid black">
    				<thead>
				      <tr>
				        <th  colspan="1">Data</th>
				        <th>Values</th>        
				      </tr>
				    </thead>
				    <tbody>
				    	
				      <tr>
				        <td class="view info">Seller Email:</td> 

				        <td ><?php print $row['useremail']; ?></td>
				      </tr>
				      <tr>
				        <td class="view info">Book Name:</td>
				        <td><?php print $row['bookname']; ?></td>
				      </tr>
				    
				      <tr>
				        <td class="view info">Book Category:</td>
				        <td><?php print $row['bookyear']; ?></td>
				      </tr>
				      <tr>
				        <td class="view info">Book Author:</td>
				        <td><?php print $row['bookauthor']; ?></td>
				      </tr>
				      <tr>
				        <td class="view info">Book Publication:</td>
				        <td><?php print $row['bookpub']; ?></td>
				      </tr>
				     
				      <tr>
				        <td class="view info">Book Price:</td>
				        <td><?php print $row['bookprice']; ?></td>
				      </tr>
				      
				      	
				     
				  </tbody>
				</table>
							
							
								<div class="jumbotron">
												<h2  class="view" >Book Details</h2>
												
												<h5><?php print $row['bookdetails']; ?></h5>
										
								</div>
						
							
				        
					 
				
				<div class="padding">
					
					<form action="includes/requestSeller-inc.php" method="get">
						<input type="hidden" name="useremail" value="<?php print $row['useremail']; ?>"/>
						<input type="hidden" name="bookname" value="<?php print $row['bookname']; ?>"/>
					<button class="btn btn-info" type="submit" value="submit" name="submit">Request Book to Seller</button>
					</form>
					</div>
						
					<!-- 	
						<form action="includes/givefeedback-inc.php" method="get">
							<input type="hidden" name="useremail" value="<?php print $row['useremail']; ?>"/>
						<button class="btn btn-info" type="submit" value="submit" name="submitfeed">Give Feedback</button>
					</form>
					
				 -->
				<div class="padding" style="padding-top: 10px;">
				<form action="includes/givefeedback-inc.php" method="get">
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="FeedBack Title" name="feedtitle" autocomplete="off"> 
			  </div>
			  <div class="form-group">
				  <textarea class="form-control" rows="5" name="feedComment"></textarea>
			</div>
			<input type="hidden" name="useremail" value="<?php print $row['useremail']; ?>"/>
			<button type="submit" class="btn btn-default" name="submitfeed" >Submit Feedback</button>
			</form>
			</div>

				<div class="padding" style="padding-top: 10px;">
						<form action="includes/reportuser-inc.php" method="get">
							<div class="form-group">
							<textarea class="form-control" name="reportreason" placeholder ="Why are you reporting"  rows="4"></textarea></div>
							<input type="hidden" name="useremail" value="<?php print $row['useremail']; ?>"/>
						<button class="btn btn-info" type="submit" value="submit" name="submitfeed">Report User</button>
					</form>
					
				</div>
			</div>
		</div>
		</div>


<?php include_once 'footer.php'; ?>

</body>
</html>



