<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At <b> Agro World Exim </b> - We deliver fresh, high-quality groceries sourced from trusted farms. From vegetables to spices and coconut products, we ensure affordability, sustainability, and a hassle-free shopping experience you can rely on!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We offer a wide range of fresh, high-quality groceries, including vegetables, aromatic spices, versatile coconut products, and fragrant greens like mint and coriander. We ensure every product delivers exceptional freshness, quality, and value for your daily needs!</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/souban.jpg" alt="">
         <p>I’ve been shopping at Agro World Exim for a while now, and I couldn’t be happier! The quality of their vegetables and spices is outstanding, always fresh and full of flavor. I love their coconut products too—they’re pure and perfect for both cooking and wellness. The delivery is fast, and the customer service is always friendly and helpful. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Souban</h3>
      </div>

     
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>