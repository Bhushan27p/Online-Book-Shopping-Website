<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
      <h3>Why Choose Us?</h3>
<p>At Bookify, we make book shopping easy and enjoyable. Browse through a vast collection, from bestsellers to academic books. Enjoy great prices, smooth navigation, and a hassle-free ordering process.</p>
<p>Get your favorite books delivered to your doorstep with ease. Need help? Our support team is always ready to assist!</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/harish.jpg" alt="">
         <p>Really impressed with the service. My order arrived in perfect condition, well-packaged, and delivered on time. Definitely worth the purchase!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Harish Prajapati</h3>
      </div>

      <div class="box">
         <img src="images/harsh.jpg" alt="">
         <p>A fantastic experience! The book arrived quickly, in great shape, and exactly as described. It’s always a pleasure to receive quality products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Harsh Bhosale</h3>
      </div>

      <div class="box">
         <img src="images/bhushan.jpg" alt="">
         <p>Smooth and hassle-free process. The book was securely packed, arrived earlier than expected, and looked brand new.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bhushan Pujari</h3>
      </div>

      <div class="box">
         <img src="images/shashi.jpg" alt="">
         <p>Perfect condition, fast delivery, and great service. The book was exactly what I wanted, and I’m happy with the overall experience.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shahsikant Yadav</h3>
      </div>

      <div class="box">
         <img src="images/harish_p.jpg" alt="">
         <p>Impressed by the huge collection! Found every title I was looking for, and the books arrived in excellent shape. Definitely my go-to now.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Harish Pisal</h3>
      </div>

      <div class="box">
         <img src="images/rushi.jpg" alt="">
         <p>A seamless experience from start to finish. The book was neatly packed, arrived undamaged, and exceeded my expectations. Will order again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rushikesh Thorat</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/chetan_bhagat.jpg" alt="">
         <div class="share">
            <a href="https://x.com/chetan_bhagat" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/chetanbhagat/" class="fab fa-instagram"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/ranvinder_singh.jpg" alt="">
         <div class="share">
            <a href="https://x.com/_RavinderSingh_" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/thisisravinder/" class="fab fa-instagram"></a>
         </div>
         <h3>Ranvinder Singh</h3>
      </div>

      <div class="box">
         <img src="images/rupi_kaur.png" alt="">
         <div class="share">
            <a href="https://x.com/rupikaur_" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/rupikaur_/" class="fab fa-instagram"></a>
         </div>
         <h3>Rupi Kaur</h3>
      </div>

      <div class="box">
         <img src="images/nipun.jpg" alt="">
         <div class="share">
            <a href="https://x.com/nipundharmadha1" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/nipundharmadhikari/" class="fab fa-instagram"></a>
         </div>
         <h3>Nipun Dharmadhikari</h3>
      </div>

      <div class="box">
         <img src="images/durjoy_datta.jpg" alt="">
         <div class="share">
            <a href="https://x.com/durjoydatta" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/durjoydatta/" class="fab fa-instagram"></a>
         </div>
         <h3>Durjoy Datta</h3>
      </div>

      <div class="box">
         <img src="images/amish_tripathi.jpg" alt="">
         <div class="share">
            <a href="https://x.com/authoramish" class="fa-brands fa-square-x-twitter"></a>
            <a href="https://www.instagram.com/authoramish/" class="fab fa-instagram"></a>
         </div>
         <h3>Amish Tripathi</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>