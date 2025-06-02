
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
                  <h1>Reverse Logistics</h1>
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
                  <div class="main-heading pb-10">
                     <h3>Reverse Logistics for E-waste Management</h3>
                  </div>
                  <p>Our reverse logistics service provides end-to-end management of the return flow of electronic equipment from consumers and businesses back to manufacturers or recycling facilities. We handle the collection, transportation, sorting, and processing of e-waste, ensuring maximum efficiency and minimum environmental impact in the return supply chain.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/logistics.png" alt="Nationwide Collection">
                        </div>
                        <h5>Nationwide Collection</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/tracking.png" alt="Real-time Tracking">
                        </div>
                        <h5>Real-time Tracking</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/sorting.png" alt="Efficient Sorting">
                        </div>
                        <h5>Efficient Sorting</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/reporting.png" alt="Detailed Reporting">
                        </div>
                        <h5>Detailed Reporting</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/reverse-logistics.jpg" alt="Reverse Logistics Process">
                     </div>
                     <div class="col-6">
                        <h3>Our Reverse Logistics Services Include:</h3>
                        <ul>
                           <li>Collection from multiple sources (households, businesses, retail drop-off)</li>
                           <li>Secure transportation with real-time tracking</li>
                           <li>Warehouse management and inventory control</li>
                           <li>Product sorting and categorization</li>
                           <li>Refurbishment assessment for reusable items</li>
                           <li>Integration with recycling operations</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Benefits of Our Reverse Logistics</h3>
                        <ul>
                           <li>Reduced transportation costs through optimized routes</li>
                           <li>Minimized carbon footprint with efficient logistics</li>
                           <li>Complete chain-of-custody documentation</li>
                           <li>Scalable solutions for small businesses to large corporations</li>
                           <li>Integration with manufacturer take-back programs</li>
                           <li>Compliance with transportation regulations for e-waste</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/logistics-benefits.jpg" alt="Logistics Benefits">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!-- Call to action -->
      <section class="bg-1 call-action">
         <div class="container">
            <div class="row">
               <div class="col-8" data-aos="fade-right" data-aos-duration="1000">
                  <h3>Streamline Your E-waste Return Process</h3>
                  <p>Our reverse logistics solutions make e-waste collection and transportation simple and efficient</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Contact Us Today</a>
               </div>
            </div>
         </div>
      </section>
      
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