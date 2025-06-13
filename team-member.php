<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crossroads Dental — Dentist & Dental Clinic Website Template</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Crossroads Dental — Dentist & Dental Clinic Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="subpage">
    <div id="wrapper">
        <?php include 'includes/header.php'; ?>
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="position-relative overflow-hidden" style="padding: 0; height: 500px;">
                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <source srcset="images/about/banner/about-480.webp" media="(max-width: 600px)">
                    <source srcset="images/about/banner/about-768.webp" media="(max-width: 992px)">
                    <img src="images/about/banner/about-1280.webp" alt="About Page Banner" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </picture>
                <div class="container z-1 text-center text-white about-header"
                    style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="row align-items-center" style="margin-top:100px;">
                        <div class="col-lg-12">
                            <h2 class="wow fadeInUp fs-4 mb-4" data-wow-delay=".2s">Meet Our Dentists
                            </h2>
                            <h1 class="wow fadeInUp mb-5">Crossroads Dentists</h1>
                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                href="contact.html"><span>Book Appointment</span></a>
                            <p class="wow fadeInUp mb-4" data-wow-delay=".5s">
                                or call <a href="tel:(+1) 123-456-789">(+1) 123-456-789</a>
                            </p>
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
                                <li><a href="index.php">About</a></li>
                                <li> <a href="our-team.php">Our Dentists</a></li>
                                <li class="active">Dr. Sarah Bennett</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="section page-content-first">
                    <div class="container mt-6">
                        <div class="row">
                            <div class="col-md">
                                <div class="doctor-page-photo text-center">
                                                <picture>
                        <source srcset="images/team/1-480.webp" media="(max-width: 600px)">
                        <source srcset="images/team/1-768.webp" media="(max-width: 992px)">
                        <img src="images/team/1-1280.webp" class="w-100 wow scaleIn" loading="lazy" alt="team members" style="width: 100%; height: 100%; object-fit: cover; display: block">
                        </picture>
                                </div>
                                <div class="mt-3 mt-md-5"></div>
                            </div>
                            <div class="col-lg-8 mt-4 mt-lg-0">
                                <div class="doctor-info mb-3 mb-lg-4">
                                    <div class="doctor-info-name">
                                        <h1>Dr. Sarah Bennett</h1>
                                        <h6>Dentist</h6>
                                    </div>
                                    <div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:(705) 242-2363"
                                            aria-label="Link to Call us">Call (705) 242-2363</a></div>

                                </div>
                                <p>
                                    Dr. Sarah Bennett (a.k.a Dr. sarah) graduated from the University of Toronto where he obtained
                                    an Honours bachelor’s degree in biology.
                                </p>
                                <p>
                                    During these formative years he developed a keen interest in clinical research and obtained a
                                    Master’s degree in laboratory medicine and pathobiology from the University of Toronto. He then made
                                    the decision to become a Dentist.
                                </p>
                                <p>
                                    Dr. Fred obtained his Doctor of Dental Surgery degree from the University of Toronto and followed
                                    that education by owning and operating two dental practices and treating thousands of patients.
                                </p>
                                <p>
                                    He is extremely excited to now be living in Barrie with his family and to meet and care for all the
                                    patients at Eagle Ridge Dentistry.
                                </p>
                                <p>
                                    In his free time, you can catch Dr. Fred watching the Habs play.
                                </p>

                                <div class="d-flex flex-column flex-sm-row mt-lg-2">
                                                        <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="contact.html"><span>Book Appointment</span></a>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
</body>

</html>