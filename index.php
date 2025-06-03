<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'meta-tags.php'; ?>
   <!-- Slick Slider CSS CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
   <!-- AOS CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <!-- Lightbox CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
   <!-- Load the Google reCAPTCHA API -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
   <?php include 'header.php'; ?>
   <section class="hero">
      <div class="w-100">
         <div class="row m-0">
            <div class="col-9 p-0">
               <div class="hero-slider">
                  <!-- Updated with Unsplash image of circuit boards -->
                  <div><img
                        src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="E-waste Circuit Board Recycling"></div>
                  <div><img
                        src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="E-waste Circuit Board Recycling"></div>
                  <div><img
                        src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="E-waste Circuit Board Recycling"></div>
               </div>
            </div>
            <div class="col-3">
               <h3>Request A Quote</h3>
               <form action="mail-send.php" method="POST">
                  <div class="form-group">
                     <input type="text" id="name" name="name" placeholder="Your full name" required>
                  </div>
                  <div class="form-group">
                     <input type="email" id="email" name="email" placeholder="example@example.com" required>
                  </div>
                  <div class="form-group">
                     <input type="text" id="phone" name="phone" placeholder="Your phone number" required>
                  </div>
                  <div class="form-group">
                     <select id="service" name="service" required>
                        <option value="" selected disabled>Select Service</option>
                        <option value="WEEE Recycling">WEEE Recycling</option>
                        <option value="Reverse Logistics">Reverse Logistics</option>
                        <option value="Data Destruction">Data Destruction</option>
                        <option value="Asset Management">Asset Management</option>
                        <option value="Data Wiping">Data Wiping</option>
                        <option value="Extended Producer Responsibility">Extended Producer Responsibility</option>
                        <option value="E-Waste Management">E-Waste Management</option>
                        <option value="E-Waste Disposal">E-Waste Disposal</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <input type="text" id="location" name="location" placeholder="Your location" required>
                  </div>
                  <div class="form-group">
                     <textarea id="message" name="message" placeholder="Write a message" rows="2"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6Lf3T2cqAAAAAP3rNJpj6s-rKWbPHi9Hv3YDBFyY"></div>
                  <div class="form-group">
                     <button type="submit">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>

   <!-- About Us -->
   <section class="about-us com-padd">
      <div class="container">
         <div class="row">
            <div class="col-6" data-aos="fade-right" data-aos-duration="1000">
               <img src="/img/image3.webp" alt="About E-waste Recycling" class="border-cre">
            </div>
            <div class="col-6" data-aos="fade-left" data-aos-duration="1000">
               <div class="main-heading pb-10">
                  <h4>About Us</h4>
                  <h3>Responsible E-waste Management for a Greener Tomorrow</h3>
               </div>
               <p>E-waste Recyclers India is dedicated to providing sustainable electronic waste recycling solutions. We
                  help businesses and individuals responsibly dispose of electronic waste while ensuring data security
                  and environmental protection.</p>
               <p>Our comprehensive e-waste management services include collection, secure data destruction, and
                  environmentally-friendly recycling processes that comply with all regulatory requirements. We are
                  committed to reducing the environmental impact of electronic waste while recovering valuable
                  materials.</p>

               <!-- Key figures section -->
               <div class="about-key-figures">
                  <div class="key-figure">
                     <div class="number">10+</div>
                     <div class="label">Years Experience</div>
                  </div>
                  <div class="key-figure">
                     <div class="number">5000+</div>
                     <div class="label">Happy Clients</div>
                  </div>
                  <div class="key-figure">
                     <div class="number">25+</div>
                     <div class="label">Cities Covered</div>
                  </div>
               </div>

               <div class="main-btn">
                  <a href="about-us.php" class="cta-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Us End -->


   <!-- Services -->
   <section class="services-home bg-3 com-padd">
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="main-heading">
                  <h4>Our Services</h4>
                  <h3>Comprehensive E-waste Management Solutions</h3>
               </div>
            </div>
            <div class="col-6">
               <p>Partner with a company dedicated to sustainable e-waste recycling and responsible electronics disposal
                  for a greener future.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
               <a href="weee-recycling.php" class="service-link">
                  <div class="services-box">
                     <div class="heading-area">
                        <div class="icon">
                           <img
                              src="https://images.unsplash.com/photo-1550376026-33cbee780def?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                              class="border-cre" alt="WEEE Recycling">
                        </div>
                        <div class="content">
                           <h4>WEEE Recycling</h4>
                           <p>Proper disposal and recycling of all waste electrical and electronic equipment.</p>
                           <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
               <a href="data-destruction.php" class="service-link">
                  <div class="services-box">
                     <div class="heading-area">
                        <div class="icon">
                           <img
                              src="https://images.unsplash.com/photo-1563770660941-20978e870e26?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                              class="border-cre" alt="Data Destruction">
                        </div>
                        <div class="content">
                           <h4>Data Destruction</h4>
                           <p>Secure elimination of sensitive information stored on electronic devices.</p>
                           <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
               <a href="asset-management.php" class="service-link">
                  <div class="services-box">
                     <div class="heading-area">
                        <div class="icon">
                           <img
                              src="https://images.unsplash.com/photo-1563019880-1f45b5647a08?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                              class="border-cre" alt="Asset Management">
                        </div>
                        <div class="content">
                           <h4>IT Asset Management</h4>
                           <p>Complete lifecycle tracking and management for your technology equipment.</p>
                           <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
               <a href="extended-producer-responsibility.php" class="service-link">
                  <div class="services-box">
                     <div class="heading-area">
                        <div class="icon">
                           <img
                              src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                              class="border-cre" alt="Extended Producer Responsibility">
                        </div>
                        <div class="content">
                           <h4>EPR Solutions</h4>
                           <p>Help manufacturers meet legal obligations for end-of-life electronic products.</p>
                           <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>


      </div>
   </section>
   <!-- Services End -->
   <!-- Call to action -->
   <section class="bg-1 call-action">
      <div class="container">
         <div class="row">
            <div class="col-8" data-aos="fade-right" data-aos-duration="1000">
               <h3>Responsible E-waste Management for a Greener Tomorrow</h3>
               <p>Contact us today for sustainable electronic disposal solutions that protect both your data and our
                  planet.</p>
            </div>
            <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
               <a href="contact-us.php" class="button">Get a Free Quote</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Call to action End -->


   <!-- FAQ's -->
   <section class="faq com-padd">
      <div class="container">
         <div class="main-heading-center pb-10">
            <h3>Frequently Asked Questions About E-waste Recycling</h3>
         </div>
         <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
               <div class="ab_accordion">
                  <div class="ab_accordion_section">
                     <div class="ab_accordion_header">Why is proper e-waste disposal important? <i
                           class="fas fa-chevron-down"></i></div>
                     <div class="ab_accordion_content">
                        <p>Electronic waste contains toxic materials like lead, mercury, and cadmium that can harm the
                           environment if not properly disposed of. Additionally, electronics often contain valuable
                           materials that can be recovered and reused, reducing the need for raw material extraction.
                        </p>
                        <p>E-waste Recyclers India ensures that all electronic waste is processed in an environmentally
                           responsible manner, in compliance with all relevant regulations.</p>
                     </div>
                  </div>
                  <div class="ab_accordion_section">
                     <div class="ab_accordion_header">How secure is your data destruction process? <i
                           class="fas fa-chevron-down"></i></div>
                     <div class="ab_accordion_content">
                        <p>Our data destruction process follows industry-leading standards to ensure complete removal of
                           sensitive information. We provide certificates of destruction for all data-bearing devices,
                           giving you peace of mind that your information cannot be recovered.</p>
                     </div>
                  </div>
                  <div class="ab_accordion_section">
                     <div class="ab_accordion_header">What types of electronics do you accept? <i
                           class="fas fa-chevron-down"></i></div>
                     <div class="ab_accordion_content">
                        <p>We accept virtually all types of electronic equipment, including computers, laptops, servers,
                           monitors, printers, mobile phones, tablets, networking equipment, televisions, and more. If
                           you're unsure whether we accept a particular item, please contact us.</p>
                     </div>
                  </div>
                  <div class="ab_accordion_section">
                     <div class="ab_accordion_header">Which areas do you service?<i class="fas fa-chevron-down"></i>
                     </div>
                     <div class="ab_accordion_content">
                        <p>We provide e-waste recycling services throughout major cities in India, with a focus on Delhi
                           NCR, Mumbai, Bangalore, Chennai, and other metropolitan areas. Contact us to check
                           availability in your specific location.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FAQ's end -->
   <?php include 'footer.php'; ?>
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