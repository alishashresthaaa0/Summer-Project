  <?php

 session_start();
  if (isset($_POST['request'])) {

 

      include_once 'dbh-inc.php';

       $id=$_SESSION['u_email'];
      $book_name=$_POST['book_name'];
    
    
      $book_author=$_POST['book_author'];
      $book_publication=$_POST['book_publication'];
      $book_details=$_POST['book_details'];
   


     
      

      if(empty($book_name) || empty($book_author) || empty($book_publication) || empty($book_details))
     {
         header("Location: ../requestbooks.php?request=empty");
      exit();
       }
       else
       {
        //Check if input characters are valid
             if(!preg_match("/^[a-zA-Z ]*$/",$book_name) || !preg_match("/^[a-zA-Z ]*$/",$book_author) || !preg_match("/^[a-zA-Z ]*$/",$book_publication))
               {
                 header("Location: ../requestbooks.php?request=enterChar");
                 exit();
               }
           
               //check the validity of characteres
            
             if (str_word_count($book_details)>150) 
             {
                  header("Location:../requestbooks.php?request=detailsLength");
                  exit();
              } 
             
              else{
                    $sql = "INSERT INTO request (useremail, bookname, bookauthor, bookpub, bookdetails) 
                                        VALUES ('$id', ' $book_name', 
                                         '$book_author','$book_publication','$book_details')";
                          mysqli_query($conn, $sql);

                          header("Location: ../browse.php?request=success");
                          exit();
                      
                         
                    
                    
                  }
        }
   }
   else
   {
     header("Location: ../requestbooks.php");
     exit();
   }

