<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dentia — Dentist & Dental Clinic Website Template</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Dentia — Dentist & Dental Clinic Website Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>

<body class="subpage">
    <div id="wrapper">
            <?php include 'includes/header.php'; ?>


        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="bg-color-op-1 text-center">
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="wow fadeInUp">Contact Us</h1>
                            <div class="border-bottom my-3"></div>
                            <ul class="crumb wow fadeInDown">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


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
                                    <a href="https://maps.app.goo.gl/CiMYzzZSTiPKMQBw8" target="_blank" class="text-decoration-none d-block fw-bold">
                                        <i class="fa-solid fa-location-dot me-2 id-color fs-14"></i>
                                            <span class="text-dark"> Clinic Location</span>
                                        <div class="fw-normal ms-4">2384 Dundas St W</div>
                                    </a> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="fa-solid fa-phone me-2 id-color fs-14"></i>Call Us Directly</div>
                                    <a href="tel:(+1) 123-456-789">(+1) 123-456-789</a>
                                </div>

                                <div class="col-lg-6">
                                    <a href="mailto:info@crossroadsdental.ca" class="text-dark text-decoration-none d-block fw-bold">
                                        <i class="fa fa-envelope me-2 id-color fs-14"></i>Send a Message
                                        <div class="fw-normal ms-4">info@crossroadsdental.ca</div>
                                    </a>     
                                </div>
                            </div>



                        </div>

                        <div class="col-lg-6">
                            <div class="p-40 bg-color-op-1 rounded-1">
                                <h3>Get In Touch</h3>
                                <form name="contactForm" id="contact_form" method="post" action="contact.php">

                                    <div class="mb-4">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                    </div>

                                    <div class="mb-4">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                    </div>

                                    <div class="mb-4">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                    </div>

                                    <div class="mb-4 mb20">
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                    </div>


                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>


    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="images/logo-white.webp" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
            <ul class="ul-check">
                <li><a href="service-general-dentistry.html">General Dentistry</a></li>
                <li><a href="service-cosmetic-dentistry.html">Cosmetic Dentistry</a></li>
                <li><a href="service-pediatric-dentistry.html">Pediatric Dentistry</a></li>
                <li><a href="service-restorative-dentistry.html">Restorative Dentistry</a></li>
                <li><a href="service-preventive-dentistry.html">Preventive Dentistry</a></li>
                <li><a href="service-orthodontics.html">Orthodontics</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2 op-5"></i>Monday - Friday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2 op-5"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2 op-5"></i>contact@dentiacare.com </div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>At Dentia, we’re dedicated to providing high-quality, personalized dental care for patients of all ages. Our skilled team uses the latest technology to ensure comfortable, efficient treatments and beautiful, healthy smiles for life.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation-contact.js"></script>

</body>

</html>