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
                  <h1>Data Wiping</h1>
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
                     <h3>Secure Data Wiping Services</h3>
                  </div>
                  <p>Our data wiping service uses advanced software and techniques to permanently and securely erase all data from electronic devices while preserving the hardware for reuse or resale. This environmentally friendly alternative to physical destruction ensures complete removal of sensitive information while maximizing the value and lifespan of your IT assets.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/software.png" alt="Advanced Software">
                        </div>
                        <h5>Advanced Software</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/standards.png" alt="Industry Standards">
                        </div>
                        <h5>Industry Standards</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/verification.png" alt="Verified Wiping">
                        </div>
                        <h5>Verified Wiping</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/certificate.png" alt="Certification">
                        </div>
                        <h5>Data Wipe Certificate</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/data-wiping.jpg" alt="Data Wiping Process">
                     </div>
                     <div class="col-6">
                        <h3>Our Data Wiping Standards</h3>
                        <ul>
                           <li>NIST 800-88 compliant data erasure</li>
                           <li>DoD 5220.22-M standard wiping (3-pass overwrite)</li>
                           <li>Gutmann Method (35-pass) for highest security requirements</li>
                           <li>Secure erase for SSD and flash storage</li>
                           <li>Firmware and BIOS reset capabilities</li>
                           <li>Verification and validation of complete data removal</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Benefits of Data Wiping</h3>
                        <ul>
                           <li>Preserves equipment for reuse or resale, reducing e-waste</li>
                           <li>Provides verifiable proof of data removal</li>
                           <li>Environmentally responsible alternative to physical destruction</li>
                           <li>Maintains higher residual value of IT assets</li>
                           <li>Reduces total cost of ownership for IT equipment</li>
                           <li>Supports circular economy and sustainability initiatives</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/wiping-benefits.jpg" alt="Data Wiping Benefits">
                     </div>
                  </div>
                  
                  <div class="pt-20">
                     <h3>Our Data Wiping Process</h3>
                     <ol>
                        <li><strong>Asset Receiving:</strong> All devices are logged and tracked in our secure facility</li>
                        <li><strong>Assessment:</strong> Hardware evaluation to determine appropriate wiping method</li>
                        <li><strong>Data Wiping:</strong> Application of appropriate wiping standard based on device type and security requirements</li>
                        <li><strong>Verification:</strong> Multiple validation checks to ensure complete data removal</li>
                        <li><strong>Certification:</strong> Generation of data wiping certificates with detailed information</li>
                        <li><strong>Asset Disposition:</strong> Preparation for reuse, resale, or environmentally responsible recycling</li>
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
                  <h3>Secure Data Wiping for Your IT Equipment</h3>
                  <p>Protect your sensitive information while preserving equipment value</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Request a Service</a>
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