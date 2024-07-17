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

<header class="header">

    <div class="flex">

        <!-- <a href="home.php" class="logo">Prayas Enterprise</a> -->
        <a href="home.php" class="logo"><img src="img/logo.png" alt="logo" width="130" height="50"></a>

        <nav class="navbar">
            <ul>
                <li><a href="showing.php">Home</a></li>
                <li><a href="aboutsection.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="shopsection.php">Shop</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="#">Register\Login</a>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="searchsection.php" class="fas fa-search"></a>
            <!-- <div id="user-btn" class="fas fa-user"></div> -->
            <?php
                $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                // header('location:login.php');
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        </div>


    </div>

</header>