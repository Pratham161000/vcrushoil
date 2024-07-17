<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use P'"HPMailer\PHPMailer\Exception;
include("config.php");
if(isset($_POST['submit'])){
   $email = trim($_POST['email']);
   $p1 = trim($_POST['pass']);
   $p2 = trim($_POST['cpass']);
   if($p1 == $p2){
      $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
      $pass = mysqli_real_escape_string($conn, md5($filter_pass));
      $select_users = mysqli_query($conn, "UPDATE `users` SET password='$pass' WHERE email = '$email'");
      if($select_users > 0){
         require_once("./PHPMailer/PHPMailer.php");
         require_once("./PHPMailer/SMTP.php");
         // passing true in constructor enables exceptions in PHPMailer
         $mail = new PHPMailer(true);

         try {
            // Server settings
            $mail->SMTPDebug = 0; // for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = 'prayasenterprise7678@gmail.com'; // YOUR gmail email
            $mail->Password = 'mckywrwooojshbfr'; // YOUR gmail password

            // Sender and recipient settings
            $mail->setFrom('prayasenterprise7678@gmail.com', 'V-Crush Oil');
            $mail->addAddress($email);
            $mail->addReplyTo('prayasenterprise7678@gmail.com', 'V-Crush Oil'); // to set the reply to

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = "V-Crush Oil";
            $mail->Body = 'Password successfully updated';
            $mail->AltBody = 'Failed to update password';

            $mail->send();
            // echo "Email message sent.";
         } catch (Exception $e) {
            echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
         }
      }
   }else{
      echo "<script>alert('try again');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>forgot password</title>

   <link rel="icon" href="./img/logo.png" type="image/x-icon">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<section class="form-container">

   <form action="" method="post">
      <h3>forgot password</h3>
      <input type="email" name="email" class="box" placeholder="Enter your Email" required>
      <input type="password" name="pass" class="box" placeholder="Enter your Password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm your Password" required>
      <input type="submit" class="btn" name="submit" value="Update Password">
      <p><a href="login.php">Back to login</a></p>
   </form>

</section>

</body>
</html>
