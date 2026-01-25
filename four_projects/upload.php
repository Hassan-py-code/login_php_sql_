

<?php   
   
   include_once("connect.php");

   if($_POST["submit"]){

      $fullname=$_POST["fullname"];
      $filename=$_FILES["image"]["name"];
       
      $text=pathinfo($filename,PATHINFO_EXTENSION);

      $allowedTypes=array("jpg","jpeg","png","gif");

      
      

   }

?>