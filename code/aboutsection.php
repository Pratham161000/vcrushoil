<?php

@include 'config.php';

session_start();

$user_id = 0;

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="icon" href="./img/logo.png" type="image/x-icon">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header2.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="showing.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="content">
            <h3>We welcome you to our group ("V-Crush Oil")</h3>
            <p>We are delighted to inform you that we have started an enterprise for production of Groundnut Oil, Black Sesame Oil, White Sesame Oil, Mustard Oil and Coconut Oil. The production of these oils is being carried out through a WOODEN COLD PRESSED OIL MACHINE. "Cold pressing is a traditional way of extracting oils while keeping the temperatures as low as possible during extraction. This helps in keeping the product as cool as possible while maintaining more of its natural flavors and preserving crucial nutrients and antioxidants". Our primary objective is to provide pure, healthy and nutritious food to all families. You may Inform us your requirements and contact us for further information.</p>
            <a href="shop.php" class="btn">shop now</a>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="img/a2.jpg" alt="">
        </div>

        <div class="image">
            <img src="img/a4.jpg" alt="">
        </div>
        
    </div>

    <div class="flex">

        <div class="image">
            <img src="img/a5.jpg" alt="">
        </div>

        <div class="image">
            <img src="img/a7.jpg" alt="">
        </div>
        
    </div>

    <div class="flex">

        <div class="image">
            <img src="img/img1.jpg" alt="">
        </div>

        <div class="image">
            <img src="img/img2.jpg" alt="">
        </div>
        
    </div>
    
    <!-- <div class="flex">
        
        
        <div class="content">
            
            <!-- <div class="image"> -->
                <!-- <img src="img/img1.jpg" alt=""> -->
            <!-- </div> -->
            
        <!-- </div>

        <div class="content">
            
            <!-- <div class="image"> -->
                <!-- <img src="img/img2.jpg" alt=""> -->
            <!-- </div> -->
            
        <!-- </div> --> -->

    <!-- </div> --> -->

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <p>We are using these products since last 3 years and they are excellent. Ground nut and sesame oil are very pure with pleasant aroma.</p>
            <h3>Sweety Rupesh Mehta, Surat</h3>
        </div>
        
        <div class="box">
            <p>V-crush coconut oil is a good choice for skin care. It's naturally moisturizing properties help the skin to remain moisturized for longer duration.</p>
            <h3>Beena Arkesh Pandya, Rajkot</h3>
        </div>

        <div class="box">
            <p>We purchased cold press oil first time from V-Crush in 2022. We used and found visible/significant diffrence in routine oil that what we used earlier. We give 10 out of 10 to product of V-Crush Oil and owner of V-Crush Oil.</p>
            <h3>Deepa Bhatt, Ahmedabad</h3>
        </div>

        <div class="box">
            <p>I really like this cold pressed groundnut oil! It tastes great. It is made in a special way that keeps all the healthy stuff, nutrients and aroma preserved. It is good for health and it makes the food taste even better. I am really happy. I recommend it to anyone who loves cooking.</p>
            <h3>Meera Patel, Ahmedabad</h3>
        </div>

        <div class="box">
            <p>We started using V-Crush Oil around a year back in our day to day cooking. When my husband appeared for routine reports, at our surprise, report showed much better results. Earlier he has cholesterol at border but this time it is below border level. We also tried their Saani(Kachariya) last winter and we truely enjoyed</p>
            <h3>Hetal vyas, Rajkot</h3>
        </div>
        
        <div class="box">
            <p>Ground Nut Oil - We regularly use V-Crush Premium Quality Ground nut oil for all types of cooking. We have chosen this oil because of it is traditional method of extraction from a wooden ghani which helps retain original aroma, flavours and nutrients. Furthermore only good quality groundnut seeds are used for production which makes the brand trustworthy. It is definitely a healthy choice to switch to traditional ghani oils.</p>
            <h3>Maharshi Pandya, Ahmedabad</h3>
        </div>
        
    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>