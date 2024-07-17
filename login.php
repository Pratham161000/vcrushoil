<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email_or_number = mysqli_real_escape_string($conn, $_POST['email_or_number']);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));

   // Check if entered value is an email or phone number
   if(filter_var($email_or_number, FILTER_VALIDATE_EMAIL)){
      // Perform login with email
      $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email_or_number' AND password = '$pass'") or die('query failed');
   }else{
      // Perform login with phone number
      $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE number = '$email_or_number' AND password = '$pass'") or die('query failed');
   }
   
   // Continue with login validation and session management as usual
   if(mysqli_num_rows($select_users) > 0){
      
      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
      echo '<script>document.getElementById("forgot-password").style.display = "block";</script>';
   }
   
}


// if(isset($_POST['submit'])){

//    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
//    $email = mysqli_real_escape_string($conn, $filter_email);
//    $filter_phone_number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
//    $number = mysqli_real_escape_string($conn, $filter_phone_number);
//    $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
//    $pass = mysqli_real_escape_string($conn, md5($filter_pass));

//    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE (email = '$email' OR name = '$email' OR number = '$number') AND password = '$pass'") or die('query failed');

   

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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
      <h3>login now</h3>
      <!-- <input type="text" name="email" class="box" placeholder="Enter your Email/Username" required>
      <input type="text" name="number" class="box" placeholder="Enter your Phone Number" required> -->
      <input type="text" name="email_or_number" class="box" placeholder="Enter your Email or Phone Number" required>
      <input type="password" name="pass" class="box" placeholder="Enter your Password" required>
      <input type="submit" class="btn" name="submit" value="login now">
      <!-- <a href="forgot.php" id="forgot-password">Forgot Password?</a> -->
      <p>Don't have an Account? <a href="register.php">Register Now</a></p>
      <p><a href="forgot.php">Forgot Password?</a></p>
   </form>

</section>

</body>
</html>