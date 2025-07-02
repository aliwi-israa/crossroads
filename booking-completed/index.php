<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>Booking Confirmed | Crossroads Dental Toronto</title>
    <meta name="title" content="Booking Confirmed | Crossroads Dental Toronto">
	<meta name="description"
		content="Thank you for booking with Crossroads Dental in Toronto. We’ve received your request and our team will be in touch soon to confirm your appointment.">
	<meta name="author" content="Crossroads">
    <link rel="canonical" href="<?php echo $root;?>booking-completed/">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Booking Confirmed | Crossroads Dental Toronto">
	<meta property="og:description"
		content="Thank you for booking with Crossroads Dental in Toronto. We’ve received your request and our team will be in touch soon to confirm your appointment.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Booking Confirmed | Crossroads Dental Toronto">
	<meta name="twitter:description"
		content="Thank you for booking with Crossroads Dental in Toronto. We’ve received your request and our team will be in touch soon to confirm your appointment.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>

</head>

<body class="subpage">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-body.php';?>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/header.php';?>
    <section>
	<div class="page-content" style="margin-top:100px;">
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">Thank you for booking an appointment at Crossroads Dental.</div>
					<h1 class="orange-color">We’re committed to providing you with the best experience possible.</h1>
					<div class="text-blue">You will receive an SMS/Text shortly with your appointment confirmation.<br>We look forward to seeing you!
					</div>
					<img src="<?php echo $root;?>assets/images/booking-completed.jpg" alt="Booking Completed">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<p class="mb-4">
							<div class="cta-book mb-5">
     							<a class="btn-main fx-slide btn-outline-white" href="<?php echo $root; ?>"><span>Back to Homepage</span></a>								
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
     </section>
	 <div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	 
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>

</html>