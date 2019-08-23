



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<?php include 'header2.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>UPLOAD YOUR BOOKS</center></h1></div>

	<div class="container-fluid padding bg-light">
		<div class="col-md-6 col-md-offset-2 register">
			<form method="post" action="includes/upload-inc.php" enctype="multipart/form-data">
				
				<div class="form-group" >
				<input type="text" class="form-control" name="book_name" placeholder="Name of Book" autocomplete="off">
				</div>

				<div class="form-group">
					<span style="color: black; ">Upload Cover of your Book:</span> <br>
					 <div class="btn btn-default  float-left">
	      				<span>Choose files</span>
	      				<input type="file" name="photo">
	    			</div>	    			
  				</div>


				<div class="form-group">
				<select class="form-control" name="year">
					<option value="0" selected="selected">Select Category</option>
					<option label="Academic" value="Academic"></option>
					<option label="Non-Academic" value="Non-Academic"></option>
					
				</select>
				<span id="years" class="text-danger font-weight-bold"></span>
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

				<div class="form-group" >
				<input type="text" class="form-control" name="book_price" placeholder="Price of book" autocomplete="off">
				</div>

				<button type="submit" class="btn btn-default" name="submit">Upload Book</button>
			</form>
		</div>
	</div>


	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "upload=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}

	if(strpos($fullUrl, "upload=enterChar") == true){
		print "<p class='errorMsg'>**Please enter only characters</p>";
	}

	if(strpos($fullUrl, "upload=enterNum") == true){
		print "<p class='errorMsg'>**Please enter only numbers</p>";
	}

	if(strpos($fullUrl, "upload=priceHigh") == true){
		print "<p class='errorMsg'>**Price should be below 2000</p>";
	}

	if(strpos($fullUrl, "upload=detailsLength") == true){
		print "<p class='errorMsg'>**Details should be 150 words</p>";
	}

	if(strpos($fullUrl, "upload=photoExtension") == true){
		print "<p class='errorMsg'>**Image must be .jp or .jpeg</p>";
	}

?>
	<?php include 'footer.php'; ?>
</body>
</html>