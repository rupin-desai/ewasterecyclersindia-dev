<?php
// Function to get meta information based on the current page
function get_meta_tags_for_page() {
    // Get the current file name or page
    $page = basename($_SERVER['PHP_SELF'], ".php");

    // Define default meta information
    $meta = [
        'title' => 'Royal Window Fashion - Mosquito net for home | Royal window fashion',
        'description' => 'Get the best window fashion solutions for your home or business. We offer roller blinds, roller mosquito nets, Invisible Grill for Balcony and Mosquito net for home turnkey contracting services.',
        'keywords' => '',
        'canonical' => 'https://yourwebsite.com/'  // Default canonical URL
    ];

    // Page-specific meta information
    switch ($page) {
        case 'index':
            $meta['title'] = 'Royal Window Fashion - Mosquito net for home | Royal window fashion';
            $meta['description'] = 'Get the best window fashion solutions for your home or business. We offer roller blinds, roller mosquito nets, Invisible Grill for Balcony and Mosquito net for home turnkey contracting services.';
            $meta['keywords'] = 'home, website, awesome';
            $meta['canonical'] = 'https://yourwebsite.com/index.php';  // Set canonical for index page
            break;
        case 'about-us':
            $meta['title'] = 'About Us - Royal Window Fashion - Mosquito net for home | Royal window fashion';
            $meta['description'] = 'Get the best window fashion solutions for your home or business. We offer roller blinds, roller mosquito nets, Invisible Grill for Balcony and Mosquito net for home turnkey contracting services.';
            $meta['keywords'] = 'about us, company, team';
            $meta['canonical'] = 'https://yourwebsite.com/about-us.php';  // Set canonical for about us page
            break;
        case 'invisible-grills-in-andheri':
            $meta['title'] = 'Invisible Grill in Andheri For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-andheri.php';  // Set canonical for invisible grills in andheri page
            break;
        case 'invisible-grills-in-borivali':
            $meta['title'] = 'Invisible Grill in Borivali For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-borivali.php';  // Set canonical for invisible grills in borivali page
            break;
        case 'invisible-grills-in-churchgate':
            $meta['title'] = 'Invisible Grill in Churchgate For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-churchgate.php';  // Set canonical for invisible grills in churchgate page
            break;
        case 'invisible-grills-in-dadar':
            $meta['title'] = 'Invisible Grill in Dadar For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-dadar.php';  // Set canonical for invisible grills in dadar page
            break;
        case 'invisible-grills-in-goregaon':
            $meta['title'] = 'Invisible Grill in Goregaon For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-goregaon.php';  // Set canonical for invisible grills in goregaon page
            break;
        case 'invisible-grills-in-jogeshwari':
            $meta['title'] = 'Invisible Grill in Jogeshwari For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-jogeshwari.php';  // Set canonical for invisible grills in jogeshwari page
            break;
        case 'invisible-grills-in-malad':
            $meta['title'] = 'Invisible Grill in Malad For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-malad.php';  // Set canonical for invisible grills in malad page
            break;
        case 'invisible-grills-in-mumbai':
            $meta['title'] = 'Invisible Grill in Mumbai For Balcony';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/invisible-grills-in-mumbai.php';  // Set canonical for invisible grills in mumbai page
            break;
        case 'mosquito-nets-for-windows-in-mumbai':
            $meta['title'] = 'Mosquito Net for Windows in Mumbai, Thane & Navi Mumbai';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/mosquito-nets-for-windows-in-mumbai.php';  // Set canonical for mosquito nets for windows in mumbai page
            break;
        case 'pleated-mosquito-nets-in-mumbai':
            $meta['title'] = 'Pleated Mosquito Net Mumbai, Thane & Navi Mumbai';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/pleated-mosquito-nets-in-mumbai.php';  // Set canonical for pleated mosquito nets in mumbai page
            break;
        case 'roller-blinds-in-mumbai':
            $meta['title'] = 'Roller Blinds Manufacturers & Supplier in Mumbai';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/roller-blinds-in-mumbai.php';  // Set canonical for roller blinds in mumbai page
            break;
        case 'bird-netting-services-in-mumbai':
            $meta['title'] = 'Bird Netting Services in Mumbai | Pigeon Net Services in Mumbai';
            $meta['description'] = '';
            $meta['keywords'] = '';
            $meta['canonical'] = 'https://www.shraddhawindowfashion.com/bird-netting-services-in-mumbai.php';  // Set canonical for bird netting services in mumbai page
            break;
        case 'contact':
            $meta['title'] = 'Contact Us - Royal Window Fashion - Mosquito net for home | Royal window fashion';
            $meta['description'] = 'Get in touch with us for inquiries and support.';
            $meta['keywords'] = 'contact, support, inquiries';
            $meta['canonical'] = 'https://yourwebsite.com/contact.php';  // Set canonical for contact page
            break;
        // Add more cases as needed for different pages
        default:
            // Keep default meta or customize for other pages
            break;
    }

    return $meta;
}

// Retrieve meta tags for the current page
$meta_tags = get_meta_tags_for_page();
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/x-icon" href="img/favicon.ico">
<!-- Meta Tags -->
<title><?php echo htmlspecialchars($meta_tags['title']); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_tags['description']); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($meta_tags['keywords']); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($meta_tags['canonical']); ?>">

<!-- Google Tag Manager -->
<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':-->
<!--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],-->
<!--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=-->
<!--'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);-->
<!--})(window,document,'script','dataLayer','YOUR_GTM_ID');</script>-->
<!-- End Google Tag Manager -->

<!-- Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_GA_ID"></script>-->
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!--  function gtag(){dataLayer.push(arguments);}-->
<!--  gtag('js', new Date());-->
<!--  gtag('config', 'YOUR_GA_ID');-->
<!--</script>-->
<!-- End Google Analytics -->
