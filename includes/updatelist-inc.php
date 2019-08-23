<?php 
	session_start();

	if(isset($_POST['updatebook']))
	{
		include_once 'dbh-inc.php';

		$id=$_SESSION['bookid'];
		$bookname=$_POST['book_name'];
		
		$book_author=$_POST['book_author'];
		$book_publication=$_POST['book_publication'];
		$book_details=$_POST['book_details'];
		$book_price=$_POST['book_price'];
		





		$sql="UPDATE book SET bookname='$bookname', bookauthor='$book_author', bookpub='$book_publication', bookdetails='$book_details', bookprice='$book_price' WHERE bookid='$id'";
		mysqli_query($conn, $sql);
		header("Location: ../list.php");
		exit();




}


 ?>