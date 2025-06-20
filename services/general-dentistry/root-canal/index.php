<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Root Canal Therapy in Toronto | Crossroads Dental</title>
    <meta name="title" content="Root Canal Therapy in Toronto | Crossroads Dental">
    <meta name="description"
        content="Relieve tooth pain and save your smile with gentle root canal therapy at Crossroads Dental in Toronto. Fast, comfortable, expert care.">
    <meta name="author" content="Dentalook">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta property="og:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Root-Canal.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="dentalook.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
    <meta name="twitter:description"
        content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Root-Canal.png">

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
                                Root Canal Therapy in Toronto</h1>

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
                                <li class="active">Root Canal</li>
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
                                            <li class="nav-item"><a class="nav-link"
                                                    href="<?php echo $root; ?>services/general-dentistry/fillings/"><i
                                                        class="fas fa-arrow-right"></i>Dental Fillings</a></li>
                                            <li class="nav-item"><a class="nav-link active" href="<?php echo $root; ?>services/general-dentistry/root-canal/"><i
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
                                <h1>Need Root Canal Treatment?</h1>
                                <p>If you're experiencing severe tooth pain or sensitivity, you may need a root canal. At Crossroads Dental, our root canal treatments are safe, gentle, and designed to relieve pain while saving your natural tooth.</p>
                            </div>

                            <div class="service-img mb-4">
                                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/root_canals-480.webp" media="(max-width: 600px)">
                                    <source srcset="<?php echo $root; ?>/assets/images/services/banner/root_canals-768.webp" media="(max-width: 992px)">
                                    <img src="<?php echo $root; ?>/assets/images/services/banner/root_canals-1280.webp"
                                        alt="Root Canal Therapy in Toronto - Crossroads Dental" loading="lazy" class="img-fluid">
                                </picture>
                            </div>

                            <section class="pt-0 pb-0">
                                <div class="service-items">
                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What is a Root Canal?</h3>
                                    <p>A root canal is a procedure used to treat infection or damage inside a tooth’s pulp, which is the soft tissue containing nerves and blood vessels. By removing the infected tissue, we can stop the pain, clean the tooth, and seal it to prevent further problems.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Signs You May Need a Root Canal</h3>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">Persistent toothache or sensitivity</li>
                                        <li class="mb-4">Pain when chewing or applying pressure</li>
                                        <li class="mb-4">Swelling or tenderness in the gums</li>
                                        <li class="mb-4">Darkening or discoloration of the tooth</li>
                                        <li class="mb-4">A recurring pimple on the gums</li>
                                    </ul>
                                    <p>Prompt treatment can prevent the need for an extraction and preserve your natural bite.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">What to Expect</h3>
                                    <p>Root canal therapy typically involves the following steps:</p>
                                    <ul class="ul-check fw-500 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                        <li class="mb-4">We numb the area to ensure your comfort throughout the procedure.</li>
                                        <li class="mb-4">A small opening is made to access the pulp chamber.</li>
                                        <li class="mb-4">The infected tissue is removed, and the canals are thoroughly cleaned.</li>
                                        <li class="mb-4">The space is filled with a biocompatible material and sealed.</li>
                                        <li class="mb-4">A crown or filling is placed to protect and restore the tooth.</li>
                                    </ul>
                                    <p>Most patients compare it to getting a standard filling. It’s quicker and more comfortable than you might expect.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Aftercare and Recovery</h3>
                                    <p>Minor soreness is normal for a day or two, but most patients return to normal activities the same day. We’ll guide you through aftercare to ensure a smooth recovery and recommend a crown if additional reinforcement is needed.</p>

                                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Save Your Tooth, Restore Your Comfort</h3>
                                    <p>Root canals don’t cause pain — they relieve it. At Crossroads Dental, we use advanced tools and gentle techniques to make your treatment as stress-free as possible.</p>
                                    <p><strong>If you're in pain, don’t wait! Book your root canal consultation at Crossroads Dental in Toronto today!</strong></p>
                                
                                   <div class="educational-video mb-4">
										<h3>Things to Know about Root Canal Treatment</h3>
                                        <div class="video-container">
									        <div class="video">	<a href="//fast.wistia.net/embed/iframe/08anwftq82?popover=true" class="wistia-popover[height=360,playerColor=8c8c8c,width=640]"><img src="https://www.deardoctor.com/images/video-gallery/play/root-canal-treatment.jpg" width="350" alt=""></a><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script></div>
											<div class="video">	<a href="//fast.wistia.net/embed/iframe/u9ps7dgqlc?popover=true" class="wistia-popover[height=360,playerColor=8c8c8c,width=640]"><img src="https://www.deardoctor.com/images/video-gallery/play/top5-reasons-not-to-delay-root-canal.jpg" width="350" alt=""></a><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script></div>
									    </div>
                                    </div>
                                </div>
                            </section>

                            <section class="bg-light" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="col-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="subtitle id-color wow fadeInUp animated" data-wow-delay=".0s">
                                                Everything You Need to Know
                                            </div>
                                            <h2 class="wow fadeInUp animated" data-wow-delay=".2s">Frequently Asked Questions</h2>
                                        </div>
                                        <div class="col-lg-7" style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="accordion s2 wow fadeInUp animated">
                                                <div class="accordion-section">

                                                    <div class="accordion-section-title" data-tab="#accordion-f1">
                                                        1. Does a root canal hurt?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f1">
                                                        With modern anesthesia and techniques, root canals are no more painful than getting a regular filling. Most patients feel relief from pain, not more of it.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f2">
                                                        2. Why would I need a root canal?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f2">
                                                        A root canal is needed when the inside of your tooth becomes infected or inflamed due to deep decay, cracks, or trauma.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f3">
                                                        3. How long does a root canal take?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f3">
                                                        Most root canals can be completed in one or two visits, lasting about 60–90 minutes per session depending on the tooth’s complexity.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f4">
                                                        4. What happens after the procedure?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f4">
                                                        You may feel some tenderness for a day or two. We’ll usually recommend a crown after the root canal to protect the tooth long-term.
                                                    </div>

                                                    <div class="accordion-section-title" data-tab="#accordion-f5">
                                                        5. Can a root canal save my tooth?
                                                    </div>
                                                    <div class="accordion-section-content" id="accordion-f5">
                                                        Yes. Root canals allow you to keep your natural tooth by removing the infected tissue and sealing it, avoiding the need for an extraction.
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