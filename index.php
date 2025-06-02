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
      <section class="hero">
         <div class="w-100">
            <div class="row m-0">
               <div class="col-9 p-0">
                  <div class="hero-slider">
                     <div><img src="img/slider/slider-1.jpg" alt="Slide 1"></div>
                  </div>
               </div>
               <div class="col-3">
                  <h3>Request A Call Back
                  </h3>
                  <form action="mail-send.php" method="POST">
                     <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your full name" required>
                     </div>
                     <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="example@example.com" required>
                     </div>
                     <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Mobile Number" 
                           pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                     </div>
                     <div class="form-group">
                        <select id="services" name="services" required>
                           <option selected="true" value="" disabled>Select Services</option>
    <option value="Pleated MosquitoNet">Pleated Mosquito Net</option>
    <option value="Invisible Grill">Invisible Grill</option>
    <option value="Roller Blinds">Roller Blinds</option>
    <option value="Accordion Door">Accordion Door</option>
    <option value="Bird Spikes">Bird Spikes</option>
    <option value="Bird Net">Bird Net</option>
    <option value="Zebra Blinds">Zebra Blinds</option>
    <option value="Wooden Venetian Blinds">Wooden Venetian Blinds</option>
    <option value="Sound Proof Window">Sound Proof Window</option>
    <option value="Aluminium Mosquito Net Door">Aluminium Mosquito Net Door</option>
    <option value="Zip Screen">Zip Screen</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select id="location" name="location" required>
                           <option selected="true" value="" disabled>Select Location</option>
                           <option value="Mumbai">Mumbai</option>
                           <option value="Panvel">Panvel</option>
                           <option value="Pune">Pune</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your message"></textarea>
                     </div>
                     <!-- Google reCAPTCHA -->
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
                 <img src="img/about.jpg" alt="" class="border-cre">
               </div>
               <div class="col-6" data-aos="fade-left" data-aos-duration="1000">
                  <div class="main-heading pb-10">
                     <h4>About Us</h4>
                     <h3>Expertise in windows & door for every style</h3>
                  </div>
                  <p>Royal Window fashion established in 2009. Today, Royal Window fashion boasts of multiple satisfied and re-energized clients with best Services Provider and is well-known as one of the leading service providers of a wide and appreciable range of Exhibition services.</p>
                  <p>We offer quality assured services which comprises Roller Blinds, Roller Mosquito Net, Turnkey Contractor and other services. These services offered by us encompass everything that is required for an event to be successfully accomplished. Moreover, with the help of our good financial position we are able to serve our clients with appreciable services that comply with international standards. Our company follows Total Quality Management (TQM) approach so as to ensure optimum quality of our services.</p>
                  <div class="main-btn">
                     <a href="about-us.php" class="cta-button">View More <i class="fa-solid fa-arrow-right"></i></a>
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
                     <h3>Comprehensive window & door services</h3>
                  </div>
               </div>
               <div class="col-6">
                  <p>Partner with a company dedicated to excellence in window and door installations, ensuring each project is handled with precision and care.</p>
               </div>
            </div>
            <div class="row">
    <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
        <a href="pleated-mosquito-net.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/pleated-mosquito-net.jpg" class="border-cre" alt="Pleated Mosquito Net">
                    </div>
                   <div class="content"> 
                      <h4>Pleated Mosquito Net</h4>
                       <p>Stylish, retractable, and effective mosquito protection.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
      <a href="invisible-grill.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/invisible-grill.jpg" class="border-cre" alt="Invisible Grill">
                    </div>
                   <div class="content"> 
                      <h4>Invisible Grill</h4>
                       <p>Sleek, secure, and unobstructed balcony protection.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
      <a href="roller-blinds.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/roller-blinds.jpg" class="border-cre" alt="Roller Blinds">
                    </div>
                   <div class="content"> 
                      <h4>Roller Blinds</h4>
                       <p>Modern, smooth, and privacy-enhancing window covering.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
       <a href="accordion-door.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/accordion-door.jpg" class="border-cre" alt="Accordion Door">
                    </div>
                   <div class="content"> 
                      <h4>Accordion Door</h4>
                       <p>Space-saving, stylish, and flexible partition solution.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
      <a href="bird-net.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/bird-net.jpg" class="border-cre" alt="Bird Net">
                    </div>
                   <div class="content"> 
                      <h4>Bird Net</h4>
                       <p>Durable netting to prevent birds from entering open spaces.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
      <a href="zebra-blinds.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/zebra-blinds.jpg" class="border-cre" alt="Zebra Blinds">
                    </div>
                   <div class="content"> 
                      <h4>Zebra Blinds</h4>
                       <p>Dual-layered blinds for adjustable light control and privacy.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
      <a href="wooden-venetian-blinds.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/wooden-venetian-blinds.jpg" class="border-cre" alt="Wooden Venetian Blinds">
                    </div>
                   <div class="content"> 
                      <h4>Wooden Venetian Blinds</h4>
                       <p>Classic wooden slats for a warm and elegant ambiance.</p>
                     <span class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></span>
                   </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-3" data-aos="fade-up" data-aos-duration="1000">
      <a href="zip-screen.php" class="service-link">
            <div class="services-box">
                <div class="heading-area">
                    <div class="icon">
                        <img src="img/services/zip-screen.jpg" class="border-cre" alt="Bird Spikes">
                    </div>
                   <div class="content"> 
                      <h4>Zip Screen</h4>
                       <p>Durable, stylish outdoor blinds for sun and privacy control.</p>
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
                  <h3>Transform Your Space with Royal Window Fashion</h3>
                  <p>ontact us now for personalized solutions and outstanding service. Let us bring your vision to life with our wide range of exhibition services.</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="contact-us.php" class="button">Get in Touch Today!</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Call to action End -->

     
      <!-- FAQ's -->
    <section class="faq com-padd">
    <div class="container">
        <div class="main-heading-center pb-10">
            <h3>FAQ to Pest Control Services in Mumbai</h3>
        </div>
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="ab_accordion">
                    <div class="ab_accordion_section">
                        <div class="ab_accordion_header">Is This Safe For My Family And Pets? <i class="fas fa-chevron-down"></i></div>
                        <div class="ab_accordion_content">
                        <p>Economy Exterminators’ first priority is the safety of our customers, as well as being good stewards of the environment. “Caring People — Careful Solutions℠” means that we take the time to develop a customized pest control program and use strategic targeting, which enables us to use the least amount of pest control product while providing superior results. All materials are EPA approved and all technicians are trained in the safe handling and application of all materials.</p>
                        <p>ISO Certified Best Pest Control Services In Ghatkopar Mumbai Safe & Effective.</p>
                        </div>
                    </div>
                    <div class="ab_accordion_section">
                        <div class="ab_accordion_header">How Soon Before We can Expect Results? <i class="fas fa-chevron-down"></i></div>
                        <div class="ab_accordion_content">
                        <p>You will see a noticeable reduction in pest activity within one to two days. Depending on the pest and the choice of materials necessary to give the best long term results, it is not unusual to notice a gradual reduction up to 14 days.</p>

                        <p>If you notice pest activity after 14 days, please call our office to set up a free follow-up service. On-going pest monitoring is part of our service and is the best way to detect new pest problems. Our goal is your total satisfaction!</p>
                        </div>
                    </div>
                    <div class="ab_accordion_section">
                        <div class="ab_accordion_header">Is A Preventative Plan Necessary? <i class="fas fa-chevron-down"></i></div>
                        <div class="ab_accordion_content">
                            <p>There is a big difference between pest control and pest prevention. A service plan like Economy Exterminators’ Total Pest Control program is the only truly effective way to eliminate pests and prevent them from coming back.</p>
                            <p>The Pest Elimination Plus program covers you against 44 pests that are common in North Carolina. This means that you won’t have a problem with any of the covered pests again — and if you do, Economy Exterminators’ unlimited extra service will correct the problem at no additional charge.</p>
                        </div>
                    </div>
                    <div class="ab_accordion_section">
                        <div class="ab_accordion_header">Which all area in or around Mumbai do you provide services in?<i class="fas fa-chevron-down"></i></div>
                        <div class="ab_accordion_content">
                            <p>We provide Pest Control Services in Mumbai, Navi Mumbai and Thane.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ's end -->
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