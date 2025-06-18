<?php require ($_SERVER['DOCUMENT_ROOT'].'/crossroads/includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/gtm-head.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Crossroads Dental – Canadian Dental Care Program (CDCP)</title>
    <meta name="title" content="Crossroads Dental – Canadian Dental Care Program (CDCP)">
    <meta name="description" content="Discover how Crossroads Dental supports CDCP. Learn what’s covered and apply directly via the Government of Canada to access dental benefits in Toronto.">
    <meta name="author" content="Dentalook">

    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crossroads Dental – Canadian Dental Care Program (CDCP)">
    <meta property="og:description" content="Discover how Crossroads Dental supports CDCP. Learn what’s covered and apply directly via the Government of Canada to access dental benefits in Toronto.">
    <meta property="og:image" content="<?php echo $root; ?>assets/images/CDCP.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="dentalook.ca">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Crossroads Dental – Canadian Dental Care Program (CDCP)">
    <meta name="twitter:description" content="Discover how Crossroads Dental supports CDCP. Learn what’s covered and apply directly via the Government of Canada to access dental benefits in Toronto.">
    <meta name="twitter:image" content="<?php echo $root; ?>assets/images/CDCP.jpg">

    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;600;700&display=swap" rel="stylesheet">
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
                            <h3 class="wow fadeInUp subheader">We accept</h3>
                            <h1 class="wow fadeInUp">Canadian Dental Care Plan (CDCP)</h1>
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
                                <li class="active">CDCP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                <img src="<?php echo $root; ?>assets/images/cdcp/people-1280.webp" class="w-100 responsive-img" loading="lazy" alt="CDCP dental patient">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ms-lg-3">
                                <h2 class="wow fadeInUp">Canadian Dental Care Program (CDCP)</h2>
                                <p class="wow fadeInUp">
                                    Crossroads Dental is proud to support the Canadian Dental Care Program (CDCP), a new federal initiative to expand access to essential dental care for eligible Canadians. If you're approved through CDCP, we’re ready to welcome you with high-quality care right here in Toronto.
                                </p>
                                <a class="btn-main fx-slide wow fadeInUp" href="<?php echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $sections = [
                [
                    "title" => "What is CDCP?",
                    "text" => "CDCP is a federally funded dental coverage plan designed to provide basic dental care to Canadians who might not otherwise afford it. It is part of Canada's effort to reduce oral health inequality and improve public health outcomes.",
                    "image" => "about/p4-1280.webp"
                ],
                [
                    "title" => "Who is Eligible?",
                    "text" => "To benefit from the CDCP, you must:
                    <ul>
                        <li>Be a Canadian resident without access to private dental insurance</li>
                        <li>Have an adjusted family net income under $90,000 per year</li>
                        <li>Not be fully covered under another government dental program</li>
                        <li>Meet specific age or health-related eligibility based on the program’s rollout</li>
                    </ul>
                    Full eligibility requirements and application details are available on the official government site.",
                    "image" => "cdcp/people-1280.webp"
                ],
                [
                    "title" => "How to Apply",
                    "text" => "Crossroads Dental does not process CDCP applications directly. You must apply through the Government of Canada. Visit the official CDCP portal. Once your application is approved, you’ll receive confirmation and instructions. Bring these details with you when booking your dental appointment with us.",
                    "image" => "about/p4-1280.webp"
                ],
                [
                    "title" => "What’s Covered?",
                    "text" => "Under CDCP, eligible patients can receive:
                    <ul>
                        <li>Routine exams, cleanings, and X-rays</li>
                        <li>Fillings and simple restorative treatments</li>
                        <li>Extractions and emergency dental care</li>
                        <li>Fluoride applications and preventative services</li>
                        <li>Some specialized care with prior authorization</li>
                    </ul>
                    Cosmetic procedures such as whitening or veneers are not covered under the plan.",
                    "image" => "cdcp/people-1280.webp"
                ],
                [
                    "title" => "Why Choose Crossroads Dental?",
                    "text" => "We’re committed to serving our Toronto community with compassion, clarity, and excellence. When you choose Crossroads Dental, you benefit from:
                    <ul>
                        <li>A CDCP-participating clinic with trained staff familiar with the program</li>
                        <li>Clear explanations of your treatment plan and what’s covered</li>
                        <li>Convenient online booking and a modern, welcoming environment</li>
                    </ul>",
                    "image" => "about/p4-1280.webp"
                ],
                [
                    "title" => "Need Help Understanding Your Coverage?",
                    "text" => "We can’t apply on your behalf, but we’ll gladly answer any questions you may have about using your CDCP benefits at our clinic. Whether you're just starting the process or have already been approved, our team is ready to help you make the most of your care.",
                    "image" => "cdcp/people-1280.webp"
                ],
            ];

            foreach ($sections as $index => $section):
                // Odd sections: image right, text left, with bg-color classes
                // Even sections: image left, text right, no bg-color classes
                $isOdd = ($index + 1) % 2 !== 0;
                $bgClass = $isOdd ? 'bg-color bg-color-op-1' : '';
                $rowClass = $isOdd ? 'flex-row-reverse' : '';
            ?>
            <section class="<?= $bgClass ?>">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center <?= $rowClass ?>">
                        <div class="col-lg-6">
                            <div class="rounded-1 overflow-hidden wow zoomIn image-container">
                                <img src="<?php echo $root; ?>assets/images/<?php echo $section['image']; ?>" class="w-100 responsive-img" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ms-lg-3">
                                <h2 class="wow fadeInUp"><?php echo $section['title']; ?></h2>
                                <p class="wow fadeInUp"><?php echo $section['text']; ?></p>
                                <a class="btn-main fx-slide mt-3 wow fadeInUp" href="<?php echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>

        </div>
    </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/footer.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/js-vendors.php';?>
</body>
</html>
