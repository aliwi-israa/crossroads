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
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Patients-Corner.jpg">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="dentalook.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta name="twitter:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Patients-Corner.jpg">

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
                            <h2 class="wow fadeInUp fs-4 mb-4" data-wow-delay=".2s">The New Patient Experience
                            </h2>
                            <h1 class="wow fadeInUp mb-5">New Patients</h1>
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
                                <li class="active">New Patient</li>
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
                                <div class=" rounded-1 overflow-hidden wow zoomIn  image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/patients/new-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/patients/new-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/patients/new-1280.webp"
                                            class="w-100 wow scaleIn  responsive-img" loading="lazy" alt="About us">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">For Adults</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Starting your dental journey with us is
                                    simple. Here’s what you can expect during your first visit:
                                </p>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li class="mb-4">
                                        <strong>Friendly Scheduling</strong><br>
                                        <span class="fw-normal">
                                            Call us to connect with our team and book an appointment that fits your
                                            schedule.
                                        </span>
                                    </li>
                                    <li class="mb-4">
                                        <strong>Warm Welcome</strong><br>
                                        <span class="fw-normal">
                                            Our Victorian-era office, with antique furniture and a cozy fireplace,
                                            offers a tour to help you feel at home.
                                        </span>
                                    </li>
                                </ul>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
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
                                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s"></div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">For Children
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    We aim to make every child’s first dental visit positive and fun. Here’s how we
                                    ensure they feel comfortable:
                                </p>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li class="mb-4">
                                        <strong>Interactive Experience</strong><br>
                                        <span class="fw-normal">
                                            Kids can enjoy “rides” in the dental chair and help count their teeth.
                                            “Touch, listen, see, and feel” techniques introduce them to the dental
                                            environment.
                                        </span>
                                    </li>
                                    <li class="mb-4">
                                        <strong>Comprehensive Care</strong><br>
                                        <span class="fw-normal">
                                            A gentle exam, cleaning, fluoride treatment, and any necessary x-rays.
                                            Personalized oral hygiene instructions designed just for them.
                                        </span>
                                    </li>
                                </ul>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-12">
                                <div class=" rounded-1 overflow-hidden wow zoomIn  image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/patients/child-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/patients/child-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/patients/child-1280.webp" class="w-100 wow scaleIn  responsive-img"
                                            loading="lazy" alt="About us">
                                    </picture>
                                </div>
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
                                <div class=" rounded-1 overflow-hidden wow zoomIn  image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/about/p5-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/about/p5-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/about/p5-1280.webp"
                                            class="w-100 wow scaleIn  responsive-img" loading="lazy" alt="About us">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Why Choose Crossroads Dental?</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">We’re proud to offer:</p>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                <li class="mb-4">A warm, welcoming environment for patients of all ages.</li>
                                <li class="mb-4">Thorough, personalized care with a focus on prevention.</li>
                                <li class="mb-4">A dedicated team to guide you every step of the way.</li>
                                </ul>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
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