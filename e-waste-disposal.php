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
                  <h1>E-Waste Disposal</h1>
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
                     <h3>Safe and Responsible E-Waste Disposal</h3>
                  </div>
                  <p>Our e-waste disposal services ensure that your unwanted electronic equipment is handled in an environmentally responsible manner that complies with all regulations. We properly dispose of electronic waste that cannot be reused or recycled, with special attention to hazardous materials that require specialized handling. Our goal is to minimize environmental impact while providing complete documentation for your compliance records.</p>

                  <div class="features-grid">
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/regulated.png" alt="Regulated Materials">
                        </div>
                        <h5>Regulated Materials</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/landfill.png" alt="Landfill Diversion">
                        </div>
                        <h5>Landfill Diversion</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/certificate.png" alt="Disposal Certification">
                        </div>
                        <h5>Disposal Certification</h5>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="img/services/ewaste/compliance.png" alt="Regulatory Compliance">
                        </div>
                        <h5>Regulatory Compliance</h5>
                     </div>
                  </div>

                  <div class="row specification">
                     <div class="col-6">
                        <img src="img/services/ewaste/disposal.jpg" alt="E-waste Disposal">
                     </div>
                     <div class="col-6">
                        <h3>Materials We Handle For Disposal</h3>
                        <ul>
                           <li>CRT monitors and televisions containing lead glass</li>
                           <li>Batteries (lithium-ion, lead-acid, nickel-cadmium)</li>
                           <li>Mercury-containing devices and components</li>
                           <li>Circuit boards with heavy metals</li>
                           <li>Non-recyclable plastics from electronic equipment</li>
                           <li>Toner cartridges and printing supplies</li>
                           <li>Hazardous electronic components</li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="row specification pt-20">
                     <div class="col-6">
                        <h3>Our Disposal Process Ensures</h3>
                        <ul>
                           <li>Zero landfill policy for electronic waste</li>
                           <li>Segregation of hazardous materials</li>
                           <li>Proper handling of regulated substances</li>
                           <li>Environmentally responsible disposal methods</li>
                           <li>Complete documentation and disposal certificates</li>
                           <li>Compliance with E-waste Management Rules</li>
                           <li>Minimization of environmental impact</li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <img src="img/services/ewaste/disposal-process.jpg" alt="Disposal Process">
                     </div>
                  </div>
                  
                  <div class="pt-20">
                     <h3>Why Choose Professional E-Waste Disposal</h3>
                     <p>Improper disposal of electronic waste can have serious consequences:</p>
                     <ul>
                        <li><strong>Environmental Hazards:</strong> Toxic materials can leach into soil and water</li>
                        <li><strong>Legal Liability:</strong> Non-compliant disposal can result in significant fines</li>
                        <li><strong>Data Security Risks:</strong> Improper disposal may expose sensitive information</li>
                        <li><strong>Reputation Damage:</strong> Public backlash from irresponsible waste management</li>
                     </ul>
                     <p>Our professional disposal services eliminate these risks while providing complete documentation for your records.</p>
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
                  <h3>Responsible E-Waste Disposal Made Simple</h3>
                  <p>Trust us with your electronic waste disposal needs for safe, compliant, and documented results</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Schedule a Pickup</a>
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