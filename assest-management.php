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
                  <h1>IT Asset Management</h1>
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
                     <h3>Comprehensive IT Asset Management</h3>
                  </div>
                  <p>Our IT Asset Management (ITAM) service provides complete lifecycle tracking and management for your technology equipment. From acquisition to disposal, we help you maximize the value of your IT investments while ensuring proper handling at end-of-life. Our comprehensive approach combines inventory management, value recovery, and environmentally responsible recycling.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/inventory.png" alt="Asset Inventory">
                        </div>
                        <h5>Asset Inventory</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/lifecycle.png" alt="Lifecycle Management">
                        </div>
                        <h5>Lifecycle Management</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/value.png" alt="Value Recovery">
                        </div>
                        <h5>Value Recovery</h5>
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
                        <img src="img/services/ewaste/asset-management.jpg" alt="Asset Management">
                     </div>
                     <div class="col-6">
                        <h3>Our Asset Management Services Include:</h3>
                        <ul>
                           <li>Comprehensive asset inventory and tracking</li>
                           <li>Physical audits and reconciliation</li>
                           <li>Asset valuation and remarketing</li>
                           <li>Secure data destruction (see our Data Destruction service)</li>
                           <li>Environmentally compliant disposal</li>
                           <li>Detailed reporting on asset disposition</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Benefits of Our Asset Management</h3>
                        <ul>
                           <li>Improved visibility of IT assets across your organization</li>
                           <li>Cost savings through efficient asset lifecycle management</li>
                           <li>Minimized security risks with controlled asset disposition</li>
                           <li>Maximized return on investment through value recovery</li>
                           <li>Reduced environmental impact with responsible recycling</li>
                           <li>Compliance with corporate governance requirements</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/asset-benefits.jpg" alt="Asset Management Benefits">
                     </div>
                  </div>
                  
                  <div class="pt-20">
                     <h3>Our ITAM Process</h3>
                     <p>We follow a systematic approach to IT Asset Management:</p>
                     <ol>
                        <li><strong>Discovery and Inventory:</strong> Comprehensive cataloging of all IT assets</li>
                        <li><strong>Assessment:</strong> Evaluation of condition and residual value</li>
                        <li><strong>Disposition Planning:</strong> Strategic planning for redeployment, resale, or recycling</li>
                        <li><strong>Data Security:</strong> Secure data wiping or destruction</li>
                        <li><strong>Processing:</strong> Refurbishment, remarketing, or environmentally responsible recycling</li>
                        <li><strong>Reporting:</strong> Detailed documentation of all disposition activities</li>
                     </ol>
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
                  <h3>Maximize Your IT Asset Value</h3>
                  <p>Contact us to learn how our Asset Management services can reduce costs and environmental impact</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Get Started Today</a>
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