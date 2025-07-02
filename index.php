<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
<?php include $_SERVER['DOCUMENT_ROOT'].$webPath.'/assets/css/critical-css.css'; ?>
</style>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Crossroads Dental Toronto | Family, Cosmetic & Emergency Dentistry</title>
    <meta name="title" content="Crossroads Dental Toronto | Family, Cosmetic & Emergency Dentistry">
    <meta name="description"
        content="Looking for a dentist in Toronto? Crossroads Dental offers complete care! Open 7 days a week for family, cosmetic, and emergency dental services. ">
    <meta name="author" content="Crossroads">
    <link rel="canonical" href="<?php echo $root;?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crossroads Dental Toronto | Family, Cosmetic & Emergency Dentistry">
    <meta property="og:description"
        content="Looking for a dentist in Toronto? Crossroads Dental offers complete care! Open 7 days a week for family, cosmetic, and emergency dental services. ">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="crossroadsdental.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Crossroads Dental Toronto | Family, Cosmetic & Emergency Dentistry">
    <meta name="twitter:description"
        content="Looking for a dentist in Toronto? Crossroads Dental offers complete care! Open 7 days a week for family, cosmetic, and emergency dental services. ">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/1-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/1-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/1-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/1-1280.webp 1280w" imagesizes="100vw">
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/2-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/2-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/2-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/2-1280.webp 1280w" imagesizes="100vw">
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/3-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/3-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/3-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/3-1280.webp 1280w" imagesizes="100vw">

    <style>

.slider-contact .text h2 {
    font-size:20px;
}
.swiper-inner {
    aspect-ratio: 16 / 9;
    background-size: cover;
    background-position: center;
}
.img-container {
    aspect-ratio: 4 / 3;
    overflow: hidden;
}

.img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}



@media (max-width: 1024px) {
    .swiper-inner {
        height: 100vh;
    }
}

