// 	$fileName=$_FILES['file']['name'];
  	// 	$fileType=$_FILES['file']['type'];
  	// 	$fileTmpName=$_FILES['file']['tmp_name'];
  	// 	$fileError=$_FILES['file']['error'];
  	// 	$fileSize=$_FILES['file']['size'];

  	// 	//extract the extension of the file
  	// 	$fileExt=explode('.', $fileName);
  	// 	//make the extension to lower case before checking
  	// 	$fileActualExt= strtolower(end($fileExt));
  	// 	//what kind of extension are allowed t upload
  	// 	$allowed=array('jpg','jpeg','png');
  	// 	if(in_array($fileActualExt, $allowed))
  	// 	{
  	// 		if($fileError === 0)
  	// 		{
  	// 			if($fileSize < 500000 ){
  	// 				//to prevent overriding of image
  	// 				//this return current timestamp every time it is called so it is always unique
  	// 				$fileNameNew=uniqid('',true).".".$fileActualExt;
  	// 				$fileDestination='images/'.$fileNameNew;
  	// 				move_uploaded_file($fileTmpName, $fileDestination);
  	// 				echo "your img is uploaded";
  	// 			}else{
  	// 				echo "Yoour file is too big";
  	// 			}
  	// 		}else{
  	// 			echo "There was an error uploading that file";
  	// 		}
  	// 	}else{
  	// 		echo "You cannot upload file of this type";
  	// 	}