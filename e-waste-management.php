
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
                  <h1>E-Waste Management</h1>
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
                     <h3>Comprehensive E-Waste Management Solutions</h3>
                  </div>
                  <p>Our end-to-end e-waste management services provide integrated solutions for the entire electronic waste lifecycle. We help businesses implement sustainable practices for handling e-waste, from policy development and staff training to collection, processing, and reporting. Our holistic approach ensures environmental protection while maximizing resource recovery and minimizing costs.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/policy.png" alt="Policy Development">
                        </div>
                        <h5>Policy Development</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/collection.png" alt="Collection Systems">
                        </div>
                        <h5>Collection Systems</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/processing.png" alt="Processing">
                        </div>
                        <h5>Processing & Recovery</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/reporting.png" alt="Reporting">
                        </div>
                        <h5>Documentation</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/management.jpg" alt="E-Waste Management">
                     </div>
                     <div class="col-6">
                        <h3>Our E-Waste Management Approach</h3>
                        <ul>
                           <li>E-waste policy and procedure development</li>
                           <li>Staff training and awareness programs</li>
                           <li>Collection systems implementation</li>
                           <li>Secure transportation and handling</li>
                           <li>Environmentally sound processing and recycling</li>
                           <li>Material recovery and resource conservation</li>
                           <li>Compliance documentation and reporting</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Benefits of Professional E-Waste Management</h3>
                        <ul>
                           <li>Regulatory compliance with all e-waste laws</li>
                           <li>Protection from environmental liabilities</li>
                           <li>Conservation of natural resources</li>
                           <li>Prevention of toxic materials entering landfills</li>
                           <li>Support for corporate sustainability goals</li>
                           <li>Potential cost recovery through material salvage</li>
                           <li>Enhanced corporate image and reputation</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/management-benefits.jpg" alt="Management Benefits">
                     </div>
                  </div>
                  
                  <div class="pt-20">
                     <h3>Our E-Waste Management Process</h3>
                     <ol>
                        <li><strong>Assessment:</strong> Evaluating your current e-waste generation and management practices</li>
                        <li><strong>Planning:</strong> Developing customized e-waste management strategies and policies</li>
                        <li><strong>Implementation:</strong> Establishing collection systems, training staff, and launching programs</li>
                        <li><strong>Collection:</strong> Regular pick-up of e-waste from your facilities</li>
                        <li><strong>Processing:</strong> Sorting, dismantling, and recycling electronic waste</li>
                        <li><strong>Recovery:</strong> Extracting valuable materials for reuse</li>
                        <li><strong>Reporting:</strong> Providing detailed documentation of all e-waste handling activities</li>
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
                  <h3>Transform Your E-Waste Management Approach</h3>
                  <p>Partner with us for responsible, efficient, and compliant e-waste solutions</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Request a Consultation</a>
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