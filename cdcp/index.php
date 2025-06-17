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
            <section id="subheader" class="bg-color-op-1 text-center" style="background-size: cover; background-repeat: no-repeat;">
                <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                            <h3 class="wow fadeInUp animated subheader">We accept</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Canadian Dental Care Plan (CDCP)</h1>
                            
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
                                <li class="active">CDCP</li>
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
                                        <source srcset="<?php echo $root; ?>assets/images/cdcp/people-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/cdcp/people-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/cdcp/people-1280.webp" class="w-100 wow scaleIn  responsive-img"
                                            loading="lazy" alt="About us">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Canadian Dental Care
                                    Plan (CDCP)
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">CDCP</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Crossroads Dental is proud to announce that
                                    we accept the Canadian Dental Care Plan (CDCP)!
                                    <br/>
                                    The CDCP plan is designed to make quality dental care more accessible to individuals
                                    and families, offering comprehensive coverage for a range of dental services.<br/>
                                    Through this partnership, we are committed to providing top-notch dental care to all
                                    members of our community.</p>
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
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">We Listen, Care and Explain.
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    Apply for the CDCP and learn more about the program here!<br/> Using your CDCP benefits
                                    at Crossroads Dental is simple — just schedule an appointment and notify our staff
                                    that you plan to use these benefits during your visit, and we’ll guide you through
                                    the process.<br/><br/> Call
                                    <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a> or visit our website to book your visit!

                                    With the inclusion of the CDCP plan, we’re excited to expand our reach and serve
                                    even more members of our community.<br/><br/> Thank you for choosing us as your dental care
                                    provider.
                                </p>
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-12">
                                <div class=" rounded-1 overflow-hidden wow zoomIn  image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/about/p4-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/about/p4-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/about/p4-1280.webp" class="w-100 wow scaleIn  responsive-img"
                                            loading="lazy" alt="About us">
                                    </picture>
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