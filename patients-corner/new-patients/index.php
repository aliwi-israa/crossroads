<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title>New Patients Welcome | Crossroads Dental Toronto</title>
    <meta name="title" content="New Patients Welcome | Crossroads Dental Toronto">
	<meta name="description" content="New to our clinic? Learn what to expect, how to prepare, and how to book your first visit at Crossroads Dental in Toronto.">
	<meta name="author" content="Crossroads">

    <!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="New Patients Welcome | Crossroads Dental Toronto">
	<meta property="og:description" content="New to our clinic? Learn what to expect, how to prepare, and how to book your first visit at Crossroads Dental in Toronto.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Patients-Corner.jpg">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="crossroadsdental.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="New Patients Welcome | Crossroads Dental Toronto">
	<meta name="twitter:description" content="New to our clinic? Learn what to expect, how to prepare, and how to book your first visit at Crossroads Dental in Toronto.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Patients-Corner.jpg">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
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
            
            <section id="subheader" class="bg-color-op-1 text-center">
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h3 class="wow fadeInUp animated subheader">New to Crossroads Dental?</h3>
                            <h1 class="wow fadeInUp animated">Welcome</h1>
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
                                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/patients/p1-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/patients/p1-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/patients/p1-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="New to Crossroads Dental?">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">New to Crossroads Dental?</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    We’re excited to welcome you to Crossroads Dental! Whether it’s been a while since your last visit or you’re starting fresh with us, our friendly team is here to make your experience smooth, comfortable, and positive from day one.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">What to Expect at Your First Visit</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    Your first appointment will include:
                                </p>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li class="mb-4">A complete dental exam and oral health review</li>
                                    <li class="mb-4">Digital X-rays (if needed)</li>
                                    <li class="mb-4">A personalized treatment plan and consultation</li>
                                    <li class="mb-4">Time to ask questions and share concerns</li>
                                </ul>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    We take time to get to know you and your goals, so your care is fully personalized.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-12">
                                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/patients/p2-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/patients/p2-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/patients/p2-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="What to Expect at Your First Visit">
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
                                        <img src="<?php echo $root; ?>assets/images/about/p3-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="What to Bring">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">What to Bring</h2>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".4s">
                                    <li class="mb-4">Valid ID and insurance card (if applicable)</li>
                                    <li class="mb-4">A list of any medications</li>
                                    <li class="mb-4">Any past dental records (if available)</li>
                                    <li class="mb-4">Completed new patient forms (or arrive early to fill them out)</li>
                                </ul>
                                <a href="[Insert link]" class="btn-main fx-slide wow fadeInUp" data-wow-delay=".6s"><span>Download Patient Forms</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Insurance and Payment</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    We accept most major dental insurance plans and will help you understand your coverage. If you’re not insured, we offer flexible payment options and can help you plan your treatment schedule accordingly.
                                </p>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    Ask us about:
                                </p>
                                <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".4s">
                                    <li class="mb-4">CDCP (Canadian Dental Care Program) coverage</li>
                                    <li class="mb-4">Direct billing</li>
                                    <li class="mb-4">Custom treatment estimates</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-12">
                                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/about/p4-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/about/p4-768.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/about/p4-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Insurance and Payment">
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
                            <img src="<?php echo $root; ?>assets/images/about/p5-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Book Your First Visit">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="me-lg-3">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Book Your First Visit</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Booking is easy:</p>
                    <ul class="ul-check text-dark fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                        <li class="mb-4">Call us at <a class = "text-blue"  href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a></li>
                        <li class="mb-4"><a href="<?php  echo $config['ClinicBookingLink']; ?>" class = "text-blue" data-hover=" Book Appointment"><span>Book online</span></a></li>
                        <li class="mb-4">Or use our <a  class = "text-blue" href="<?php echo $root; ?>contact/" >Contact Form</a></li>
                    </ul>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        We offer convenient hours, same-day appointments, and evening visits to fit your schedule.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Have questions?</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    <strong>Questions? We’re Here to Help</strong><br/> Check out our <a class= "text-blue" href="<?php echo $root; ?>faq/">[FAQs]</a> or give us a call. We’re always happy to walk you through your first visit, insurance concerns, or any special requests.
                    </p>
                    <a href="<?php echo $config['ClinicBookingLink']; ?>" class="btn-main fx-slide wow fadeInUp" data-wow-delay=".6s"><span>Book Your First Visit</span></a>
                    <p class="wow fadeInUp mt-4" data-wow-delay=".4s">
                        Start your journey to better oral health now. Book your first visit at Crossroads Dental today!
                    </p>
                          
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-12">
                                <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                    <picture>
                                        <source srcset="<?php echo $root; ?>assets/images/patients/new-480.webp" media="(max-width: 600px)">
                                        <source srcset="<?php echo $root; ?>assets/images/patients/new-780.webp" media="(max-width: 992px)">
                                        <img src="<?php echo $root; ?>assets/images/patients/new-1280.webp" class="w-100 wow scaleIn responsive-img" loading="lazy" alt="Have questions?">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
</body>
</html>
