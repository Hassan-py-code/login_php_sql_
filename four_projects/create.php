<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- link freamworke -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- dab:upload_image   table:images--> 
    <div class="container mt-5">
        <h2>Upload Images</h2>
         <form action="upload.php" method="post" enctype="multipart/form-data">
            <input class="form-control mt-4" type="text" name="fullname" id="" placeholder="Enter Name:">
            <input class="form-control mt-4"  type="file" name="image" id="">
            <input type="submit" value="Upload" name="submit" class="btn btn-primary mt-4">
          </form>
    </div>
    
</body>
</html>