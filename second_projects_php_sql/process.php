


<?php   

   if(isset($_POST["submit"])){

       $f_name=$_POST["first_name"];
       $l_name=$_POST["last_name"];
       $email=$_POST["email"];
       $color=$_POST["color"];

       if(!empty($f_name) && !empty($l_name) && !empty($email)  && !empty($color)){

          $link= mysqli_connect("localhost","root","","local_db");

          if($link==false){
              die(mysqli_connect_errno());
          }
          $sql="INSERT INTO users (f_name , l_name , email , color)
          VALUES  ('$f_name','$l_name','$email','$color')";

          if(mysqli_query($link,$sql)){
               echo "Record inserted successfully";
          }else{
               echo "something is wrong";
          }
       }else{
         echo "Please provide all information";
       }
   }



?>