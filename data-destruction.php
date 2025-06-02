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
                  <h1>Data Destruction</h1>
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
                     <h3>Secure Data Destruction Services</h3>
                  </div>
                  <p>Our data destruction service ensures that all sensitive information stored on your electronic devices is permanently eliminated before recycling. We use advanced methods to physically destroy storage media or securely wipe data according to industry standards, protecting your business and customers from data breaches and identity theft.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/security.png" alt="Security">
                        </div>
                        <h5>NIST Compliant</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/certificate.png" alt="Certification">
                        </div>
                        <h5>Destruction Certificate</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/shredding.png" alt="Physical Destruction">
                        </div>
                        <h5>Physical Shredding</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/witness.png" alt="Witnessed Destruction">
                        </div>
                        <h5>Witnessed Destruction</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/data-destruction.jpg" alt="Data Destruction">
                     </div>
                     <div class="col-6">
                        <h3>Our Data Destruction Methods</h3>
                        <ul>
                           <li>Physical destruction (shredding, crushing, degaussing)</li>
                           <li>Secure data wiping with DoD 5220.22-M compliant software</li>
                           <li>Onsite destruction services for sensitive operations</li>
                           <li>Secure chain-of-custody tracking for all devices</li>
                           <li>Video recording or client witnessing options</li>
                           <li>Documentation and certification of destruction</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Industries We Serve</h3>
                        <ul>
                           <li>Financial institutions and banking</li>
                           <li>Healthcare providers and hospitals</li>
                           <li>Government agencies and departments</li>
                           <li>Legal firms and law offices</li>
                           <li>Educational institutions and universities</li>
                           <li>Corporate and enterprise businesses</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/industries.jpg" alt="Industries Served">
                     </div>
                  </div>
                  
                  <div class="pt-20">
                     <h3>Compliance and Certifications</h3>
                     <p>Our data destruction services comply with major data protection regulations including:</p>
                     <ul>
                        <li>GDPR (General Data Protection Regulation)</li>
                        <li>HIPAA (Health Insurance Portability and Accountability Act)</li>
                        <li>PCI DSS (Payment Card Industry Data Security Standard)</li>
                        <li>NIST 800-88 Guidelines for Media Sanitization</li>
                        <li>Sarbanes-Oxley Act</li>
                     </ul>
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
                  <h3>Don't Risk Your Sensitive Data</h3>
                  <p>Ensure complete data security with our certified destruction services</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Schedule a Service</a>
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