<?php
// Function to get meta information based on the current page
function get_meta_tags_for_page()
{
    // Get the current file name or page
    $page = basename($_SERVER['PHP_SELF'], ".php");

    // Define default meta information
    $meta = [
        'title' => 'E-waste Recyclers India - Sustainable Electronic Waste Management Solutions',
        'description' => 'E-waste Recyclers India provides responsible electronic waste recycling, data destruction, and IT asset management services for businesses and individuals across India.',
        'keywords' => 'e-waste recycling, electronic waste management, e-waste disposal, computer recycling, IT asset disposal',
        'canonical' => 'https://ewasterecyclersindia.com/'  // Default canonical URL
    ];

    // Page-specific meta information
    switch ($page) {
        case 'index':
            $meta['title'] = 'E-waste Recyclers India - Sustainable Electronic Waste Management Solutions';
            $meta['description'] = 'Responsible e-waste recycling services across India. Secure data destruction, IT asset management, and corporate recycling solutions for a greener tomorrow.';
            $meta['keywords'] = 'e-waste recycling india, electronic waste disposal, secure data destruction, IT asset management, corporate recycling programs';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/index.php';
            break;

        case 'about-us':
            $meta['title'] = 'About Us - E-waste Recyclers India | Our Mission & Values';
            $meta['description'] = 'Learn about E-waste Recyclers India\'s commitment to sustainable e-waste management, environmental responsibility, and our certified recycling processes.';
            $meta['keywords'] = 'e-waste recycling company, about e-waste recyclers india, electronic waste management mission, sustainable e-waste solutions';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/about-us.php';
            break;

        case 'e-waste-collection':
            $meta['title'] = 'E-waste Collection Services in India | Safe Electronic Disposal';
            $meta['description'] = 'Professional e-waste collection services for businesses and individuals. We collect, transport and recycle all types of electronic waste responsibly.';
            $meta['keywords'] = 'e-waste collection, electronic waste pickup, computer recycling service, e-waste disposal, electronics collection';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/e-waste-collection.php';
            break;

        case 'data-destruction':
            $meta['title'] = 'Secure Data Destruction Services | E-waste Recyclers India';
            $meta['description'] = 'Protect your sensitive information with our certified data destruction services. Secure wiping and physical destruction of storage media with verification certificates.';
            $meta['keywords'] = 'secure data destruction, hard drive shredding, data wiping services, media sanitization, certified data erasure';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/data-destruction.php';
            break;

        case 'it-asset-management':
            $meta['title'] = 'IT Asset Management & Disposition Services | E-waste Recyclers India';
            $meta['description'] = 'Complete IT asset management services including inventory, value recovery, secure recycling and compliance documentation for businesses.';
            $meta['keywords'] = 'IT asset management, ITAD services, IT equipment disposal, asset recovery services, IT lifecycle management';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/it-asset-management.php';
            break;

        case 'corporate-recycling':
            $meta['title'] = 'Corporate E-waste Recycling Programs | E-waste Recyclers India';
            $meta['description'] = 'Customized e-waste recycling programs for corporations. Meet environmental compliance requirements while showcasing your commitment to sustainability.';
            $meta['keywords'] = 'corporate e-waste recycling, business electronic waste management, company recycling program, corporate sustainability';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/corporate-recycling.php';
            break;

        case 'ewaste-awareness':
            $meta['title'] = 'E-waste Awareness & Education Programs | Environmental Responsibility';
            $meta['description'] = 'Learn about the environmental impact of electronic waste and how proper recycling can make a difference. Educational resources for businesses and communities.';
            $meta['keywords'] = 'e-waste awareness, electronic waste education, environmental impact of e-waste, recycling workshops';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/ewaste-awareness.php';
            break;

        case 'ewaste-recycling-delhi':
            $meta['title'] = 'E-waste Recycling Services in Delhi NCR | Electronics Disposal';
            $meta['description'] = 'Professional e-waste collection and recycling services in Delhi NCR region. Safe disposal of computers, printers, servers and all electronic equipment.';
            $meta['keywords'] = 'e-waste recycling delhi, electronic waste management ncr, computer recycling delhi, electronics disposal';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/ewaste-recycling-delhi.php';
            break;

        case 'ewaste-recycling-mumbai':
            $meta['title'] = 'E-waste Recycling Services in Mumbai | Electronics Disposal';
            $meta['description'] = 'Comprehensive e-waste recycling and disposal services in Mumbai. Helping businesses and individuals manage electronic waste responsibly.';
            $meta['keywords'] = 'e-waste recycling mumbai, electronic waste disposal mumbai, computer recycling services, IT asset disposal mumbai';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/ewaste-recycling-mumbai.php';
            break;

        case 'ewaste-recycling-bangalore':
            $meta['title'] = 'E-waste Recycling Services in Bangalore | Electronics Disposal';
            $meta['description'] = 'Environmentally responsible e-waste recycling services in Bangalore. Secure collection, data destruction and recycling of all electronic equipment.';
            $meta['keywords'] = 'e-waste recycling bangalore, electronic waste management bangalore, IT equipment recycling, computer disposal bangalore';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/ewaste-recycling-bangalore.php';
            break;

        case 'contact-us':
            $meta['title'] = 'Contact E-waste Recyclers India | Request a Quote';
            $meta['description'] = 'Get in touch with our e-waste recycling experts. Request a quote for e-waste collection, data destruction, or IT asset management services.';
            $meta['keywords'] = 'contact e-waste recyclers, e-waste collection quote, electronic recycling services contact, e-waste management inquiry';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/contact-us.php';
            break;

        case 'videos':
            $meta['title'] = 'E-waste Recycling Videos | Recycling Process & Facility Tours';
            $meta['description'] = 'Watch videos about our e-waste recycling processes, facility tours, and educational content about responsible electronic waste management.';
            $meta['keywords'] = 'e-waste recycling videos, electronic waste processing, recycling facility tour, e-waste educational videos';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/videos.php';
            break;

        case 'images':
            $meta['title'] = 'E-waste Recycling Facility & Process Images | E-waste Recyclers India';
            $meta['description'] = 'View photos of our e-waste recycling facility, team, and processes. See how we responsibly handle electronic waste from collection to recycling.';
            $meta['keywords'] = 'e-waste recycling images, electronic waste management photos, recycling facility pictures, e-waste processing images';
            $meta['canonical'] = 'https://ewasterecyclersindia.com/images.php';
            break;

        default:
            // Keep default meta
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
<link rel="icon" type="image/png" href="https://www.ewasterecyclersindia.com/images/favicon-32x32.png">
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