@media (max-width: 768px) {
    .swiper-inner {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }
    .swiper-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .swiper-inner {
        border: black solid;
        width: 800px;
        height: 800px;
    }
}
@media (max-width: 480px) {
    .swiper-inner {
        height: inherit;
    }
}
    </style>
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
                                    <div class="subtitle intro">Welcome to Crossroads Dental Clinic</div>
                                    <h1>Gentle, Personalized Dental Care in Toronto — For Confident Smiles at Every Age
                                    </h1>
                                    <a class="btn-main fx-slide menu_side_area m-0"
                                        href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book
                                            Appointment</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div class="swiper wow scaleIn home-slider" id="homeSwiper">
                                 <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-inner" 
                                        data-bg-sm="<?php echo $root; ?>assets/images/homepage/slider/1-480.webp"
                                        data-bg-md="<?php echo $root; ?>assets/images/homepage/slider/1-768.webp"
                                        data-bg-lg="<?php echo $root; ?>assets/images/homepage/slider/1-1280.webp"
                                        fetchpriority="high">
                                    <div class="sw-overlay op-5"></div>
                                    <div class="gradient-edge-left z-2"></div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-inner"
                                        data-bg-sm="<?php echo $root; ?>assets/images/homepage/slider/2-480.webp"
                                        data-bg-md="<?php echo $root; ?>assets/images/homepage/slider/2-768.webp"
                                        data-bg-lg="<?php echo $root; ?>assets/images/homepage/slider/2-1280.webp">
                                        <div class="sw-overlay op-5"></div>
                                        <div class="gradient-edge-left z-2"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">

                                    <div class="swiper-inner"
                                        data-bg-sm="<?php echo $root; ?>assets/images/homepage/slider/3-480.webp"
                                        data-bg-md="<?php echo $root; ?>assets/images/homepage/slider/3-768.webp"
                                        data-bg-lg="<?php echo $root; ?>assets/images/homepage/slider/3-1280.webp">
                                        <div class="sw-overlay op-5"></div>
                                        <div class="gradient-edge-left z-2"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-dark text-light pt-50 pb-30 slider">
                <div class="container relative slider-contact">
                    <div class="row g-4 grid-divider slider-contact">
                        <div class="col-lg-4 col-md-6 mb-sm-30 wrapper">
                            <div class="d-flex align-items-center icons">
                                <i class="id-color fa-solid fa-phone fs-1 fs-md-2 fs-lg-3"></i>
                                <div class="ms-3 text">
                                    <h2 class="mb-0"><span class="call-text">Need Dental Assistance? </span><span>Call us Now!</span></h2>
                                    <p><a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>">Call: <?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30 wrapper">
                            <div class="d-flex align-items-center icons">
                                <i class="id-color fa-solid fa-clock fs-1 fs-md-2 fs-lg-3"></i>
                                <div class="ms-3 text">
                                    <h4 class="mb-0">Opening Hours</h4>
                                    <p>Mon to Sat 09:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-sm-30 wrapper">
                            <div class="d-flex align-items-center icons">
                                <i class="id-color fa fa-envelope fs-1 fs-md-2 fs-lg-3"></i>
                                <div class="ms-3 text">
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
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="spacer-single sm-hide"></div>
                                        <div class="col-lg-12">
                                            <div class="img-container rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                                <picture>
                                                    <source srcset="<?php echo $root; ?>assets/images/about/p2-480.webp"
                                                        media="(max-width: 600px)">
                                                    <source srcset="<?php echo $root; ?>assets/images/about/p2-768.webp"
                                                        media="(max-width: 992px)">
                                                    <img src="<?php echo $root; ?>assets/images/about/p2-1280.webp"
                                                        class="w-100 wow scaleIn" data-wow-delay=".3s"
                                                        alt="Your Crossroads Clinic for Healthy, Confident Smiles">
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
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Your Crossroads Clinic for Healthy,
                                    Confident Smiles</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Located at the crossroads of Dundas St.
                                    West and Bloor St. West, Crossroads Dental Clinic offers comprehensive,
                                    family-friendly dental care in the heart of Toronto. From preventative visits to
                                    smile makeovers, we’re here 7 days a week to support your oral health journey with
                                    compassion and convenience.</p>
                                <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li>All-Ages Dental Services</li>
                                    <li>7 Days a Week, 9AM–9PM</li>
                                    <li>Comfortable Environment</li>
                                    <li>Personalized, Friendly Care</li>
                                </ul>

                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book
                                        Appointment</span></a>
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
                            <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp">From routine cleanings to advanced
                                restorations, we provide personalized dental solutions for patients of all ages.</p>
                            <div class="spacer-single"></div>
                            <div class="spacer-half"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1 services-imgs">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/examination.svg"
                                        class="w-70px mb-3 wow scaleIn" alt="General Dentistry" width="70" height="79" style=" height: auto;">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>General Dentistry</h4>
                                        <p>Complete oral care for every smile with cleanings, exams, and more.</p>
                                        <a class="btn-plus" href="<?php echo $root; ?>services/general-dentistry">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1 services-imgs">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/smile-makeover.svg"
                                        class="w-70px mb-3 wow scaleIn" alt="Smile Makeover" width="70" height="79" style="height: auto;">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Smile Makeover</h4>
                                        <p>Enhance your smile’s beauty with whitening, veneers, and more.</p>
                                        <a class="btn-plus" href="<?php echo $root; ?>services/cosmetic-dentistry/">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1 services-imgs">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/children.svg"
                                        class="w-70px mb-3 wow scaleIn"
                                        alt="Pediatric Dentistry" width="70" height="79" style=" height: auto;">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Pediatric Dentistry</h4>
                                        <p>Gentle and fun dental care for kids to grow healthy, happy smiles.</p>
                                        <a class="btn-plus" href="<?php echo $root; ?>services/general-dentistry/pediatric/">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hover">
                                <div class="bg-white h-100 p-40 rounded-1 services-imgs">
                                    <img src="<?php echo $root; ?>assets/images/homepage/icons/implants.svg"
                                        class="w-70px mb-3 wow scaleIn" alt="Dental Implants" width="70" height="79" style=" height: auto;">
                                    <div class="relative mt-4 wow fadeInUp">
                                        <h4>Dental Implants</h4>
                                        <p>Repair and restore your teeth for lasting comfort and function.</p>
                                        <a class="btn-plus" href="<?php echo $root; ?>services/dental-implants/">
                                            <i class="fa fa-plus"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5 text-center">
                            <a class="btn-secondary fx-slide" href="<?php echo $root; ?>services/"><span>View All Services</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Why Choose Our Dental Care
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Exceptional Service With a Personal Touch</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Choosing the right dental provider matters. We
                                combine expert care, advanced technology, and a warm atmosphere to ensure every visit is
                                comfortable, efficient, and tailored to your unique needs.</p>
                            <div class="border-bottom mb-4"></div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Experienced Dental</h5>
                                            <p class="mb-0">Skilled care backed by years of trusted dental experience.
                                            </p>
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
                            <div
                                class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block image-container">
                                <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/homepage/p3-480.webp"
                                        media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/homepage/p3-768.webp"
                                        media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/homepage/p3-1280.webp"
                                        class="w-100 wow responsive-img" loading="lazy"
                                        alt="Exceptional Service With a Personal Touch">
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
                            <p class="wow fadeInUp">Our experienced dental team is here to make every visit positive and
                                personalized. With gentle hands and caring hearts.</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn doctors-imgs">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/team/1-480.webp"
                                            media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/team/1-768.webp"
                                            media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/team/1-1280.webp"
                                            class="w-100 wow scaleIn" loading="lazy"
                                            alt="Dr. Sarah Bennett"
                                            width="1280" height="1728" style="width: 100%; height: auto;">
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
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn doctors-imgs">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/team/2-480.webp"
                                            media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/team/2-768.webp"
                                            media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/team/2-1280.webp"
                                            class="w-100 wow scaleIn" loading="lazy"
                                            alt="Dr. Maya Lin"
                                            width="1280" height="1728" style="width: 100%; height: auto;">
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
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn doctors-imgs">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/team/3-480.webp"
                                            media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/team/3-768.webp"
                                            media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/team/3-1280.webp"
                                            class="w-100 wow scaleIn" loading="lazy"
                                            alt="Dr. Michael Reyes"
                                            width="1280" height="1728" style="width: 100%; height: auto;">
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
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn doctors-imgs">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/team/4-480.webp"
                                            media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/team/4-768.webp"
                                            media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/team/4-1280.webp"
                                            class="w-100 wow scaleIn" loading="lazy"
                                            alt="Dr. James Carter"
                                            width="1280" height="1728" style="width: 100%; height: auto;">
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
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Everything You Need to Know
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently Asked Questions</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-a1">
                                        Why should I remove my wisdom teeth?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a1">
                                        Removing your wisdom teeth can prevent pain, and dental infections. Impacted
                                        wisdom teeth can cause serious oral health issues, including cysts and damage to
                                        adjacent teeth. Learn more about our Wisdom Teeth Extraction Services.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a2">
                                        What should I do if I break my tooth?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a2">
                                        If you break a tooth, rinse your mouth with warm water and apply a cold compress
                                        to reduce swelling. Save any pieces of the tooth in milk and contact us
                                        immediately for emergency dental care. Time is of the essence in these
                                        situations so a fast appointment is important. Visit our Emergency Dental
                                        Services for more information. </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a3">
                                        How can I get straight teeth without braces?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a3">
                                        You can achieve straight teeth without traditional braces using clear aligners
                                        like Invisalign. These removable, virtually invisible aligners gradually
                                        straighten your teeth. Learn more about our Invisalign Treatment.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a4">
                                        I cant sleep because my tooth hurts?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a4">
                                        This type of pain indicates a hyper sensitive nerve that may need a root canal.
                                        Schedule a dental exam to identify and address the cause. Explore our dental
                                        examination service for relief.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a5">
                                        Why do my gums bleed when I brush?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a5">
                                        Bleeding gums when brushing can be a sign of gum disease, such as gingivitis, or
                                        improper brushing techniques. Regular dental check-ups can help identify and
                                        treat the cause. Check out our Gum care Treatment for more information.
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
                            <a class="btn-main btn-line fx-slide"
                                href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
        const bgElements = document.querySelectorAll('.swiper-inner');

        bgElements.forEach(el => {
            let bg;

            if (window.matchMedia("(max-width: 480px)").matches) {
                bg = el.dataset.bgSm;
            } else if (window.matchMedia("(max-width: 768px)").matches) {
                bg = el.dataset.bgMd;
            } else {
                bg = el.dataset.bgLg;
            }

            el.style.backgroundImage = `url(${bg})`;
            el.style.backgroundSize = 'cover';
            el.style.backgroundPosition = 'center';
        });

        const homeSwiper = new Swiper('#homeSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            lazy: true,
        });
    });
</script>
</body>
</html>