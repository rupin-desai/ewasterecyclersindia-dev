
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
                  <h1>Contact Us</h1>
               </div>
            </div>
         </div>
      </section>
      <!-- contact us -->
      <section class="contact-us com-padd">
         <div class="container">
            <div class="row">
               <div class="col-6 services-inner" data-aos="fade-right" data-aos-duration="1000">
                  <div class="main-heading pb-10">
                     <h3>Eco Birdd Recycling Company Pvt Ltd</h3>
                  </div>
                  <p>
                     <strong>Registered Office:</strong> No.185, 1st Cross, 1st Main,<br>
                     Azeez Sait Industrial Estate,<br>
                     Nayandahalli, Bangalore 560 039
                  </p>
                  <ul class="contact-info-list">
                     <li><strong>Call Us:</strong> <a href="tel:+917400055174">+91 74000 55174</a></li>
                     <li> <strong>Email:</strong> <a href="mailto:info@ewasterecyclersindia.com">info@ewasterecyclersindia.com</a></li>
                     <li> <strong>Hours:</strong> Monday - Saturday: 9:00 AM - 6:00 PM</li>
                  </ul>

                  <!-- Google map showing Bangalore location -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2969024799716!2d77.5263231!3d12.9528078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e0c9e76c4b1%3A0x6c8526e7ccb288f2!2sAzeez%20Sait%20Industrial%20Estate%2C%20Nayandahalli%2C%20Bengaluru%2C%20Karnataka%20560039!5e0!3m2!1sen!2sin!4v1651234567890!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="col-6 services-inner" data-aos="fade-left" data-aos-duration="1000">
                  <div class="row">
                    <div class="col-12">
                    <div class="main-heading pb-10">
                     <h3>REQUEST A QUOTE</h3>
                     <p>Our e-waste recycling experts are ready to help with your electronic waste management needs. Fill out the form below, and one of our specialists will contact you within one business day.</p>
                  </div>
                    </div>
                  </div>
                  <form action="mail-send.php" method="POST">
                     <div class="row">
                        <div class="col-6">
                           <div class="form-group">
                              <input type="text" id="name" name="name" placeholder="Your full name" required>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <input type="tel" id="phone" name="phone" placeholder="Mobile Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input type="email" id="email" name="email" placeholder="Your email address" required>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <select id="service" name="service" required>
                                 <option selected="true" value="" disabled>Select Service</option>
                                 <option value="WEEE Recycling">WEEE Recycling</option>
                                 <option value="Reverse Logistics">Reverse Logistics</option>
                                 <option value="Data Destruction">Data Destruction</option>
                                 <option value="Asset Management">Asset Management</option>
                                 <option value="Data Wiping">Data Wiping</option>
                                 <option value="Extended Producer Responsibility">Extended Producer Responsibility</option>
                                 <option value="E-Waste Management">E-Waste Management</option>
                                 <option value="E-Waste Disposal">E-Waste Disposal</option>
                                 <option value="IT Asset Management">IT Asset Management</option>
                                 <option value="Corporate Recycling Programs">Corporate Recycling Programs</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <select id="location" name="location" required>
                                 <option selected="true" value="" disabled>Select Location</option>
                                 <option value="Bangalore">Bangalore</option>
                                 <option value="Delhi NCR">Delhi NCR</option>
                                 <option value="Mumbai">Mumbai</option>
                                 <option value="Chennai">Chennai</option>
                                 <option value="Hyderabad">Hyderabad</option>
                                 <option value="Kolkata">Kolkata</option>
                                 <option value="Pune">Pune</option>
                                 <option value="Other">Other Location</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <textarea id="message" name="message" rows="3" cols="50" placeholder="Describe your e-waste recycling requirements"></textarea>
                           </div>
                        </div>
                        <div class="col-6">
                           <!-- Google reCAPTCHA -->
                           <div class="g-recaptcha" data-sitekey="6Lf3T2cqAAAAAP3rNJpj6s-rKWbPHi9Hv3YDBFyY"></div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <button type="submit">Submit Request</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      
      <!-- Call to action -->
      <section class="bg-1 call-action">
         <div class="container">
            <div class="row">
               <div class="col-8" data-aos="fade-right" data-aos-duration="1000">
                  <h3>Need Immediate Assistance?</h3>
                  <p>Contact our e-waste recycling experts directly by phone or WhatsApp</p>
               </div>
               <div class="col-4" data-aos="fade-left" data-aos-duration="1000">
                  <a href="https://api.whatsapp.com/send?phone=917400055174&text=Hello%20," class="button" target="_blank"><i class="fa-brands fa-whatsapp"></i> Chat Now</a>
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