<?php require ($_SERVER['DOCUMENT_ROOT'].'/test/includes/config.php'); ?>
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
	<meta name="author" content="Dentalook">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta property="og:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="dentalook.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta name="twitter:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/homepage-og.png">

	<?php include_once $_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/css-vendors.php';?>
	<!-- Google Fonts -->
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
            <section id="subheader" class="position-relative overflow-hidden" style="padding: 0; height: 500px;">
                <picture style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <source srcset="<?php echo $root; ?>assets/images/about/banner/about-480.webp" media="(max-width: 600px)">
                    <source srcset="<?php echo $root; ?>assets/images/about/banner/about-768.webp" media="(max-width: 992px)">
                    <img src="<?php echo $root; ?>assets/images/about/banner/about-1280.webp" alt="About Page Banner" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </picture>
                <div class="container z-1 text-center text-white about-header"
                    style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="row align-items-center" style="margin-top:100px;">
                        <div class="col-lg-12">
                            <h2 class="wow fadeInUp fs-4 mb-4" data-wow-delay=".2s">Frequesntly Asked Questions
                            </h2>
                            <h1 class="wow fadeInUp mb-5">FAQ</h1>
                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                href="<?php  echo $config['ClinicBookingLink']; ?>"><span>Book Appointment</span></a>
                            <p class="wow fadeInUp mb-4" data-wow-delay=".5s">
                                or call <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a>
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
                                <li class="active">FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="container mb-4">
                    <input type="text" id="faqSearch" class="form-control"
                        placeholder="Search for a service">
                </div>
                <div class="container">
                    <div class="row g-4 gx-5 justify-content-center wow fadeInUp">
                        <div class="col-lg-12">
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">Preventative Dentistry</h3>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Dental Examination
                                    </h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-exam-1">
                                            What happens during a dental exam?
                                        </div>
                                        <div class="accordion-section-content" id="faq-exam-1">
                                            A dental exam includes an inspection of your teeth, gums, and oral tissues,
                                            plus X‑rays if needed.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-exam-2">
                                            How long does a check‑up take?
                                        </div>
                                        <div class="accordion-section-content" id="faq-exam-2">
                                            Typically 30–45 minutes for a routine check‑up and cleaning.
                                        </div>
                                    </div>
                                </div>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Gum Care & Teeth
                                        Cleaning</h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-gum-1">
                                            How often should I have my teeth cleaned?
                                        </div>
                                        <div class="accordion-section-content" id="faq-gum-1">
                                            Most patients benefit from cleanings every 6 months; some may need it more
                                            often.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-gum-2">
                                            Is scaling and root planing painful?
                                        </div>
                                        <div class="accordion-section-content" id="faq-gum-2">
                                            No, we use local anesthesia to ensure comfort during deep cleanings.
                                        </div>
                                    </div>
                                </div>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Dental Sealants
                                    </h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-sealant-1">
                                            What are dental sealants?
                                        </div>
                                        <div class="accordion-section-content" id="faq-sealant-1">
                                            Sealants are thin coatings applied to molars to prevent decay.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-sealant-2">
                                            How long do they last?
                                        </div>
                                        <div class="accordion-section-content" id="faq-sealant-2">
                                            Typically 5–10 years with proper care.
                                        </div>
                                    </div>
                                </div>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Fluoride
                                        Treatments</h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-fluoride-1">
                                            Are fluoride treatments safe?
                                        </div>
                                        <div class="accordion-section-content" id="faq-fluoride-1">
                                            Yes—professional applications are safe and beneficial for enamel health.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-fluoride-2">
                                            How often do I need fluoride?
                                        </div>
                                        <div class="accordion-section-content" id="faq-fluoride-2">
                                            Every 3–12 months depending on your cavity risk.
                                        </div>
                                    </div>
                                </div>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Oral Cancer
                                        Screening</h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-cancer-1">
                                            Why is screening important?
                                        </div>
                                        <div class="accordion-section-content" id="faq-cancer-1">
                                            Early detection greatly improves treatment outcomes.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-cancer-2">
                                            How is it performed?
                                        </div>
                                        <div class="accordion-section-content" id="faq-cancer-2">
                                            We inspect soft tissues, tongues, and use special lights if needed.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">General Dentistry</h3>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Dental Fillings
                                    </h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-fillings-1">
                                            What types of fillings are available?
                                        </div>
                                        <div class="accordion-section-content" id="faq-fillings-1">
                                            We offer composite, amalgam, and ceramic fillings depending on need.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-fillings-2">
                                            Is my insurance cover fillings?
                                        </div>
                                        <div class="accordion-section-content" id="faq-fillings-2">
                                            Most basic plans cover fillings; confirm with your provider.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">Emergency Dentistry</h3>
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#faq-emergency-1">
                                        What qualifies as a dental emergency?
                                    </div>
                                    <div class="accordion-section-content" id="faq-emergency-1">
                                        Knocked-out teeth, severe pain, abscesses, or bleeding gums need immediate
                                        attention.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#faq-emergency-2">
                                        Do you handle after-hours emergencies?
                                    </div>
                                    <div class="accordion-section-content" id="faq-emergency-2">
                                        Yes—we provide an emergency contact number for urgent care outside office hours.
                                    </div>
                                </div>
                            </div>
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">Cosmetic Dentistry</h3>
                                <div class="subcategory-sub">
                                    <h4 class="subcategory-subtitle mt-4" style=" margin-left: 20px;">Whitening</h4>
                                    <div class="accordion-section" style=" margin-left: 20px;">
                                        <div class="accordion-section-title" data-tab="#faq-whitening-1">
                                            Is in-office whitening safe?
                                        </div>
                                        <div class="accordion-section-content" id="faq-whitening-1">
                                            Yes—under professional supervision, sensitivity is minimal.
                                        </div>
                                        <div class="accordion-section-title" data-tab="#faq-whitening-2">
                                            How long do results last?
                                        </div>
                                        <div class="accordion-section-content" id="faq-whitening-2">
                                            Typically 6–12 months depending on lifestyle habits.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">Clear Aligners (Invisalign)</h3>
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#faq-invisalign-1">
                                        How do Invisalign trays work?
                                    </div>
                                    <div class="accordion-section-content" id="faq-invisalign-1">
                                        Clear trays shift teeth incrementally; you switch sets every 1–2 weeks.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#faq-invisalign-2">
                                        Is Invisalign any faster than braces?
                                    </div>
                                    <div class="accordion-section-content" id="faq-invisalign-2">
                                        For minor to moderate cases, results can be seen in 6–18 months.
                                    </div>
                                </div>
                            </div>
                            <div class="subcategory-section">
                                <h3 class="subcategory-title">Dental Implants</h3>
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#faq-implants-1">
                                        Who is a candidate for implants?
                                    </div>
                                    <div class="accordion-section-content" id="faq-implants-1">
                                        Typically adults with healthy gums and bone can receive implants.
                                    </div>
                                    <div class="accordion-section-title" data-tab="#faq-implants-2">
                                        How long do implants last?
                                    </div>
                                    <div class="accordion-section-content" id="faq-implants-2">
                                        With good care, dental implants can last 20+ years.
                                    </div>
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
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.d-tab-nav li');
            const contents = document.querySelectorAll('.d-tab-content li');
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active-tab'));
                    tab.classList.add('active-tab');
                    contents.forEach(c => c.style.display = 'none');
                    if (contents[index]) {
                        contents[index].style.display = 'block';
                    }
                });
            });
            contents.forEach((c, i) => {
                c.style.display = i === 0 ? 'block' : 'none';
            });
        });
    </script>
    <script>
        console.log('sss');
        document.addEventListener('DOMContentLoaded', function () {
            console.log('ll');

            const searchInput = document.getElementById('faqSearch');
            const sections = document.querySelectorAll('.subcategory-section');

            searchInput.addEventListener('input', function () {
                const query = this.value.toLowerCase().trim();

                sections.forEach(section => {
                    const titles = section.querySelectorAll(
                        '.subcategory-title, .subcategory-subtitle');
                    let matchFound = false;

                    titles.forEach(title => {
                        if (title.textContent.toLowerCase().includes(query)) {
                            matchFound = true;
                        }
                    });

                    section.style.display = matchFound || query === '' ? '' : 'none';
                });
            });
        });
    </script>
</body>
</html>