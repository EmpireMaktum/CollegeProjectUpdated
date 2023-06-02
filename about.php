<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>What is Fashion?</h3>
         <p style="color: purple;font-size: 25px;">Fashion is the armor to survive <br> <label style="margin-left: 40px; "> the reality of everyday life....</label></p>
            <p style="font-size: 20px;font-weight: 800; color: black; margin-left: 200px;">--Classyfashions</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">About Us</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/profile_pics/mak8.jpg" alt="">
         
      
         <h3>Maktum I Hombal</h3>
         <p>Full Stack Developer <br> Gadag, Karnataka</p>
         <!-- <p></p> -->
         <div class="stars">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/empire_maktum/?next=%2F"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/profile_pics/chetan-3.jpg" alt="">
         <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p> -->
        <!--  <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div> -->
         <h3>Chetan P Jangamani</h3>
         <p>Full Stack Developer <br> Gadag, Karnataka</p>
         <div class="stars">
            <a href="https://www.facebook.com/profile.php?id=100051471942079&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
            <a href=" https://twitter.com/chetan_pj?t=SZfy_os_Z6_aYFKW5R9RHw&s=08"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/chetanpj9?igshid=NGExMmI2YTkyZg=="><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/profile_pics/shankar.jpg" alt="">
         <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p> -->
         <!-- <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div> -->
         <h3>Shankar D Navali</h3>
         <p>Full Stack Developer <br> Gadag, Karnataka</p>
         <div class="stars">
            <a href="https://www.facebook.com/shankar.navali.58?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/ShankarNavali07?s=08"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/shankar_sk__07?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/profile_pics/abhi3.jpg">
         <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p> -->
        <!--  <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div> -->
         <h3>Abhishek Halladamani</h3>
         <p>Full Stack Developer <br> Gadag, Karnataka</p>
         <div class="stars">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/mr__ak__992?igshid=NGExMmI2YTkyZg=="><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
         </div>
      </div>

      <!-- <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>######</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>######</h3>
      </div> -->

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>