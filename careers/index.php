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
	<meta name="author" content="Dentalook">

    	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta property="og:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta property="og:image" content="<?php echo $root; ?>assets/images/openGraph/Careers.jpg">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="dentalook.ca">
	<meta property="twitter:url" content="">
	<meta name="twitter:title" content="Welcome to <?php echo $config['ClinicName']; ?>, Your Barrie Dental Home">
	<meta name="twitter:description"
		content="Discover high-quality dental solutions tailored to your needs. We provide emergency dental care, Invisalign clear aligners, and more.">
	<meta name="twitter:image" content="<?php echo $root; ?>assets/images/openGraph/Careers.jpg">

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
            <section id="subheader" class="bg-color-op-1 text-center" style="background-size: cover; background-repeat: no-repeat;">
                <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                            <h3 class="wow fadeInUp animated subheader">Careers</h3>
                            <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Join Crossroads Dental</h1>
                            
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
                                <li><a href="about.php">About</a></li>
                                <li class="active">Careers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <section>
                    <div class="text-center mb-2  mb-md-3 mb-lg-4">
                         <div class="h-decor"></div>
                        <p>
                            At Crossroads Dental, we are committed to providing top-notch dental care and creating a
                            welcoming environment for both our patients and staff. If you are passionate about dentistry
                            and looking for a place to grow your career, explore our current job openings and become
                            part of our dedicated team.
                        </p>
                    </div>
                    <div class="container aos-init aos-animate text-center" data-aos="fade-up">
                        <div class="row">
                            <div class="col">
                                <h2 id="job-title"></h2>
                                <div id="all-jobs"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="text-center mb-2  mb-md-3 mb-lg-4">
                        <h2 class="wow fadeInUp" data-wow-delay=".0s">Benefits of joining our team</h2>
                        <div class="h-decor"></div>
                        <p class="wow fadeInUp" data-wow-delay=".2s">
                            We offer a supportive, learning-oriented environment with a focus on personal and
                            professional growth,
                            collaboration, and meaningful connections.
                        </p>
                    </div>
                    <div class="spacer-double"></div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1">
                                <div class="relative wow fadeInUp career-icon">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-growth-opportunities.svg" alt="">
                                    <h4>Growth Opportunities</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1">
                                <div class="relative wow fadeInUp career-icon">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-health-dental-benefits.svg" alt="">
                                    <h4>Health & Dental Benefits</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1">
                                <div class="relative wow fadeInUp career-icon">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-mentorship-training.svg" alt="">
                                    <h4>Mentorship and Training</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1">
                                <div class="relative wow fadeInUp career-icon">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-relocation-support.svg" alt="">
                                    <h4>Relocation Support</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1 career-icon">
                                <div class="relative wow fadeInUp">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-competitive-wages.svg" alt="">
                                    <h4>Competitive Wages</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="border-gray p-40 h-100 rounded-1">
                                <div class="relative wow fadeInUp career-icon">
                                    <img src="<?php echo $root; ?>assets/images/icons/icons-supportive-teams.svg" alt="">
                                    <h4>Supportive Teams
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                        <section class="text-dark no-bottom overflow-hidden bg-gray"
                style="background-size: cover; background-repeat: no-repeat;padding-top:30px">
                <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="me-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="py-5 my-5 me-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                            <h2 class="wow fadeInUp animated text-center" data-wow-delay=".2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                Get the Smile You've Always Wanted!</h2>
                            <div class="banner-center-caption text-center">
                                <div class="banner-center-text2 mb-4 line-height">We strive to provide the highest quality dental treatment at affordable prices</div>
                                <a href="<?php  echo $config['ClinicBookingLink']; ?>" class="btn-main fx-slide"
                                    data-hover=" Book Appointment"><span>Book Appointment</span></a>
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
        // Replace this variable with the desired clinic's job board name that Marwan will provide for each clinica
        const jobBoardName = 'crossroads-dental';
        const anchorTag = '#opportunities';

        // API Endpoint
        const apiEndpoint = `https://api.greenhouse.io/v1/boards/${jobBoardName}/jobs`;

        // Function to fetch and display jobs
        function fetchAndDisplayJobs() {
            $.get(apiEndpoint, function (data) {
                    const jobs = data.jobs;

                    if (jobs.length === 0) {
                        $('#all-jobs').html('<p>No jobs available at the moment.</p>');
                    } else {
                        const jobListHtml = '<ul>' +
                            jobs.map(job =>
                                `<li><a href="${job.absolute_url}"><strong>${job.title}</strong></a> <a class="view-job-link" href="${job.absolute_url}">View Job &#8594;</a></li>`
                            ).join('') +
                            '</ul>';
                        $('#all-jobs').html(jobListHtml);
                    }
                })
                .fail(function () {
                    $('#all-jobs').html('<p>Failed to fetch jobs.</p>');
                });
        }

        // Function to extract gh_jn parameter from the URL
        function getGhJnParameter() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('gh_jn');
        }

        // Display the job title in the H2 element
        const ghJn = getGhJnParameter();
        if (ghJn) {
            $('#job-title').text(ghJn);
        }

        // Call the function to fetch and display jobs
        fetchAndDisplayJobs();
    </script>
</body>

</html>