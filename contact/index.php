<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Contact Us | Crossroads Dental Toronto</title>
    <meta name="title" content="Contact Us | Crossroads Dental Toronto">
	<meta name="description"
		content="Need to book an appointment or have questions? Contact Crossroads Dental in Toronto. Open 7 days a week with evening and emergency hours. ">
	<meta name="author" content="Dentalook">
    <link rel="canonical" href="<?php echo $root;?>contact/">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Contact Us | Crossroads Dental Toronto">
	<meta property="og:description"
		content="Need to book an appointment or have questions? Contact Crossroads Dental in Toronto. Open 7 days a week with evening and emergency hours. ">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="dentalook.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Contact Us | Crossroads Dental Toronto">
	<meta name="twitter:description"
		content="Need to book an appointment or have questions? Contact Crossroads Dental in Toronto. Open 7 days a week with evening and emergency hours. ">
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
                            <h3 class="wow fadeInUp animated subheader">Reach Out</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Contact Us Today</h1>
                            
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
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="subtitle">Get In Touch</div>
                            <h2 class="wow fadeInUp">We are always ready to help you and answer your questions</h2>

                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place to do it. Please fill out the form below with your details and message, and we'll get back to you as soon as possible.</p>

                            <div class="row g-4 gx-5">
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fs-14 id-color fa-solid fa-clock me-2"></i>We're Open</div>
                                    Monday - Saturday 09.00 - 18.00
                                </div>
                                <div class="col-lg-6">
                                    <a href="<?php echo $config['ClinicMapLink'] ?: 'https://www.google.com/maps'; ?>" target="_blank" class="text-decoration-none d-block fw-bold">
                                        <i class="fa-solid fa-location-dot me-2 id-color fs-14"></i>
                                            <span class="text-dark"> Clinic Location</span>
                                        <div class="fw-normal ms-4"><?php echo $config['ClinicAddress'] ?: '2384 Dundas St W'; ?></div>
                                    </a> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa-solid fa-phone me-2 id-color fs-14"></i>Call Us Directly</div>
                                    <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a>
                                </div>

                                <div class="col-lg-6">
                                    <a href="mailto:<?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?>" class="text-dark text-decoration-none d-block fw-bold">
                                        <i class="fa fa-envelope me-2 id-color fs-14"></i>Send a Message
                                        <div class="fw-normal ms-4"><?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?></div>
                                    </a>     
                                </div>
                            </div>



                        </div>

                        <div class="col-lg-6">
                            <div class="p-40 bg-color-op-1 rounded-1">
                                <h3>Get In Touch</h3>
                                <iframe
                                src="https://api.leadconnectorhq.com/widget/form/YGflwVK0Fr1JQmshy5vs"
                                style="width:100%;height:100%;border:none;border-radius:3px"
                                id="inline-YGflwVK0Fr1JQmshy5vs" 
                                data-layout="{'id':'INLINE'}"
                                data-trigger-type="alwaysShow"
                                data-trigger-value=""
                                data-activation-type="alwaysActivated"
                                data-activation-value=""
                                data-deactivation-type="neverDeactivate"
                                data-deactivation-value=""
                                data-form-name="Contact us"
                                data-height="676"
                                data-layout-iframe-id="inline-YGflwVK0Fr1JQmshy5vs"
                                data-form-id="YGflwVK0Fr1JQmshy5vs"
                                title="Contact us"
                                    >
                            </iframe>
                            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
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