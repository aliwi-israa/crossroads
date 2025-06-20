<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Dental Fillings in Toronto | Crossroads Dental</title>
    <meta name="title" content="Dental Fillings in Toronto | Crossroads Dental">
    <meta name="description"
        content="Repair cavities with tooth-coloured dental fillings at Crossroads Dental in Toronto. Safe, natural-looking restorations in a single visit.">
    <meta name="author" content="Dentalook">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta property="og:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Fillings.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="dentalook.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta name="twitter:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Fillings.png">

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
                                Dental Fillings in Toronto</h1>

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
                                <li><a href="<?php echo $root; ?>services/general-dentistry/">General Dentistry</a></li>
                                <li class="active">Dental Fillings</li>
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
                                        data-target="#submenu1" aria-expanded="false"><span>Preventative
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
                                        data-target="#submenu2" aria-expanded="false"
                                        style="color: var(--primary-color);"><span>General Dentistry</span> <i
                                            class="fas fa-chevron-down rotate-icon"></i></a>
                                    <div class="collapse" id="submenu2">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link active"
                                                    href="<?php echo $root; ?>services/general-dentistry/fillings/"><i
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
                                <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s"><a href="#"><i class="fa-solid fa-arrow-left-long"></i> Services</a></div>
                                    <h1>Tooth Pain or Sensitivity? It Might Be a Cavity.</h1>
                                    <p>Cavities are one of the most common dental issues, but they’re also one of the
                                    easiest to fix! At Crossroads Dental, we offer durable, natural-looking composite
                                    fillings to restore your teeth and prevent further decay, all in a single visit.</p>
                                </div>
                            <div class="service-img mb-4">
                                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/dental_fillings-480.webp"
                                        media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/dental_fillings-768.webp"
                                        media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>/assets/images/services/banner/dental_fillings-1280.webp"
                                        alt="Dental Fillings in Toronto at Crossroads Dental" loading="lazy"
                                        class="img-fluid">
                                </picture>
                            </div>

                            <section class="pt-0 pb-0">
                                <div class="service-items">
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What Are Dental Fillings?</h3>
                                    <p>A dental filling is used to repair a tooth that has been damaged by decay. We
                                        remove the decayed portion of the tooth and replace it with a strong,
                                        tooth-coloured material that restores its shape and function.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Benefits of Tooth-Coloured Fillings
                                    </h3>
                                    <p>We use composite resin fillings that:</p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Match your natural tooth colour</li>
                                        <li class="mb-4">Bond securely to your tooth for lasting strength</li>
                                        <li class="mb-4">Require less removal of healthy tooth structure</li>
                                        <li class="mb-4">Are mercury-free and safe for all ages</li>
                                    </ul>
                                    <p>They’re ideal for both front and back teeth, offering a discreet solution that
                                        blends seamlessly with your smile.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">When Do You Need a Filling?</h3>
                                    <p>You may need a dental filling if you experience:</p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Tooth sensitivity or pain when chewing</li>
                                        <li class="mb-4">Visible pits or dark spots on a tooth</li>
                                        <li class="mb-4">Food trapping between teeth</li>
                                        <li class="mb-4">Chipped or broken enamel</li>
                                    </ul>
                                    <p>If caught early, a cavity can often be treated before it causes significant
                                        damage or requires more complex procedures.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">The Filling Process</h3>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">We gently numb the area to keep you comfortable.</li>
                                        <li class="mb-4">The decayed portion of the tooth is carefully removed.</li>
                                        <li class="mb-4">The cavity is cleaned and shaped.</li>
                                        <li class="mb-4">Composite resin is applied, sculpted, and hardened with a
                                            special light.</li>
                                        <li class="mb-4">The filling is polished and adjusted for a perfect fit.</li>
                                    </ul>
                                    <p>You can eat and return to normal activities almost immediately after treatment.
                                    </p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Restore Your Smile with Confidence
                                    </h3>
                                    <p>At Crossroads Dental, we prioritize both function and aesthetics. Our fillings
                                        are designed to be strong, invisible, and long-lasting. Chew, smile, and speak
                                        with confidence.</p>
                                    <p><strong>Book your dental filling appointment at Crossroads Dental in Toronto
                                            today and stop decay before it spreads.</strong></p>

                                    <div class="educational-video single mb-4">
										<h3>Things to Know About Fillings</h3>
										<a href="//fast.wistia.net/embed/iframe/ev9iwtlk0w?popover=true" class="wistia-popover[height=360,playerColor=8c8c8c,width=640]"><img src="https://www.deardoctor.com/images/video-gallery/play/tooth-colored-fillings.jpg" width="650" alt=""></a><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
									</div>
                                </div>
                            </section>

                            <section class="bg-light" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="col-lg-5"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="subtitle id-color wow fadeInUp animated" data-wow-delay=".0s"
                                                style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                                Everything You Need to Know
                                            </div>
                                            <h2 class="wow fadeInUp animated" data-wow-delay=".2s"
                                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                Frequently Asked Questions
                                            </h2>
                                        </div>
                                        <div class="col-lg-7"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="accordion s2 wow fadeInUp animated"
                                                style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                                                <div class="accordion-section"
                                                    style="background-size: cover; background-repeat: no-repeat;">

                                                    <div class="accordion-section-title" data-tab="#accordion-f1"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        1. How do I know if I need a filling?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f1"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Common signs include sensitivity to hot or cold, tooth pain when
                                                        chewing, or visible holes or dark spots on a tooth. We confirm
                                                        with an exam and X-rays.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f2"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        2. What type of filling material do you use?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f2"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        We use tooth-coloured composite resin, which bonds well, looks
                                                        natural, and is safe and durable for most situations.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f3"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        3. How long does a filling take?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f3"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Most fillings can be completed in one visit, typically within 30
                                                        to 60 minutes depending on the size and location of the cavity.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f4"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        4. Will getting a filling hurt?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f4"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        We use local anesthesia to keep the area numb and the process
                                                        pain-free. You might feel slight pressure but no pain during the
                                                        procedure.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f5"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        5. How long will a filling last?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f5"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Composite fillings typically last 5–10 years or longer with good
                                                        care, including daily brushing, flossing, and regular checkups.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
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