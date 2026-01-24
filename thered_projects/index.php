

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data</title>
     <!-- link freamworke -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-4">
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Nma</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
     
    <?php  
       $connect=mysqli_connect("localhost","root","","students");
       if(!$connect){
          die("Connection is not successfully");
       }

    //    $sql="SELECT * FROM users (f_name , l_name , email)
    //    VALUES ('','','')"
    $sql="SELECT * FROM users";
    $result=mysqli_query($connect,$sql);

   

    while($row = mysqli_fetch_array($result)){
        $id=$row["id"];
        $first_name=$row["f_name"];
        $last_name= $row["l_name"];
        $email=$row["email"];
       echo "
       <tr>
      <th scope='row'>$id</th>
      <td>$first_name</td>
      <td>$last_name</td>
      <td>$email</td>
    </tr>
       
       ";
    }
    ?>

   
  </tbody>
</table>


    </div>
 

</body>
</html>