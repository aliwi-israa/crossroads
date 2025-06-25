<?php 
    require ($_SERVER['DOCUMENT_ROOT'].$webPath.'/includes/config.php');
?>
<a href="#" id="back-to-top"></a>
<div id="de-loader"></div>
<header class="transparent scroll-light">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10 wrapper">
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="<?php echo $root; ?>">
                                <img class="logo-main" src="<?php echo $root; ?>assets/images/crosroads-dental-clinic-logo-white.webp" alt="crosroads dental clinic logo" width="595" height="170" style="width: 100%; height: auto;">
                                <img class="logo-scroll" src="<?php echo $root; ?>assets/images/crosroads-dental-clinic-logo.webp" alt="crosroads dental clinic logo" width="480" height="138" style="width: 100%; height: auto;">
                                <img class="logo-mobile" src="<?php echo $root; ?>assets/images/crosroads-dental-clinic-logo-white.webp" alt="crosroads dental clinic logo" width="595" height="170" style="width: 100%; height: auto;">
                            </a>
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="<?php echo $root; ?>">Home</a></li>
                            <li><a class="menu-item" href="<?php echo $root; ?>cdcp/">CDCP</a></li>

                            <li>
                                <a class="menu-item" href="<?php echo $root; ?>about/">About</a>
                                <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                <ul>
                                    <li><a href="<?php echo $root; ?>our-dentists/">Our Team</a></li>
                                    <li><a href="<?php echo $root; ?>about/">Clinic Info</a></li>
                                    <li><a href="<?php echo $root; ?>careers/">Careers</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="menu-item" href="#">Services</a>
                                <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                <ul>
                                    <li>
                                        <a href="<?php echo $root; ?>services/preventative-dentistry/">Preventative Dentistry</a>
                                        <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                        <ul>
                                            <li><a href="<?php echo $root; ?>services/preventative-dentistry/dental-exam/">Dental Examination</a></li>
                                            <li><a href="<?php echo $root; ?>services/preventative-dentistry/gum-care/">Gum Care & Teeth Cleaning</a></li>
                                            <li><a href="<?php echo $root; ?>services/preventative-dentistry/sealants/">Dental Sealants</a></li>
                                            <li><a href="<?php echo $root; ?>services/preventative-dentistry/fluoride/">Fluoride Treatments</a></li>
                                            <li><a href="<?php echo $root; ?>services/preventative-dentistry/oral-cancer-screening/">Oral Cancer Screening</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="<?php echo $root; ?>services/general-dentistry">General Dentistry</a>
                                        <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                        <ul>
                                            <li><a href="<?php echo $root; ?>services/general-dentistry/fillings/">Dental Fillings</a></li>
                                            <li><a href="<?php echo $root; ?>services/general-dentistry/root-canal/">Root Canal</a></li>
                                            <li><a href="<?php echo $root; ?>services/general-dentistry/extractions/">Extractions</a></li>
                                            <li><a href="<?php echo $root; ?>services/general-dentistry/crowns-bridges/">Crowns & Bridges</a></li>
                                            <li><a href="<?php echo $root; ?>services/general-dentistry/pediatric/">Paediatric Dentistry</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="<?php echo $root; ?>services/emergency-dentistry/">Emergency Dentistry</a></li>

                                    <li>
                                        <a href="<?php echo $root; ?>services/cosmetic-dentistry/">Cosmetic Dentistry</a>
                                        <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                        <ul>
                                            <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/teeth-whitening/">Whitening</a></li>
                                            <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/veneers/">Veneers</a></li>
                                            <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/bonding/">Dental Bonding</a></li>
                                            <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/smile-makeover/">Smile Makeover</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="<?php echo $root; ?>services/invisalign/">Clear Aligners</a></li>
                                    <li><a href="<?php echo $root; ?>services/dental-implants/">Dental Implants</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="menu-item" href="<?php echo $root; ?>patients-corner/">Patients Corner</a>
                                <span ><i class="fas fa-chevron-down d-flex d-lg-none"></i></span> 
                                <ul>
                                    <li><a href="<?php echo $root; ?>patients-corner/new-patients/">New Patients</a></li>
                                    <li><a href="<?php echo $root; ?>faq/">FAQ</a></li>
                                </ul>
                            </li>

                            <li><a class="menu-item" href="<?php echo $root; ?>contact/">Contact</a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area d-flex gap-3 align-items-center">
                            <a href="<?php echo $config['ClinicBookingLink']; ?>" class="btn-main fx-slide">
                                <span>Book Appointment</span>
                            </a>
                            <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>" class="btn-main fx-slide btn-outline-white">
                                <span>Call: <?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></span>
                            </a>
                            <div class="d-flex d-md-none mobile-cta">
                                <a aria-label="Link to Booking an Appointment" href="<?php echo $config['ClinicBookingLink']; ?>" class="btn-cta-green">
                                <i class="fs-30 id-color fa-solid fas fa-calendar-alt"></i>
                                    </a>
                                <a href="tel:<?php echo $config['ClinicPhoneNumber']; ?>" aria-label="Link to Call us" class="btn-cta-blue">
                                    <i class="fs-30 id-color fa-solid fa-phone"></i>
                                </a>
                            </div>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
