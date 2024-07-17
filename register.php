<?php
include 'config.php';

if(isset($_POST['submit'])){
   $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $name = mysqli_real_escape_string($conn, $filter_name);
   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_phone_number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
   $phone_number = mysqli_real_escape_string($conn, $filter_phone_number);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
   $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'User Already Exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm Password not Matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, number, password, verification_code) VALUES('$name', '$email', '$phone_number', '$pass', '')") or die('query failed');
         $message[] = 'Registered Successfully!';
         
         $verification_code = md5(time().$email); //generate unique verification code
         mysqli_query($conn, "UPDATE `users` SET verification_code='$verification_code' WHERE email='$email'") or die('query failed');
         
         //sending email verification
         require_once('./PHPMailer/PHPMailer.php');
         require_once('./PHPMailer/SMTP.php');
         $mail = new PHPMailer(true);

         try {
            //Server settings
            $mail->SMTPDebug = 0; //for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Your Gmail credentials
            // $mail->Username = 'your_email@gmail.com';
            // $mail->Password = 'your_email_password';
            $mail->Username = 'prayasenterprise7678@gmail.com'; // YOUR gmail email
            $mail->Password = 'mckywrwooojshbfr'; // YOUR gmail password

            //Sender and recipient settings
            // $mail->setFrom('your_email@gmail.com', 'Your Name');
            // $mail->addAddress($email, $name);
            // $mail->addReplyTo('your_email@gmail.com', 'Your Name');
            $mail->setFrom('prayasenterprise7678@gmail.com', 'V-Crush Oil');
            $mail->addAddress($email);
            $mail->addReplyTo('prayasenterprise7678@gmail.com', 'V-Crush Oil'); // to set the reply to

            //Email subject and body
            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body = "Dear $name, <br><br>Thank you for registering on our website. <br><br>Thank you,<br> $name";

            $mail->send();
            $message[] = "An email has been sent to $email.";
         }catch (Exception $e) {
            // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
         }
   }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <link rel="icon" href="./img/logo.png" type="image/x-icon">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

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
<script>
const emailInput = document.getElementById('email');

emailInput.addEventListener('input', function () {
    if (emailInput.validity.valid) {
        emailInput.setCustomValidity('');
    } else {
        emailInput.setCustomValidity('Please enter a valid email address.');
    }
});
</script>
   
<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" class="box" placeholder="Enter your Username" required>
      <input type="email" name="email" class="box" placeholder="Enter your Email (Optional)">
      <input type="text" id="mobile" name="number" class="box" placeholder="Enter your Phone Number" required pattern="[0-9]{10}">
      <!-- <input type="number" id="mobile" class="box" placeholder="Enter the 10 digit mobile number" required> -->
      <input type="password" name="pass" class="box" placeholder="Enter your Password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm your Password" required>
      <input type="submit" class="btn" name="submit" value="register now">
      <p>Already have an account? <a href="login.php">Login Now</a></p>
   </form>

</section>

</body>
</html>