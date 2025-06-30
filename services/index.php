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
    <meta name="author" content="Crossroads">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Dental Home">
    <meta property="og:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="crossroadsdental.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Dental Home">
    <meta name="twitter:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/1-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/1-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/1-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/1-1280.webp 1280w" imagesizes="100vw">
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/2-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/2-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/2-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/2-1280.webp 1280w" imagesizes="100vw">
    <link rel="preload" as="image" href="<?php echo $root; ?>assets/images/homepage/slider/3-1280.webp" imagesrcset="<?php echo $root; ?>assets/images/homepage/slider/3-480.webp 480w, <?php echo $root; ?>assets/images/homepage/slider/3-768.webp 768w, <?php echo $root; ?>assets/images/homepage/slider/3-1280.webp 1280w" imagesizes="100vw">
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
                            <h3 class="wow fadeInUp animated subheader">Discover our treatment options</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Dental Services</h1>
                            
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
                                <li class="active">Our Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
				<div class="container">
					<div class="text-center mb-2  mb-md-3 mb-lg-4">
						<h1>Solutions for Every Smile</h1>
						<div class="h-decor"></div>
						<div class="text-center mt-4">
							<p>
								Seeking top-tier dental care? Look no further than <?php echo $config['ClinicName']; ?>.
								<br>Our comprehensive services are tailored to enhance your oral health and confidence.
							</p>
						</div>
					</div>
				</div>
            <section>
                <div class="container">
                    <div class="row justify-content-center prices-carousel js-prices-carousel mt-2" style="row-gap:35px;">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/preventative-dentistry/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/icons/oral-hygiene.svg" alt="Preventative dentistry" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/preventative-dentistry/">Preventative Dentistry</a></h4>
                                <div class="mb-4">We aim to deliver top-notch preventative dentistry for your lasting oral well-being.
                                    <ul class="ul-check fw-500 mt-3 wow fadeInUp">
                                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/dental-exam/">Dental Examination</a></li>
                                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/gum-care/">Gum Care & Teeth Cleaning</a></li>
                                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/sealants/">Dental Sealants</a></li>
                                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/fluoride/">Fluoride Treatments</a></li>
                                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/oral-cancer-screening/">Oral Cancer Screening</a></li>
                                    </ul>
                                </div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/preventative-dentistry">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- General Dentistry -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/general-dentistry/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/homepage/icons/examination.svg" alt="General Dentistry" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/general-dentistry/">General Dentistry</a></h4>
                                <div class="mb-4">We restore your smile with expert restorative dental care.
                                    <ul class="ul-check fw-500 mt-3 wow fadeInUp">
                                        <li><a href="<?php echo $root; ?>services/general-dentistry/fillings/">Dental Fillings</a></li>
                                        <li><a href="<?php echo $root; ?>services/general-dentistry/root-canal/">Root Canal</a></li>
                                        <li><a href="<?php echo $root; ?>services/general-dentistry/extractions/">Extractions</a></li>
                                        <li><a href="<?php echo $root; ?>services/general-dentistry/crowns-bridges/">Crowns & Bridges</a></li>
                                        <li><a href="<?php echo $root; ?>services/general-dentistry/pediatric/">Paediatric Dentistry</a></li>
                                    </ul>
                                </div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/general-dentistry">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Cosmetic Dentistry -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/cosmetic-dentistry/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/icons/icons-veneers-cosmetic.svg" alt="Cosmetic Dentistry" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/cosmetic-dentistry/">Cosmetic Dentistry</a></h4>
                                <div class="mb-4">Discover your dream smile with <?php echo $config['ClinicName']; ?>'s cosmetic services, including whitening, veneers, and more.
                                    <ul class="ul-check fw-500 mt-3 wow fadeInUp">
                                        <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/teeth-whitening/">Teeth Whitening</a></li>
                                        <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/bonding/">Dental Bonding</a></li>
                                        <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/veneers/">Veneers</a></li>
                                        <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/smile-makeover/">Smile Makeover</a></li>
                                    </ul>
                                </div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/cosmetic-dentistry">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Dental Implants -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/dental-implants/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/homepage/icons/implants.svg" alt="Dental Implants" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/dental-implants/">Dental Implants</a></h4>
                                <div class="mb-4">Achieve a complete, beautiful smile with our expert dental implant solutions, bringing back your confidence and joy.</div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/dental-implants">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Clear Aligners -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/invisalign/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/icons/icons-guards.svg" alt="Clear Aligners" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/invisalign/">Clear Aligners</a></h4>
                                <div class="mb-4">Discover a straighter smile without the hassle of braces with Clear Aligners, available at <?php echo $config['ClinicName']; ?>.</div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/invisalign">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Emergency Dental Care -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="mt-2 border-gray bg-white h-100 p-40 rounded-1 services-imgs">
                                <div class="mb-4"><a href="<?php echo $root; ?>services/emergency-dentistry/"><img class="box-icon"
                                            src="<?php echo $root; ?>assets/images/icons/icons-dental-emergencies.svg" alt="Emergency Dental Care" width="70" height="79"></a></div>
                                <h4 class="wow fadeInUp" data-wow-delay=".2s"><a class="text-blue" href="<?php echo $root; ?>services/emergency-dentistry/">Emergency Dental Care</a></h4>
                                <div class="mb-4">Swift emergency dental care available in Barrie for prompt relief from dental discomfort and emergencies.</div>
                                <a class="btn-plus" href="<?php echo $root; ?>services/emergency-dentistry">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
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