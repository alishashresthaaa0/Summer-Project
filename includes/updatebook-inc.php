<?php 

  session_start();

  if(isset($_POST['submit']))
  {
    include_once 'dbh-inc.php';

    $id= $_SESSION['bookid'];
    $bookname=$_POST['bookname'];
    $bookimage=$_SESSION ['bookimage'];
    $bookauthor=$_SESSION ['bookauthor'];
    $bookdetails=$_SESSION ['bookdetails'];
      $bookprice=$_SESSION ['bookprice'];

  $bookpub=$_SESSION['bookpub'];


  

  }
$sql="DELETE book WHERE bookid='$id' ";
    if(mysqli_query($conn, $sql))
  {
    print "sucess";
  }
  else{
    print "fail";
  }




 ?>