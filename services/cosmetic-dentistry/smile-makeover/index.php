<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Smile Makeover in Toronto | Crossroads Dental</title>
    <meta name="title" content="Smile Makeover in Toronto | Crossroads Dental">
    <meta name="description"
        content="Transform your smile with a personalized smile makeover at Crossroads Dental in Toronto. Veneers, whitening, bonding & more that's customized for you.">
    <meta name="author" content="Dentalook">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta property="og:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Smile-Makeover.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="dentalook.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta name="twitter:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Smile-Makeover.png">

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
                                Smile Makeovers in Toronto</h1>

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
                                <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/">Cosmetics Dentistry</a></li>
                                <li class="active">Smile Makeover</li>
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
                                        data-target="#submenu3" aria-expanded="false" style="color: var(--primary-color);"><span>Cosmetic Dentistry </span><i
                                            class="fas fa-chevron-down rotate-icon"></i></a>
                                    <div class="collapse" id="submenu3">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/teeth-whitening/"><i
                                                        class="fas fa-arrow-right"></i>Whitening</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/veneers/"><i
                                                        class="fas fa-arrow-right"></i>Veneers</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>services/cosmetic-dentistry/bonding/"><i
                                                        class="fas fa-arrow-right"></i>Dental Bonding</a></li>
                                            <li class="nav-item"><a class="nav-link active"
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
                                <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s"><a href="#"><i
                                            class="fa-solid fa-arrow-left-long"></i> Services</a></div>
                                <h2 class="id-color">Dreaming of a New Smile?</h2>
                                <p>If you’re ready to completely transform your smile, a custom smile makeover at
                                    Crossroads Dental might be your perfect solution. Whether you want to correct years
                                    of wear or achieve a movie-star smile, our personalized treatment plans combine the
                                    best of cosmetic dentistry to help you reach your goals.</p>
                            </div>
                            <div class="service-img mb-4">
                                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/smile_makeover-480.webp"
                                        media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/smile_makeover-768.webp"
                                        media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>/assets/images/services/banner/smile_makeover-1280.webp"
                                        alt="Dental Implants image of a person getting his teeth implanted"
                                        loading="lazy" class="img-fluid">
                                </picture>
                            </div>

                            <section class="pt-0 pb-0">
                                <div class="service-items">
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What is a Smile Makeover?</h3>
                                    <p>A smile makeover is a customized combination of cosmetic dental treatments
                                        designed to improve the appearance of your teeth and gums. Each makeover is
                                        tailored to your unique facial features, oral health, and aesthetic preferences.
                                    </p>
                                    <p>Treatments may include:</p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Porcelain veneers for uniform, flawless teeth</li>
                                        <li class="mb-4">Teeth whitening to brighten and rejuvenate your smile</li>
                                        <li class="mb-4">Dental bonding to fix chips, gaps, or uneven edges</li>
                                        <li class="mb-4">Tooth contouring or reshaping</li>
                                        <li class="mb-4">Gum line adjustments (if needed)</li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Ideal Candidates for a Smile Makeover
                                    </h3>
                                    <p>You may be a great fit for a smile makeover if you want to improve:</p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Discolored or stained teeth</li>
                                        <li class="mb-4">Crooked, crowded, or uneven teeth</li>
                                        <li class="mb-4">Chipped, cracked, or worn enamel</li>
                                        <li class="mb-4">Gaps or irregular tooth shape</li>
                                        <li class="mb-4">A “gummy” or unbalanced smile</li>
                                    </ul>
                                    <p>Smile makeovers are both cosmetic and confidence-boosting, with many patients
                                        seeing results that go beyond their appearance.</p>


                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What to Expect</h3>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">
                                            <strong>Initial Consultation:</strong> We begin with a thorough exam and
                                            digital imaging to assess your smile and discuss your goals.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Customized Plan:</strong> We design a step-by-step cosmetic plan
                                            tailored to your needs and timeline.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Treatment Phases:</strong> Depending on the treatments selected,
                                            your makeover may be completed in one visit or spread across multiple
                                            appointments.
                                        </li>
                                        <li class="mb-4">
                                            <strong>Final Reveal:</strong> We ensure every detail is polished, precise,
                                            and personalized for a natural, radiant smile.
                                        </li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Why Choose Crossroads Dental?</h3>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Advanced cosmetic techniques with a personalized approach</li>
                                        <li class="mb-4">Skilled team experienced in aesthetic and restorative work</li>
                                        <li class="mb-4">Modern technology for precision and comfort</li>
                                        <li class="mb-4">Collaborative, no-pressure consultations</li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Reveal the Best Version of Your Smile
                                    </h3>
                                    <p>A confident, radiant smile can make all the difference in how you look and feel.
                                        Let our team help you design the smile you’ve always wanted. A smile that’s
                                        healthy, balanced, and completely you.
                                        <br><strong>Book your smile makeover consultation today at Crossroads Dental in
                                            Toronto.</strong></p>
                                </div>
                            </section>
                            <section class="bg-light" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="col-lg-5"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="subtitle id-color wow fadeInUp animated" data-wow-delay=".0s"
                                                style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                                Everything You Need to Know</div>
                                            <h2 class="wow fadeInUp animated" data-wow-delay=".2s"
                                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                Frequently Asked Questions</h2>
                                        </div>
                                        <div class="col-lg-7"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="accordion s2 wow fadeInUp animated"
                                                style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                                                <div class="accordion-section"
                                                    style="background-size: cover; background-repeat: no-repeat;">
                                                    <div class="accordion-section-title" data-tab="#accordion-a1"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        What is included in a smile makeover?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-a1"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        A smile makeover may combine veneers, whitening, bonding, clear
                                                        aligners, and contouring to enhance the appearance of your teeth
                                                        and gums.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-a2"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        How long does a smile makeover take?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-a2"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        It varies based on the treatments involved. Some patients finish
                                                        in a few visits, while others may complete their makeover over
                                                        several months.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-a3"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Is a smile makeover only cosmetic?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-a3"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        While focused on aesthetics, many treatments also improve bite,
                                                        alignment, and oral health, providing both functional and
                                                        cosmetic benefits.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-a4"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Will people know I’ve had cosmetic work done?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-a4"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Our goal is to create natural-looking results that enhance your
                                                        smile. Most people will just notice that your smile looks great.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-a5"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        How do I maintain my results?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-a5"
                                                        style="background-size: cover; background-repeat: no-repeat;">
                                                        Practice good oral hygiene, avoid staining foods, wear a
                                                        nightguard if recommended, and visit us regularly for cleanings
                                                        and checkups.
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