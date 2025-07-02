<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Healthy Smiles Start Here | Crossroads Dental Clinic in Toronto</title>
    <meta name="title" content="Healthy Smiles Start Here | Crossroads Dental Clinic in Toronto">
	<meta name="description"
		content="Visit Crossroads Dental Clinic in Toronto for complete dental care. Open 7 days a week, offering preventive, cosmetic, and emergency dentistry at Dundas & Bloor.">
	<meta name="author" content="Crossroads">
    <link rel="canonical" href="<?php echo $root;?>about/">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Healthy Smiles Start Here | Crossroads Dental Clinic in Toronto">
	<meta property="og:description"
		content="Visit Crossroads Dental Clinic in Toronto for complete dental care. Open 7 days a week, offering preventive, cosmetic, and emergency dentistry at Dundas & Bloor.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/about.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Healthy Smiles Start Here | Crossroads Dental Clinic in Toronto">
	<meta name="twitter:description"
		content="Visit Crossroads Dental Clinic in Toronto for complete dental care. Open 7 days a week, offering preventive, cosmetic, and emergency dentistry at Dundas & Bloor.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/about.png">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>

</head>
<body class= "subpage">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-body.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/header.php';?>
    <div id="wrapper">
            <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="bg-color-op-1 text-center" style="background-size: cover; background-repeat: no-repeat;">
                <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                            <h3 class="wow fadeInUp animated subheader">Discover who we are</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">About Crossroads Dental Clinic</h1>
                            
                        </div>
                    </div>
                </div>
            </section>
            <div class="section m-3">
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul class="crumb wow fadeInDown">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
		    </div>
<section>
    <div class="container">
      <div class="row g-4 gx-5 align-items-center">
        <div class="col-lg-6">
            <div class="col-sm-12">
                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                    <picture>
                    <source srcset="<?php echo $root; ?>assets/images/about/p1-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/p1-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/p1-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Healthy Smiles Start Here">
                    </picture>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
              <div class="me-lg-3">
                  <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Healthy Smiles Start Here</div>
                  <h2 class="wow fadeInUp" data-wow-delay=".2s">Welcome to Crossroads Dental Clinic</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">Your trusted dental care partner in the heart of Toronto, located at the crossroads of Dundas Street West and Bloor Street West. At Crossroads Dental, we believe every smile tells a story and we’re here to help yours shine. Proudly serving the vibrant Toronto community, we offer complete dental care for all ages in a modern, welcoming environment focused on comfort, technology, and results.</p>
                  <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
              </div>
        </div>
      </div>
    </div>
</section>

<section class="bg-color-op-1">
    <div class="container">
      <div class="row g-4 gx-5 align-items-center flipped-section">
        <div class="col-lg-6">
              <div class="me-lg-3">
                  <h2 class="wow fadeInUp" data-wow-delay=".2s">Why Choose Us?</h2>
                    <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                    <li class="mb-4">
                        <strong>Comprehensive Services for All Ages</strong><br>
                        <span class="fw-normal">
                        From preventive cleanings and cosmetic enhancements to root canals and emergencies, our skilled team is equipped to meet all your oral health needs.
                        </span>
                    </li>
                    <li class="mb-4">
                        <strong>Extended Hours for Your Convenience</strong><br>
                        <span class="fw-normal">
                        We’re open 7 days a week from 9 AM to 9 PM so you can prioritize your dental care—on your schedule.
                        </span>
                    </li>
                    <li class="mb-4">
                        <strong>Warm, Stress-Free Environment</strong><br>
                        <span class="fw-normal">
                        Our clinic is designed to make you feel at ease. We combine modern technology with a friendly, compassionate approach.
                        </span>
                    </li>
                    </ul>
                  <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
              </div>
        </div>
        <div class="col-lg-6">
            <div class="col-sm-12">
                <div class="rounded-1 overflow-hidden wow zoomIn image-container">                                
                    <picture>
                    <source srcset="<?php echo $root; ?>assets/images/about/p2-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/p2-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/p2-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Why Choose Us?">
                    </picture>
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
            <div class="col-sm-12">
                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                  <picture>
                    <source srcset="<?php echo $root; ?>assets/images/about/p3-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/p3-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/p3-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Our Mission">
                    </picture>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
              <div class="me-lg-3">
                  <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Mission</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">At Crossroads Dental Clinic, our mission is to build long-term relationships with every patient by providing exceptional, personalized care. We are committed to using the latest dental techniques and technology to enhance both your oral health and your confidence.</p>
                  <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
              </div>
        </div>
      </div>
    </div>
</section>

<section class="bg-color-op-1">
    <div class="container">
      <div class="row g-4 gx-5 align-items-center flipped-section">
        <div class="col-lg-6">
              <div class="me-lg-3">
                  <h2 class="wow fadeInUp" data-wow-delay=".2s">What We Offer</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">Explore our wide range of services, including:</p>
                  <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">

                    <li class="mb-4">
                        <a href="<?php echo $root; ?>services/preventative-dentistry/" class="services  text-blue"><strong>Preventive Dentistry:</strong></a> 
                        <span class="fw-normal service-item">Dental exams, cleanings, sealants, and fluoride treatments</span>
                    </li>

                    <li class="mb-4">
                        <a href="<?php echo $root; ?>services/general-dentistry" class="services  text-blue"><strong>General Dentistry:</strong></a> 
                        <span class="fw-normal service-item">Fillings, extractions, root canals, and pediatric care</span>
                    </li>

                    <li class="mb-4">
                        <a href="<?php echo $root; ?>services/cosmetic-dentistry/" class="services  text-blue"><strong>Cosmetic Dentistry:</strong></a> 
                        <span class="fw-normal service-item">Teeth whitening, veneers, bonding, and smile makeovers</span>
                    </li>

                    <li class="mb-4">
                        <a href="<?php echo $root; ?>services/invisalign/" class="services text-blue"><strong>Advanced Solutions:</strong></a> 
                        <span class="fw-normal service-item">Clear aligners, dental implants, crowns, and bridges</span>
                    </li>

                    <li class="mb-4">
                        <a href="<?php echo $root; ?>services/emergency-dentistry/" class="services text-blue"><strong>Emergency Care:</strong></a> 
                        <span class="fw-normal service-item">Same-day appointments for urgent dental needs</span>
                    </li>

                  </ul>
                  <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
              </div>
        </div>

        <div class="col-lg-6">
            <div class="col-sm-12">
                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                    <picture>
                        <source srcset="<?php echo $root; ?>assets/images/about/p4-480.webp" media="(max-width: 600px)">
                        <source srcset="<?php echo $root; ?>assets/images/about/p4-768.webp" media="(max-width: 992px)">
                        <img src="<?php echo $root; ?>assets/images/about/p4-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="What We Offer">
                    </picture>
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
            <div class="col-sm-12">
                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                    <picture>
                    <source srcset="<?php echo $root; ?>assets/images/about/p5-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/p5-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/p5-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Visit Us Today">
                    </picture>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
              <div class="me-lg-3">
                  <h2 class="wow fadeInUp" data-wow-delay=".2s">Visit Us Today</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">Conveniently located at the crossroads of Dundas Street West and Bloor Street West in Toronto, Crossroads Dental Clinic is here to care for your smile whether you're due for a check-up, interested in cosmetic improvements, or need emergency attention. 
                    <br><strong>New patients and families welcome. Book your appointment today and experience dentistry that puts you first.</strong></p>
                  <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
              </div>
        </div>
      </div>
    </div>
</section>
    
        </div>
    </div>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
</body>
</html>