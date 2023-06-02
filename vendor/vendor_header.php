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

   <section class="flex">

      <a href="vendor_dashboard.php" class="logo">Vendor<span>panel</span></a>

      <nav class="navbar">
         <a href="vendor_dashboard.php">Home</a>
         <a href="vendor_products.php">Products</a>
         <a href="vendor_placed_orders.php">Orders</a>
         <!-- <a href="admin_accounts.php">admins</a>
         <a href="../admin/users_accounts.php">users</a> -->
        <!--  <a href="vendor_messages.php">Messages</a> -->
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `vendor` WHERE id = ?");
            $select_profile->execute([$vendor_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['username']; ?></p>
         <a href="update_vendor.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="vendor_register.php" class="option-btn">register</a> 
             <a href="vendor_login.php" class="option-btn">login</a> 
         </div>
         <a href="vendor_login.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>

   </section>

</header>

<script type="text/javascript" src="../js/admin_script.js"></script>
<script type="text/javascript" src="../script.js"></script>