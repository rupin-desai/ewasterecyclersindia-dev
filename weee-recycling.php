
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
                  <h1>WEEE Recycling</h1>
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
                     <h3>Waste Electrical and Electronic Equipment (WEEE) Recycling</h3>
                  </div>
                  <p>Our WEEE recycling service ensures proper disposal and recycling of all waste electrical and electronic equipment in compliance with international standards. We handle the complete recycling process for a wide range of electronic equipment including computers, monitors, printers, mobile phones, household appliances, and more.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/compliance.png" alt="Regulatory Compliance">
                        </div>
                        <h5>Regulatory Compliance</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/material-recovery.png" alt="Material Recovery">
                        </div>
                        <h5>Material Recovery</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/eco-friendly.png" alt="Eco-Friendly Process">
                        </div>
                        <h5>Eco-Friendly Process</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/certificate.png" alt="Recycling Certification">
                        </div>
                        <h5>Recycling Certification</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/weee-recycling.jpg" alt="WEEE Recycling Process">
                     </div>
                     <div class="col-6">
                        <h3>Our WEEE Recycling Process</h3>
                        <ul>
                           <li>Collection and transportation of electronic waste</li>
                           <li>Sorting and categorization of different types of e-waste</li>
                           <li>Disassembly and separation of components</li>
                           <li>Recovery of valuable materials (precious metals, plastics, etc.)</li>
                           <li>Safe disposal of hazardous materials</li>
                           <li>Documentation and certification of proper recycling</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Benefits of Professional WEEE Recycling</h3>
                        <ul>
                           <li>Prevents toxic materials from entering landfills</li>
                           <li>Conserves natural resources by recovering valuable materials</li>
                           <li>Reduces carbon footprint and environmental impact</li>
                           <li>Ensures compliance with e-waste regulations</li>
                           <li>Provides documentation for corporate sustainability reporting</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/weee-benefits.jpg" alt="WEEE Recycling Benefits">
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
                  <h3>Professional WEEE Recycling for Your Business</h3>
                  <p>Contact us today to learn how our WEEE recycling solutions can help your organization meet environmental goals</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Request a Quote</a>
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