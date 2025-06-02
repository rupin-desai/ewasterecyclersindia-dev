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
                  <h1>Contact Us
                  </h1>
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
                     <h3>Royal Window Fashion
                     </h3>
                  </div>
                  <p>Shop No. 11 FC, 12 FC & FD 4, Karmastambha Industrial Estate, 1st Floor, Surya Nagar Naka, L. B. S Marg, Vikhroli (West), Mumbai - 400083.
                  </p>
                  <p class="pt-20 pb-20"><strong>Call Us:</strong> +91  90760  76720 / 90760  76721</p>


                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7540.855398822002!2d72.914931!3d19.088884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c62d64a43285%3A0x9318282f4ca06f39!2sAegis%20Pest%20Control!5e0!3m2!1sen!2sin!4v1742726627146!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="col-6 services-inner" data-aos="fade-left" data-aos-duration="1000">
                  <div class="row">
                    <div class="col-12">
                    <div class="main-heading pb-10">
                     <h3>WE CAN HELP
                     </h3>

                     <p>Our expert team at Royal Window Fashion is ready to help. Fill out the short form below, and one of our specialists will contact you within one business day.</p>

                  </div>
                    </div>
                  </div>
                  <form action="mail-send.php" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your full name" required="">
                     </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Mobile Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required="">
                     </div>
                </div>
                <div class="col-12">
                     <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="example@example.com" required="">
                     </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                    <select id="services" name="services" required="">
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
                </div>
                <div class="col-6">
                <div class="form-group">
      <select id="location" name="location" required="">
      <option selected="true" value="" disabled>Select Location</option>
                           <option value="Mumbai">Mumbai</option>
                           <option value="Panvel">Panvel</option>
                           <option value="Pune">Pune</option>
      </select>
   </div>
                </div>
                <div class="col-12">
                <div class="form-group">
      <textarea id="message" name="message" rows="3" cols="50" placeholder="Enter your message"></textarea>
   </div>
                </div>
                <div class="col-6">
                    <!-- Google reCAPTCHA -->
   <div class="g-recaptcha" data-sitekey="6Lf3T2cqAAAAAP3rNJpj6s-rKWbPHi9Hv3YDBFyY"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-5ifp3wvrq3dp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lf3T2cqAAAAAP3rNJpj6s-rKWbPHi9Hv3YDBFyY&amp;co=aHR0cHM6Ly93d3cuc2hyYWRkaGF3aW5kb3dmYXNoaW9uLmNvbTo0NDM.&amp;hl=en&amp;v=bUO1BXI8H9PgjAPSW9hwuSeI&amp;size=normal&amp;cb=3arctrkgxdp5"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                </div>
                <div class="col-6">
                     <div class="form-group">
                        <button type="submit">Submit</button>
                     </div>
                </div>
                
            </div>
                     
                    
                    
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- contact us End -->
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