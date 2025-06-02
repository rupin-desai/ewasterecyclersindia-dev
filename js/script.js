AOS.init();

$('.hero-slider').slick({
    dots: false,        // Show dots navigation
    arrows: true,      // Hide arrows
    infinite: true,    // Infinite loop sliding
    speed: 500,        // Transition speed
    slidesToShow: 1,   // Number of slides to show
    slidesToScroll: 1, // Number of slides to scroll at a time
    autoplay: true,    // Enable autoplay
    autoplaySpeed: 2000 // Autoplay speed (2 seconds)
});

$('.testimonials-slider').slick({
   dots: true,        // Show dots navigation
   arrows: false,      // Hide arrows
   infinite: true,    // Infinite loop sliding
   speed: 500,        // Transition speed
   slidesToShow: 2,   // Number of slides to show
   slidesToScroll: 2, // Number of slides to scroll at a time
   autoplay: true,    // Enable autoplay
   autoplaySpeed: 2000, // Autoplay speed (2 seconds)
   responsive: [
      {
        breakpoint: 768, // for tablets and mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,  
          speed: 1500,     
        }
      }
    ]
});

$('.types-slider').slick({
   dots: false,        // Show dots navigation
   arrows: false,      // Hide arrows
   infinite: true,    // Infinite loop sliding
   speed: 500,        // Transition speed
   slidesToShow: 3,   // Number of slides to show
   slidesToScroll: 3, // Number of slides to scroll at a time
   autoplay: true,    // Enable autoplay
   autoplaySpeed: 2000, // Autoplay speed (2 seconds)
   responsive: [
      {
        breakpoint: 768, // for tablets and mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,  
          speed: 1500,     
        }
      }
    ]
});


$('.clients-slider').slick({
   dots: true,        // Show dots navigation
   arrows: false,      // Hide arrows
   infinite: true,    // Infinite loop sliding
   speed: 500,        // Transition speed
   slidesToShow: 6,   // Number of slides to show
   slidesToScroll: 2, // Number of slides to scroll at a time
   autoplay: true,    // Enable autoplay
   autoplaySpeed: 2000, // Autoplay speed (2 seconds)
   responsive: [
      {
        breakpoint: 768, // for tablets and mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,  
          speed: 1500,     
        }
      }
    ]
});

document.addEventListener("DOMContentLoaded", function() {
   // Get all testimonial boxes
   const testimonials = document.querySelectorAll('.testimonials-box');
   
   // Calculate the maximum height
   let maxHeight = 0;
   testimonials.forEach(function(testimonial) {
       let boxHeight = testimonial.offsetHeight;
       if (boxHeight > maxHeight) {
           maxHeight = boxHeight;
       }
   });
   
   // Set the maximum height to all testimonial boxes
   testimonials.forEach(function(testimonial) {
       testimonial.style.height = maxHeight + 'px';
   });
});

 // Toggle off-canvas menu
 $('.menu-toggle').on('click', function() {
    $('#offCanvasMenu').toggleClass('open');
});

$('#closeMenu').on('click', function() {
    $('#offCanvasMenu').removeClass('open');
});

$('.ab_accordion_header').click(function () {
    // toggle the content
    $(this).next('.ab_accordion_content').slideToggle(200);
    // toggle the arrow icon
    $(this).toggleClass('active');
    // hide the other contents
    $('.ab_accordion_content').not($(this).next()).slideUp(200);
    // remove the active class from other headers
    $('.ab_accordion_header').not($(this)).removeClass('active');
});


document.querySelector('form').addEventListener('submit', function(event) {
    let isValid = true;
    
    // Name validation
    const name = document.getElementById('name').value;
    if (name === '') {
       alert('Please enter your name.');
       isValid = false;
    }
 
    // Email validation
    const email = document.getElementById('email').value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
       alert('Please enter a valid email address.');
       isValid = false;
    }
 
    // Phone validation
    const phone = document.getElementById('phone').value;
   //  const phonePattern = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
   //  if (!phonePattern.test(phone)) {
   //     alert('Please enter a valid phone number in the format 123-456-7890.');
   //     isValid = false;
   //  }
 
    // Service validation
    const services = document.getElementById('services').value;
    if (services === 'Select Services') {
       alert('Please select a service.');
       isValid = false;
    }
 
    // Location validation
    const location = document.getElementById('location').value;
    if (location === 'Select Location') {
       alert('Please select a location.');
       isValid = false;
    }
 
    // Prevent form submission if validation fails
    if (!isValid) {
       event.preventDefault();
    }
 });