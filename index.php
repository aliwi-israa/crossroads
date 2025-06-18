<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Welcome to <?php echo $config['ClinicName']; ?>, Your Dental Home</title>
	<meta name="description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta name="author" content="Dentalook">
<link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/popup-480.webp">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta property="og:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="dentalook.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta name="twitter:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>

</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-body.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/header.php';?>
    <div id="wrapper">
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-intro" class="text-light no-top no-bottom relative overflow-hidden">
                <div class="relative">
                    <div class="abs abs-centered w-100 z-2">
                        <div class="container">
                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-lg-6">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="subtitle">Welcome to Crossroads Dental Clinic</div>
                                    <h1>Gentle, Personalized Dental Care in Toronto — For Confident Smiles at Every Age</h1>
                                    <a class="btn-main fx-slide menu_side_area m-0" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mh-800">
                        <div class="swiper wow scaleIn">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-inner" data-bgimage="url(<?php echo $root; ?>assets/images/homepage/slider/1.webp) center" loading="lazy">
                                        <div class="sw-overlay op-5"></div>
                                        <div class="gradient-edge-left z-2"></div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-inner" data-bgimage="url(<?php echo $root; ?>assets/images/homepage/slider/2.webp) center" loading="lazy">
                                        <div class="sw-overlay op-5"></div>
                                        <div class="gradient-edge-left z-2"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-inner" data-bgimage="url(<?php echo $root; ?>assets/images/homepage/slider/3.webp) center" loading="lazy">
                                        <div class="sw-overlay op-5"></div>
                                        <div class="gradient-edge-left z-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-dark text-light pt-50 pb-30">
                <div class="container relative">                    
                    <div class="row g-4 grid-divider">
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color fa-solid fa-phone"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Need Assistance? Call us Now!</h4>
                                    <p><a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>">Call: <?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color fa-solid fa-clock"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Opening Hours</h4>
                                    <p>Mon to Sat 09:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="d-flex justify-content-center">
                                <i class="fs-60 id-color fa fa-envelope" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h4 class="mb-0">Email Us</h4>
                                    <p><a href="mailto:<?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?>"><?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class=" rounded-1 overflow-hidden wow zoomIn">
                                            <picture>
                                            <source srcset="<?php echo $root; ?>assets/images/about/p1-480.webp" media="(max-width: 600px)">
                                            <source srcset="<?php echo $root; ?>assets/images/about/p1-768.webp" media="(max-width: 992px)">
                                            <img src="<?php echo $root; ?>assets/images/about/p1-1280.webp" class="w-100 wow scaleIn" alt="Woman having her teeth examined by a dentist">
                                            </picture>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="col-lg-12">
                                        <div class=" rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                            <picture>
                                            <source srcset="<?php echo $root; ?>assets/images/about/p2-480.webp" media="(max-width: 600px)">
                                            <source srcset="<?php echo $root; ?>assets/images/about/p2-768.webp" media="(max-width: 992px)">
                                            <img src="<?php echo $root; ?>assets/images/about/p2-1280.webp" class="w-100 wow scaleIn" data-wow-delay=".3s" alt="A dentist and her patient smiling at the result of the dentist work">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="me-lg-3">
                            <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">About Us</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Your Crossroads Clinic for Healthy, Confident Smiles</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Located at the crossroads of Dundas St. West and Bloor St. West, Crossroads Dental Clinic offers comprehensive, family-friendly dental care in the heart of Toronto. From preventative visits to smile makeovers, we’re here 7 days a week to support your oral health journey with compassion and convenience.</p>
                            <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                            <li>All-Ages Dental Services</li>
                            <li>7 Days a Week, 9AM–9PM</li>
                            <li>Comfortable Environment</li>
                            <li>Personalized, Friendly Care</li>
                            </ul>

                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <section class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Complete Care for Every Smile</h2>
                            <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp">From routine cleanings to advanced restorations, we provide personalized dental solutions for patients of all ages.</p>
                            <div class="spacer-single"></div>
                            <div class="spacer-half"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/examination.svg" class="w-70px mb-3 wow scaleIn" alt="an icon of a tooth gettting checked">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>General Dentistry</h4>
                                        <p>Complete oral care for every smile with cleanings, exams, and more.</p>
                                        <a class="btn-plus" href="service-general-dentistry.html">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/smile-makeover.svg" class="w-70px mb-3 wow scaleIn" alt="an icon of a smiling mouth">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Smile Makeover</h4>
                                        <p>Enhance your smile’s beauty with whitening, veneers, and more.</p>
                                        <a class="btn-plus" href="service-cosmetic-dentistry.html">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/children.svg" class="w-70px mb-3 wow scaleIn" alt="an icon of a teeth with a little face on it to represent the pdiatric dentistry">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Pediatric Dentistry</h4>
                                        <p>Gentle and fun dental care for kids to grow healthy, happy smiles.</p>
                                        <a class="btn-plus" href="service-pediatric-dentistry.html">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/implants.svg" class="w-70px mb-3 wow scaleIn" alt="an icon of a tooth being implanted">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Dental Implants</h4>
                                        <p>Repair and restore your teeth for lasting comfort and function.</p>
                                        <a class="btn-plus" href="service-restorative-dentistry.html">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5 text-center">
                            <a class="btn-secondary fx-slide" href="services.html"><span>View All Services</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Why Choose Our Dental Care</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Exceptional Service With a Personal Touch</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Choosing the right dental provider matters. We combine expert care, advanced technology, and a warm atmosphere to ensure every visit is comfortable, efficient, and tailored to your unique needs.</p>
                            <div class="border-bottom mb-4"></div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Experienced Dental</h5>
                                            <p class="mb-0">Skilled care backed by years of trusted dental experience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Advanced Technology</h5>
                                            <p class="mb-0">Modern tools ensure accurate and efficient treatments.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Personalized Treatment</h5>
                                            <p class="mb-0">Custom care plans made to fit your smile and lifestyle.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Family-Friendly</h5>
                                            <p class="mb-0">Welcoming space for kids, teens, adults, and seniors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0 me-3">Google Rating</h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-1 fw-bold">5.0</div>
                                                    <div class="d-flex fs-14 d-rating">
                                                        <i class="fa fa-solid fa-star me-1"></i>
                                                        <i class="fa fa-solid fa-star me-1"></i>
                                                        <i class="fa fa-solid fa-star me-1"></i>
                                                        <i class="fa fa-solid fa-star me-1"></i>
                                                        <i class="fa fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block image-container">
                                <picture>
                                <source srcset="<?php echo $root; ?>assets/images/homepage/p3-480.webp" media="(max-width: 600px)">
                                <source srcset="<?php echo $root; ?>assets/images/homepage/p3-768.webp" media="(max-width: 992px)">
                                <img src="<?php echo $root; ?>assets/images/homepage/p3-1280.webp" class="w-100 wow responsive-img" loading="lazy" alt="an image of a women setting in the patients chair at the dentist, smiling with a thumbs up">
                                </picture>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="bg-color-op-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Meet Our Dental Team</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Committed to Your Smile</h2>
                            <p class="wow fadeInUp">Our experienced dental team is here to make every visit positive and personalized. With gentle hands and caring hearts.</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/1-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/1-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/1-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="a dentist from the crossroads dental team">
                                    </picture>
                                </div>                                
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Sarah Bennett</h4>
                                        <p class="mb-2">Lead Dentist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/2-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/2-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/2-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="a dentist from the crossroads dental team">
                                    </picture>
                                </div>
                                
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Maya Lin</h4>
                                        <p class="mb-2">Cosmetic Dentist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/3-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/3-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/3-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="a dentist from the crossroads dental team">
                                    </picture>
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Michael Reyes</h4>
                                        <p class="mb-2">Pediatric Specialist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/4-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/4-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/4-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="a dentist from the crossroads dental team">
                                    </picture>
                                </div>
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. James Carter</h4>
                                        <p class="mb-2">Dental Hygienist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Everything You Need to Know</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently Asked Questions</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-a1">
                                        Why should I remove my wisdom teeth?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a1">
                                        Removing your wisdom teeth can prevent pain, and dental infections. Impacted wisdom teeth can cause serious oral health issues, including cysts and damage to adjacent teeth. Learn more about our Wisdom Teeth Extraction Services.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a2">
                                        What should I do if I break my tooth?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a2">
                                        If you break a tooth, rinse your mouth with warm water and apply a cold compress to reduce swelling. Save any pieces of the tooth in milk and contact us immediately for emergency dental care. Time is of the essence in these situations so a fast appointment is important. Visit our Emergency Dental Services for more information.                        </div>                                        
                                    <div class="accordion-section-title" data-tab="#accordion-a3">
                                        How can I get straight teeth without braces?                    
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a3">
                                        You can achieve straight teeth without traditional braces using clear aligners like Invisalign. These removable, virtually invisible aligners gradually straighten your teeth. Learn more about our Invisalign Treatment.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a4">
                                        I cant sleep because my tooth hurts?   
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a4">
                                        This type of pain indicates a hyper sensitive nerve that may need a root canal. Schedule a dental exam to identify and address the cause. Explore our dental examination service for relief.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a5">
                                        Why do my gums bleed when I brush?     
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a5">
                                        Bleeding gums when brushing can be a sign of gum disease, such as gingivitis, or improper brushing techniques. Regular dental check-ups can help identify and treat the cause. Check out our Gum care Treatment for more information.
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </section>                 
            <section class="bg-color text-light pt-40 pb-40">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-9">
                            <h3 class="mb-0 fs-32">Ready to book your dental care session?</h3>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a class="btn-main btn-line fx-slide" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/popup.php';?>
    </div>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
</body>
</html>