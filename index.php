<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- link freamworke -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style> 
         body{
             background-color: antiquewhite;
         }
       
         form{
             max-width: 600px;
         }
    </style>
</head>
<body>
    
   
  <div class="container mt-5">
     <h1>Contact Us</h1>
     <form action="send-mail.php" method="post" class="mt-4">
         <div class="form-group mt-4">
             <label for="name">Name</label>
             <input type="text" name="name" id="name" required  class="form-control">
         </div>

         <div class="form-group mt-4">
             <label for="email">email</label>
             <input type="email" name="email" id="email" required class="form-control">
         </div>

          <div class="form-group mt-4">
             <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" required rows="5"></textarea >
         </div>

         <input type="submit" value="send Message" class="btn-primary btn mt-3">
     </form>
  </div>

</body>
</html>