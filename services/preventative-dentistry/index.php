<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Preventive Dentistry in Toronto | Crossroads Dental</title>
    <meta name="title" content="Preventive Dentistry in Toronto | Crossroads Dental">
    <meta name="description"
        content="Protect your smile with expert preventive dental care at Crossroads Dental in Toronto. Book your cleaning, exam, or oral cancer screening today.">
    <meta name="author" content="Dentalook">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta property="og:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Preventative-Dentistry.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="dentalook.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta name="twitter:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Preventative-Dentistry.png">

    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/structured-data.php';?>

</head>


<body class="subpage">
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-body.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/header.php';?>
    <div id="wrapper">
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="bg-color-op-1 text-center"
                style="background-size: cover; background-repeat: no-repeat;">
                <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                            <h3 class="wow fadeInUp subheader">Services</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                Preventive Dentistry at Crossroads Dental</h1>

                        </div>
                    </div>
                </div>
            </section>
            <div class="section m-3">
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul class="crumb wow fadeInDown">
                                <li><a href="<?php echo $root; ?>">Home</a></li>
                                <li><a href="<?php echo $root; ?>services/">Our Services</a></li>
                                <li class="active">Preventative Dentistry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <section class="pb-0">
                <div class="container mb-4">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-md d-none d-md-block">
                            <ul class="services-nav flex-column flex-nowrap d-none d-md-block">
                                <li class="nav-item">
                                    <a class="nav-link parent-category" href="#submenu1" data-toggle="collapse"
                                        data-target="#submenu1" aria-expanded="false"
                                        style="color: var(--primary-color);"><span>Preventative
                                            Dentistry</span><i class="fas fa-chevron-down rotate-icon"></i></a>
                                    <div class="collapse" id="submenu1">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/preventative-dentistry/dental-exam/"><i
                                                        class="fas fa-arrow-right"></i>Dental Examination</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/preventative-dentistry/gum-care/"><i
                                                        class="fas fa-arrow-right"></i>Gum Care & Teeth Cleaning</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/preventative-dentistry/sealants/"><i
                                                        class="fas fa-arrow-right"></i>Dental Sealants</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/preventative-dentistry/fluoride/"><i
                                                        class="fas fa-arrow-right"></i>Fluoride Treatments</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="<?php echo $root; ?>services/preventative-dentistry/oral-cancer-screening/"><i
                                                        class="fas fa-arrow-right"></i>Oral Cancer Screening</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link parent-category" href="#submenu2" data-toggle="collapse"
                                        data-target="#submenu2" aria-expanded="false"><span>General Dentistry</span> <i
                                            class="fas fa-chevron-down rotate-icon"></i></a>
                                    <div class="collapse" id="submenu2">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/general-dentistry/fillings/"><i
                                                        class="fas fa-arrow-right"></i>Dental Fillings</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/general-dentistry/root-canal/"><i
                                                        class="fas fa-arrow-right"></i>Root Canal</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/general-dentistry/extractions/"><i
                                                        class="fas fa-arrow-right"></i>Extractions</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="services/<?php echo $root; ?>services/general-dentistry/crowns-bridges/"><i
                                                        class="fas fa-arrow-right"></i>Crowns & Bridges</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/general-dentistry/pediatric/"><i
                                                        class="fas fa-arrow-right"></i>Paediatric Dentistry</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $root; ?>services/emergency-dentistry/">Emergency Dentistry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link parent-category" href="#submenu3" data-toggle="collapse"
                                        data-target="#submenu3" aria-expanded="false"><span>Cosmetic Dentistry </span><i
                                            class="fas fa-chevron-down rotate-icon"></i></a>
                                    <div class="collapse" id="submenu3">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/teeth-whitening/"><i
                                                        class="fas fa-arrow-right"></i>Whitening</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/veneers/"><i
                                                        class="fas fa-arrow-right"></i>Veneers</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/bonding/"><i
                                                        class="fas fa-arrow-right"></i>Dental Bonding</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="<?php echo $root; ?>services/cosmetic-dentistry/smile-makeover/"><i
                                                        class="fas fa-arrow-right"></i>Smile Makeover</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $root; ?>services/invisalign/">Clear Aligners (Invisalign)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $root; ?>services/dental-implants/">Dental
                                        Implants</a>
                                </li>
                            </ul>
                            <div class="question-box mt-3 bg-gray">
                                <h4 class="question-box-title">Connect with our clinical team to get
                                    the answers you need </h4>
                                <p>If you’d like to discuss your options, costs, and get more information about our
                                    services, complete this short form, and we’ll give you a call back.</p>
                                <div id="inline-hVKuv45TUa57ScoGZiV7-div" class="ep-iFrameContainer"
                                    style="border-radius: 3px; display: block;">
                                    <div id="inline-hVKuv45TUa57ScoGZiV7-wrapper" class="ep-wrapper"
                                        style="border-radius: 3px;"><iframe
                                            src="https://api.leadconnectorhq.com/widget/form/hVKuv45TUa57ScoGZiV7"
                                            style="width: 100%; height: 813px; border: none; border-radius: 3px; overflow: auto; display: block;"
                                            id="inline-hVKuv45TUa57ScoGZiV7" data-layout="{'id':'INLINE'}"
                                            data-trigger-type="alwaysShow" data-trigger-value=""
                                            data-activation-type="alwaysActivated" data-activation-value=""
                                            data-deactivation-type="neverDeactivate" data-deactivation-value=""
                                            data-form-name="Ask an Expert" data-height="668"
                                            data-layout-iframe-id="inline-hVKuv45TUa57ScoGZiV7"
                                            data-form-id="hVKuv45TUa57ScoGZiV7" title="Ask an Expert" scrolling="yes">
                                        </iframe></div>
                                </div>
                                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                            </div>
                            <div class="office-hours mt-3">
                                <div class="contact-box contact-box-1">
                                    <h5 class="contact-box-title"><i class="icon-clock"></i> Office Hours</h5>
                                    <table class="row-table">
                                        <tbody>
                                            <tr>
                                                <td><i>Monday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Tuesday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Wednesday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Thursday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Friday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Saturday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                            <tr>
                                                <td><i>Sunday</i></td>
                                                <td>9:00am - 9:00pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- Main Content -->
                        <div class="col-md-9">
                            <div class="title-wrap">
                                <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">
                                    <a href="#"><i class="fa-solid fa-arrow-left-long"></i> Services</a>
                                </div>
                                <h2 class="id-color">Is Your Smile Getting the Preventive Care It Needs?</h2>
                                <p>At Crossroads Dental, we believe prevention is the foundation of lifelong oral
                                    health. Our preventive dental services are designed to detect problems early,
                                    maintain healthy teeth and gums, and help you avoid costly or invasive treatments
                                    later on.</p>
                            </div>
                            <div class="educational-video mb-4">
                                <h3>How Implants Work</h3>
                                <div class="video-container">

                                    <div class="video">
                                        <a href="//fast.wistia.net/embed/iframe/7zejtgjz1m?popover=true" class="wistia-popover[height=360,playerColor=8c8c8c,width=640]"><img src="https://www.deardoctor.com/images/video-gallery/play/dental-sealants.jpg" width="650" alt=""></a>
                                        <script charset="ISO-8859-1"
                                            src="//fast.wistia.com/assets/external/popover-v1.js"></script>
                                    </div>
                                </div>
                            </div>
                            <section class="pt-0 pb-0">
                                <div class="service-items">
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What is Preventive Dentistry?</h3>
                                    <p>Preventive dentistry focuses on keeping your mouth healthy through regular care,
                                        early intervention, and patient education. It includes routine visits,
                                        screenings, and treatments that stop dental issues before they start or worsen.
                                    </p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Our Preventive Services</h3>
                                    <p>We offer a full range of preventive services tailored to your needs, including:
                                    </p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4"><strong>Comprehensive Oral Exams:</strong> Thorough check-ups
                                            to detect cavities, gum disease, and other concerns. Our exams include
                                            digital X-rays, bite evaluations, and assessments of existing dental work.
                                        </li>
                                        <li class="mb-4"><strong>Professional Cleanings:</strong> Our hygienists remove
                                            plaque and tartar from areas that brushing alone can’t reach, helping to
                                            prevent gum disease and tooth decay.</li>
                                        <li class="mb-4"><strong>Fluoride Treatments:</strong> Safe and effective
                                            fluoride applications help strengthen tooth enamel and reduce the risk of
                                            decay. This is especially beneficial for children and patients with high
                                            cavity risk.</li>
                                        <li class="mb-4"><strong>Dental Sealants:</strong> Protective coatings applied
                                            to the grooves of molars to prevent food and bacteria buildup. Ideal for
                                            children and teens.</li>
                                        <li class="mb-4"><strong>Oral Cancer Screenings:</strong> Quick, non-invasive
                                            screenings during your exam to detect early signs of oral cancer, especially
                                            important for adults over 40 or tobacco users.</li>
                                        <li class="mb-4"><strong>Personalized Oral Hygiene Education:</strong> We’ll
                                            guide you on the best brushing, flossing, and dietary habits to maintain
                                            your smile between visits.</li>
                                    </ul>
                                    <p><strong>Book your next preventive care visit today at Crossroads Dental in Toronto today! </strong></p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-dark no-bottom overflow-hidden bg-gray"
                style="background-size: cover; background-repeat: no-repeat;padding-top:30px">
                <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="me-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="py-5 my-5 me-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                            <h2 class="wow fadeInUp animated text-center" data-wow-delay=".2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                Complimentary Implant Consultation</h2>
                            <div class="banner-center-caption text-center">
                                <div class="banner-center-text2 mb-4 line-height">Are you ready to transform your
                                    smile? Whether you’re missing one, several, or all of your teeth, we can help
                                    you achieve the smile of your dreams.</div>
                                <div class="buttons">
                                    <a href="<?php  echo $config['ClinicBookingLink']; ?>" class="btn-main fx-slide"
                                        data-hover=" Book Appointment"><span>Book Appointment</span></a>
                                    <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"
                                        class="btn-main fx-slide btn-outline-white">
                                        <span>Call:
                                            <?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></span>
                                    </a>
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
    <script>
        document.querySelectorAll('.services-nav .nav-link[data-toggle="collapse"]').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('data-target') || this.getAttribute('href');
                const target = document.querySelector(targetId);
                const arrowIcon = this.querySelector('.rotate-icon');

                if (!target) return;

                const isOpen = target.classList.contains('show');

                // Close all others and reset their arrows
                document.querySelectorAll('.services-nav .collapse').forEach(div => {
                    div.classList.remove('show');
                });
                document.querySelectorAll('.services-nav .nav-link[aria-expanded]').forEach(l => {
                    l.setAttribute('aria-expanded', 'false');
                    const icon = l.querySelector('.rotate-icon');
                    if (icon) icon.classList.remove('rotated');
                });

                // Open the clicked one and rotate its arrow
                if (!isOpen) {
                    target.classList.add('show');
                    this.setAttribute('aria-expanded', 'true');
                    if (arrowIcon) arrowIcon.classList.add('rotated');
                }
            });
        });
    </script>

</body>

</html>