<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Privacy Policy | Crossroads Dental Toronto</title>
    <meta name="title" content="Privacy Policy | Crossroads Dental Toronto">

	<meta name="description"
		content="Learn how Crossroads Dental in Toronto protects your personal information. Read our privacy policy covering data collection, security, and your rights.">
	<meta name="author" content="Crossroads">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta property="og:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
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
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h3 class="wow fadeInUp animated subheader">Terms & Conditions</h3>
                            <h1 class="wow fadeInUp animated">Welcome to Crossroads Dental</h1>
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
                                <li class="active">Terms & Conditions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <section>
                    <div class="text-center mb-2 mb-md-3 mb-lg-4">
                        <div class="h-decor"></div>
                        <p>By using this website, you agree to the terms outlined below. Please read them carefully. If you do not accept these terms, you should not access this site.</p>
                    </div>

                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <h3>1. Website Purpose</h3>
                        <p>The content on crossroadsdental.ca is for general information only. It is not intended as a substitute for professional dental advice, diagnosis, or treatment. Always consult directly with our team for care decisions.</p>
                        <h3>2. Intellectual Property Rights</h3>
                        <p>All website content—including text, images, graphics, logos, and design—is the property of Crossroads Dental or its content providers. It may not be copied, reproduced, distributed, or modified without prior written consent.</p>
                        <h3>3. Limitation of Liability</h3>
                        <p>Crossroads Dental does its best to ensure the accuracy of website content. However, we do not guarantee the completeness, reliability, or availability of any information. We are not liable for any loss or damage related to the use of this site or linked resources.</p>
                        <h3>4. Third-Party Links</h3>
                        <p>Our website may include links to external websites for your convenience. Crossroads Dental has no control over and assumes no responsibility for the content, policies, or practices of these third-party sites.</p>
                        <h3>5. Website Access and Use</h3>
                        <p>You agree not to misuse this website in any way, including by transmitting harmful code, attempting unauthorized access, or interfering with normal site operation. We reserve the right to limit or revoke access at any time.</p>
                        <h3>6. Privacy and Data Handling</h3>
                        <p>Your use of this site is also governed by our [Privacy Policy]. By submitting personal information through contact forms or booking tools, you consent to our handling of your data as described in that policy.</p>
                        <h3>7. Changes to Terms</h3>
                        <p>We may revise these Terms of Use at any time. Updates will be posted here, and continued use of the website signifies your agreement to any changes.
                        Last Updated: [Insert Date]</p>

                        <h3>8. Contact Information</h3>
                        <p>If you have questions or concerns about these terms, please contact us at:</p>
                        <ul class="checked">
                            <li> <a href="mailto:<?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?>">Email: <?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?></a></li>
                            <li><a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>">Phone: <?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a></li>
                            <li>
                            <a href="<?php echo $config['ClinicMapLink'] ?: 'https://www.google.com/maps'; ?>" target="_blank" class="text-decoration-none fw-bold">
                            <span class="fw-normal">Address:<?php echo $config['ClinicAddress'] ?: '2384 Dundas St W'; ?></span>
                            </a> 
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <section class="text-dark no-bottom overflow-hidden bg-gray ad-section" style="background-size: cover; background-repeat: no-repeat; padding-top:30px">
                <div class="col-lg-12">
                    <div class="me-lg-3">
                        <div class="py-5 my-5 me-lg-3">
                            <h3 class="wow fadeInUp animated text-center" data-wow-delay=".2s">Your Trust Matters to Us</h3>
                            <div class="banner-center-caption text-center">
                                <div class="banner-center-text2 mb-4 line-height">We are committed to safeguarding your personal information every step of the way.</div>
                                <a href="<?php echo $config['ClinicBookingLink']; ?>" class="btn-main fx-slide" data-hover=" Book Appointment"><span>Book Appointment</span></a>
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
