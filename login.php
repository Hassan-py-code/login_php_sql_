



<?php   
  
   session_start();
   if(isset($_SESSION["user"])){
        header("location: index.php");
   }
   print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
   <div class="container">
       
       <?php  
         if(isset($_POST["login"])){
              $email=$_POST["email"];
              $password=$_POST["password"];
              require_once "database.php";

              $sql="SELECT * from users where email='$email'";
              $result=mysqli_query($conn,$sql);
              $user=mysqli_fetch_array($result, MYSQLI_ASSOC);
              if($user){
                if(password_verify($password,$user["password"])){
                      session_start();
                      $_SESSION["user"]="yes";
                       header("Location: index.php ");
                       die();
                 }else{
                     echo "<div class='alert alert-danger'>password  does not match</div>";
                  
                 }
              }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
              }

         }
         
       
       ?>

      <form action="login.php" method="post">
        
        <div class="form-group">
           <input type="email" placeholder="Enter email:" class="form-control" name="email">
        </div>
        
          <div class="form-group">
           <input type="password" placeholder="Enter password:" class="form-control" name="password">
        </div>

        <div class="form-btn">
              <input type="submit" value="login" class="btn btn-primary" name="login">
        </div>


      </form>
   </div>


</body>
</html>