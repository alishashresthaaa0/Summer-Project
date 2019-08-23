  <?php

 session_start();
  if (isset($_POST['submit'])) {

    $target= "../images/".basename($_FILES['photo']['name']);

      include_once 'dbh-inc.php';

       $id=$_SESSION['u_email'];
      $book_name=$_POST['book_name'];
      $image=$_FILES['photo']['name'];
      $year=$_POST['year'];
      $book_author=$_POST['book_author'];
      $book_publication=$_POST['book_publication'];
      $book_details=$_POST['book_details'];
      $book_price=$_POST['book_price'];


      //for image file to be uploaded
      $fileExt= explode('.', $image);
      $fileActualExt=strtolower(end($fileExt));
      $allowed= array('jpg' ,'jpeg' );

      

      if(empty($book_name) || empty($image) || ($year===0) || empty($book_author) || empty($book_publication) || empty($book_details) || empty($book_price))
     {
         header("Location: ../upload.php?upload=empty");
      exit();
       }
       else
       {
        //Check if input characters are valid
             if(!preg_match("/^[a-zA-Z ]*$/",$book_name) || !preg_match("/^[a-zA-Z ]*$/",$book_author) || !preg_match("/^[a-zA-Z ]*$/",$book_publication))
               {
                 header("Location: ../upload.php?upload=enterChar");
                 exit();
               }
            if (!preg_match("/^[0-9]*$/", $book_price)) 
               {
                header("Location: ../upload.php?upload=enterNum");
                 exit();
               }
               //check the validity of characteres
             if($book_price>2000)
               {
                 header("Location:../upload.php?upload=priceHigh");
                 exit();
               }
             if (str_word_count($book_details)>150) 
             {
                  header("Location:../upload.php?upload=detailsLength");
                  exit();
              } 
              if(!in_array($fileActualExt,  $allowed))
              {
                  header("Location:../upload.php?upload=photoExtension");
                  exit();
              }
              else{
                    $sql = "INSERT INTO book (useremail, bookname, bookimage, bookyear,  bookauthor, bookpub, bookdetails, bookprice) 
                                        VALUES ('$id', ' $book_name', 
                                        '$image' , '$year', '$book_author','$book_publication','$book_details','$book_price')";
                          mysqli_query($conn, $sql);

                          if(move_uploaded_file($_FILES['photo']['tmp_name'], 
                            $target))
                          {
                            header("Location: ../browse.php?upload=success");
                          exit();
                      
                          }
                          else{
                                header("Location: ../upload.php?upload=error");
                          exit();
                          }
                         
                    
                    
                  }
        }
   }
   else
   {
     header("Location: ../upload.php");
     exit();
   }

