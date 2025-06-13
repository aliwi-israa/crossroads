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
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
</head>

<body class="subpage">
    <div id="wrapper">
        <?php include 'includes/header.php'; ?>
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
                <div class="section page-content-first" style="padding-top:100px">
                    <div class="section m-3">
                        <div class="breadcrumbs-wrap">
                            <div class="container">
                                <div class="breadcrumbs">
                                    <ul class="crumb wow fadeInDown">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="active"><a href="careers.php">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section>
                        <div class="text-center mb-2  mb-md-3 mb-lg-4">
                            <div class="subtitle s2 mb-3 wow fadeInUp animated" data-wow-delay=".0s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Careers</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Join the Crossroads Dental Team</h2>
                            <div class="h-decor"></div>
                            <p>
                            At Crossroads Dental, we are committed to providing top-notch dental care and creating a welcoming environment for both our patients and staff. If you are passionate about dentistry and looking for a place to grow your career, explore our current job openings and become part of our dedicated team.
                            </p>
                        </div>
                        <div class="container aos-init aos-animate text-center" data-aos="fade-up">
                                <div class="row">
                                    <div class="col">
                                        <h2 id="job-title"></h2> <!-- H2 element to display job title -->
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
                            We offer a supportive, learning-oriented environment with a focus on personal and professional growth,
						collaboration, and meaningful connections.
                            </p>
                        </div>
                    </section>
                </div>
 
            </div>
        </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
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