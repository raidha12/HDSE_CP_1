<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Farmscape:About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>about us</h3>
      <p><a href="index.php">home</a> <span> / about</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Farmscape is a transformative platform designed to enhance the procurement of agricultural inputs in Sri Lanka. By seamlessly connecting farmers, agribusinesses, and agricultural enthusiasts with high-quality products, Farmscape simplifies the process of acquiring essential farming supplies while ensuring secure online transactions and efficient order management. Our modern, responsive interface facilitates easy navigation and product discovery. With expert advice on agricultural practices, Farmscape is a crucial tool for every modern agricultural operation in Sri Lanka.</p>
            <a href="menu.php" class="btn">our products</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="title">simple steps to farm success</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>Explore Products</h3>
            <p>Browse a wide range of essential farming supplies and equipment.</p>
         </div>

         <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>Place Your Order</h3>
            <p>Order with ease and choose from multiple secure payment options.</p>
         </div>

         <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>Quick Delivery</h3>
            <p>Receive your agricultural products swiftly to keep your operations running smoothly.</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="title">customer's reivews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/1.png" alt="">
               <p>Switching to Farmscape was one of the best decisions for my farm. The range of organic fertilizers has helped boost my yields sustainably.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Lakmal</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/2.png" alt="">
               <p>Farmscape’s wide selection and expert recommendations have simplified how I manage my farm’s supply chain. Their service is unmatched.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Kumari</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/3.png" alt="">
               <p>Ordering irrigation equipment through Farmscape was quick and efficient. The delivery was prompt, and the quality exceeded my expectations.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Naveen</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/4.png" alt="">
               <p>The user-friendly interface and the availability of various seeds and pesticides make Farmscape my first choice for agricultural supplies.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Saman</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/5.png" alt="">
               <p>I appreciate the detailed product descriptions and the ease of comparing different brands on Farmscape. It makes informed purchasing easy.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Saliya</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/6.png" alt="">
               <p>Finding eco-friendly pest control solutions was a breeze on Farmscape. Their product variety and environmental focus are impressive.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Farmer Harsha</h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            700: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>