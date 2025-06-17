<?php require ($_SERVER['DOCUMENT_ROOT'].'/test/includes/config.php'); ?>
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

<body class="subpage">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-body.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/header.php';?>
    <div id="wrapper">
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="position-relative overflow-hidden" style="padding: 0; height: 500px;">
                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <source srcset="<?php echo $root; ?>assets/images/about/banner/about-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/banner/about-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/banner/about-1280.webp" alt="About Page Banner" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </picture>
                <div class="container z-1 text-center text-white about-header"
                    style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="row align-items-center" style="margin-top:100px;">
                        <div class="col-lg-12">
                            <h2 class="wow fadeInUp fs-4 mb-4" data-wow-delay=".2s">Meet the Team
                            </h2>
                            <h1 class="wow fadeInUp mb-5">Crossroads Dentists</h1>
                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            <p class="wow fadeInUp mb-4" data-wow-delay=".5s">
                                or call <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a>
                            </p>
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
                                <li><a href="index.php">About</a></li>
                                <li class="active">Our Dentists</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="<?php echo $root; ?>our-dentists/single-dr/"> 
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/1-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/1-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/1-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="team members">
                                    </picture>
                                </div>                                
                                <div class="abs w-100 start-0 bottom-0 z-3">
                                    <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                        <h4 class="mb-0">Dr. Sarah Bennett</h4>
                                        <p class="mb-2">Lead Dentist</p>
                                    </div>
                                </div>
                            </div>
                                                    </a>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="relative rounded-1 overflow-hidden">
                                <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                    <picture>
                                    <source srcset="<?php echo $root; ?>assets/images/team/2-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>assets/images/team/2-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>assets/images/team/2-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="team members">
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
                                    <img src="<?php echo $root; ?>assets/images/team/3-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="team members">
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
                                    <img src="<?php echo $root; ?>assets/images/team/4-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="team members">
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
    </div>
    </div>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
</body>

</html>