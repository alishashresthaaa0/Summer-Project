<?php  
  	if (isset($_POST['submit']))
  	 {
  	 	include_once 'dbh-inc.php';

  	 	$book_name=$_POST['book_name'];
  	 	$image=$_FILES['file']['name'];
  	 	$book_category=$_POST['book_category'];
  	 	$book_author=$_POST['book_author'];
  	 	$book_publication=$_POST['book_publication'];
  	 	$book_details=$_POST['book_details'];
  	 	$book_price=$_POST['book_price'];

  	 	//check if empty
  	 		if(empty($book_name) || empty($image) || ($book_category==0) || empty($book_author) || empty($book_publication) || empty($book_details) || empty($book_price) )
  	 	  		{
  	 				header("Location: ../upload.php?upload=empty");
  	 				exit();
  	 			}
  	 		else
  	 			{
  	 				//Check if input characters are valid
  	 				if(!preg_match("/^[a-zA-Z]*$/",$book_name) || !preg_match("/^[a-zA-Z]*$/",$book_author) || !preg_match("/^[a-zA-Z]*$/",$book_publication) )
  	 					{
  	 						header("Location: ../upload.php?upload=enterChar");
  	 						exit();
  	 					}
  	 					elseif (!preg_match("/^[0-9]*$/", $book_price)) 
  	 					{
							header("Location: ../upload.php?upload=enterNum");
  	 						exit();
  	 					}
  	 			}
  	 			//check the validity of characteres
  	 			if($book_price>2000)
  	 				{
  	 					header("Location:../upload.php?upload=priceHigh");
  	 					exit();
  	 				}
  	 		 			
  	 		 	
  	 }
  	 else
  	 {
		header("Location: ../upload.php");
		exit();
	}
