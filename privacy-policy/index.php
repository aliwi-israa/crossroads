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
    <link rel="canonical" href="<?php echo $root;?>privacy-policy/">

    <!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Privacy Policy | Crossroads Dental Toronto">
	<meta property="og:description"
		content="Learn how Crossroads Dental in Toronto protects your personal information. Read our privacy policy covering data collection, security, and your rights.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Privacy Policy | Crossroads Dental Toronto">
	<meta name="twitter:description"
		content="Learn how Crossroads Dental in Toronto protects your personal information. Read our privacy policy covering data collection, security, and your rights.">
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
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h3 class="wow fadeInUp animated subheader">Privacy Policy</h3>
                            <h1 class="wow fadeInUp animated">Your Information, Protected</h1>
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
                                <li class="active">Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <section>
                    <div class="text-center mb-2 mb-md-3 mb-lg-4">
                        <div class="h-decor"></div>
                        <p>At Crossroads Dental, your privacy is important to us. This policy explains how we collect, use, disclose, and protect your personal information in compliance with Canadian privacy laws and dental practice standards.</p>
                    </div>
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <h3>1. Information We Collect</h3>
                        <p>We may collect personal information when you:</p>
                        <ul class="checked" >
                            <li>Fill out our online contact or appointment forms</li>
                            <li>Communicate with us by phone or email</li>
                            <li>Visit our website (via cookies or analytics tools)</li>
                        </ul>
                        <p>This may include your name, email address, phone number, health concerns, or insurance details.</p>

                        <h3>2. How We Use Your Information</h3>
                        <p>We use your information to:</p>
                        <ul class="checked">
                            <li>Respond to inquiries and schedule appointments</li>
                            <li>Provide dental care and maintain patient records</li>
                            <li>Communicate clinic updates or relevant notices</li>
                            <li>Improve website functionality and service experience</li>
                        </ul>
                        <p>We only collect the minimum information necessary and never use your data for purposes unrelated to your care without your consent.</p>
                        <h3>3. Data Security</h3>
                        <p>We take all reasonable steps to protect your information against unauthorized access, loss, misuse, or alteration. This includes secure databases, encrypted forms, and privacy-trained staff.</p>
                        <h3>4. Sharing Your Information</h3>
                        <p>We do not sell or share your personal information with third parties except:</p>
                        <ul class="checked">
                            <li>With your written consent</li>
                            <li>When required by law or legal process</li>
                            <li>With dental labs or specialists involved in your treatment</li>
                            <li>For secure digital services that support our operations (e.g., booking systems or payment processors)</li>
                        </ul>
                        <p>All partners are held to strict confidentiality standards.</p>
                        <h3>5. Website Cookies and Analytics</h3>
                        <p>Our site may use cookies and tools like Google Analytics to understand how visitors use our site. These tools collect anonymous data such as browser type and time spent on pages. You can disable cookies in your browser settings.</p>
                        <h3>6. Your Privacy Rights</h3>
                        <p>You have the right to:</p>
                        <ul class="checked">
                            <li>Access your personal information</li>
                            <li>Request corrections to your records</li>
                            <li>Withdraw consent where applicable</li>
                            <li>Ask how your data has been used</li>
                        </ul>
                        <p>To exercise these rights, please contact us using the details below.</p>
                        <h3>7. Policy Updates</h3>
                        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, with the effective date noted below.</p>
                        <p><strong>Effective Date:</strong> [Insert Date]</p>
                        <h3>8. Contact Us</h3>
                        <p>If you have questions or concerns about your privacy or how we handle your information, contact us at:</p>
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
                            <h3 class="wow fadeInUp animated text-center" data-wow-delay=".2s">Protecting Your Privacy Is Our Priority</h3>
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
