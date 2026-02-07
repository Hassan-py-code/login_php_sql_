

<?php   

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   require "vendor/autoload.php";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
        
       $name=$_POST["name"];
       $email=$_POST["email"];
       $message=$_POST["message"];
       
       $mail= new PHPMailer(true);
       
       try{
           $mail -> isSMTP();
           $mail -> Host ="smtp.gmail.com";
           $mail -> SMTPAuth = true;
           $mail -> Username = "havhassanb@gmail.com";
           $mail -> Password = "";
           $mail -> SMTPSecure = PHPMailer::  ENCRYPTION_STARTTLS;
           $mail -> Port = 587;

           $mail -> setFrom("test@test.com","Aktar");
           $mail -> addAddress("havhassanb@gmail.com","Hassan");

           $mail -> Subject = "New contact from submission";
           $mail -> Body = "Name: $name\n".
           "Email : $email\n".
           "Message: $message";

          if( $mail -> send()){
             echo "message send";
          }else{
             echo "you have problem". $mail -> ErrorInfo;
          }


       }catch(Exception $e){
           echo "Message could not be send". $mail -> ErrorInfo;
       }

   }

?>