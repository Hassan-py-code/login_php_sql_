

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>images</title>
      <!-- link freamworke -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container mt-5">
     <?php  
       
       include_once("connect.php");
       $query="SELECT * from mages ";
       $result= mysqli_query($conn,$query);
       echo "<a href='create.php'>Add new image</a>";
       if($result-> num_rows>0){
         while($row=mysqli_fetch_array($result));
       }{
          $name=$row("name");
          $fileName=$row("filename");
          $imageUrl="uploads/".$fileName;

          echo "<div class='profile mt-4'>";
          echo "<img src='$imageUrl'>";
          echo "<h3>$name</h3>";
          echo "</div>";
       }
       
     ?>
  </div>

    
</body>
</html>