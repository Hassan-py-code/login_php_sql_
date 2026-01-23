



<?php   
    
    $hostname="localhost";
    $sdUser ="root";
    $dbpassword="";
    $dbName="login_reqister";

    $conn=mysqli_connect($hostname , $sdUser , $dbpassword , $dbName);

    if(!$conn){
      die("somting went wrong");
    }

?>