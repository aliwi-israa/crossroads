<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Meet Our Dentist | Crossroads Dental Toronto</title>
    <meta name="title" content="Meet Our Dentist | Crossroads Dental Toronto">
	<meta name="description"
		content="Get to know the lead dentist at Crossroads Dental in Toronto. Learn about their experience, approach to care, and commitment to patient comfort. ">
	<meta name="author" content="Crossroads">
    <link rel="canonical" href="<?php echo $root;?>our-dentists/single-dr/">

    <!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Meet Our Dentist | Crossroads Dental Toronto">
	<meta property="og:description"
		content="Get to know the lead dentist at Crossroads Dental in Toronto. Learn about their experience, approach to care, and commitment to patient comfort. ">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Meet Our Dentist | Crossroads Dental Toronto">
	<meta name="twitter:description"
		content="Get to know the lead dentist at Crossroads Dental in Toronto. Learn about their experience, approach to care, and commitment to patient comfort. ">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
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
                            <h3 class="wow fadeInUp animated subheader">Meet our Dentists</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Dr. Name in here</h1>
                            
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
                                <li><a href="index.php">Our Dentists</a></li>
                                <li class="active">Dr. Name in here</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="container mt-6">
                    <div class="row">
                        <div class="col-md">
                            <div class=" rounded-1 overflow-hidden wow zoomIn  image-container animated" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: zoomIn;">
                                <img src="<?php echo $root; ?>assets/images/team/1-1280.webp" class="img-fluid" alt="an image for one of the team">
                            </div>
                            <div class="mt-4 text-center">
                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                                <p class="wow fadeInUp mb-4" data-wow-delay=".5s">
                                    or call <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 mt-4 mt-lg-0">
                            <div class="doctor-info mb-3 mb-lg-4">
                                <div class="doctor-info-name">
                                    <h3>Dr. Name in here</h3>
                                    <div class="subtitle s2 mb-3 wow fadeInUp animated" data-wow-delay=".0s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                        <h6>Dentist</h6>
                                    </div>
                                </div>
                                
                            </div>
                            <p>
                            Dr. Name in here (a.k.a Dr. Fred) graduated from the University of Toronto where he obtained an Honours bachelor’s degree in biology.
                            </p><p>
                            During these formative years he developed a keen interest in clinical research and obtained a Master’s degree in laboratory medicine and pathobiology from the University of Toronto. He then made the decision to become a Dentist.
                            </p><p>
                            Dr. Fred obtained his Doctor of Dental Surgery degree from the University of Toronto and followed that education by owning and operating two dental practices and treating thousands of patients.
                            </p><p>
                            He is extremely excited to now be living in Barrie with his family and to meet and care for all the patients at <?php echo $config['ClinicName']; ?>.
                            </p><p>
                            In his free time, you can catch Dr. Fred watching the Habs play.
                            </p>

                            
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