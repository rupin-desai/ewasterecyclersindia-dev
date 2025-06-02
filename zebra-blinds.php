<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include 'meta-tags.php'; ?>
      <!-- Slick Slider CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
      <!-- AOS CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
      <!-- Lightbox CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
      <!-- Load the Google reCAPTCHA API -->
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
      <?php include 'header.php';?>
      <section class="breadcrumb">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1>Zebra Blinds</h1>
               </div>
            </div>
         </div>
      </section>
      <!-- services -->
      <section class="services com-padd">
         <div class="container">
            <div class="row">
               <div class="col-3"> 
                  <?php include 'side-bar.php';?>
               </div>
               <div class="col-9 services-inner" data-aos="fade-left" data-aos-duration="1000">
                
                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/zebra-blinds/zebra-blinds-1.jpg" alt="">
                     </div>
                     <div class="col-6">
                        <h5>USES</h5>
                        <ul>
                            <li>Both light filtering and privacy protection</li>
                            <li>PES material that zebra blinds are made of is durable and long lasting</li>
                        </ul>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <h5>ADVANTAGES</h5>
                        <ul>
                            <li>Affordable price</li>
                            <li>Designed using sheer fabric, giving a shimmering silk feel and a rich look.</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/zebra-blinds/zebra-blinds-2.jpg" alt="">
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
      <!-- services End -->
      <!-- Call to action -->
      <section class="bg-1 call-action">
         <div class="container">
            <div class="row">
               <div class="col-8" data-aos="fade-right" data-aos-duration="1000">
                  <h3>Mumbai’s trusted pest control experts</h3>
                  <p>Contact AEGIS Care for a pest-free home!</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Call AEGIS Care now!</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Call to action End -->
      <?php include 'footer.php';?>
      <!-- jQuery (required for Slick Slider) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <!-- Slick Slider JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
      <!-- Lightbox JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
      <!-- AOS JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
      <!-- Custom JS -->
      <script src="js/script.js"></script>
   </body>
</html>