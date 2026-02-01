

<?php   
   
   include_once("connect.php");

   if($_POST["submit"]){

      $fullname=$_POST["fullname"];
      $filename=$_FILES["image"]["name"];
       
      $text=pathinfo($filename,PATHINFO_EXTENSION);

      $allowedTypes=array("jpg","jpeg","png","gif");
      $tempName=$_FILES["image"]["tmp_name"];
      $targetpath="uploads/".$filename;
        
      if(in_array($text,$allowedTypes)){

         if(move_uploaded_file($tempName,$targetpath)){
             $query ="INSERT INTO images (name,filename)
             VALUES ('$fullname', '$filename') ";
             if(mysqli_query($conn,$query)){
                header("location: index.php");
             }else {
              echo "something is wrong";
             }
           }else{
              echo "File is not uploads";
           }
      }else "your files are not alloed";
      
   
   }

?>