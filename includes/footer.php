<footer class="section-dark">
<div class="container">
<div class="row gx-5">
    <div class="col-lg-4 col-sm-6">
        <img src="<?php echo $root; ?>assets/images/logo-white.webp" class="logo-footer" alt="" >
        <div class="spacer-20"></div>
        <p>At Crossroads Dental, we’re dedicated to providing high-quality, personalized dental care for patients of all ages. Our skilled team uses the latest technology to ensure comfortable, efficient treatments and beautiful, healthy smiles for life.</p>
        <div class="social-icons mb-sm-30">
            <a href="<?php echo $config['ClinicFacebook'] ?: 'https://www.facebook.com/'; ?>" target="_blank" aria-label="Facebook">
            <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://twitter.com/login" target="_blank" aria-label="Twitter Login">
            <i class="fa-solid fa-x fa-brands"></i>
            </a>
            <a href="<?php echo $config['ClinicInstagram'] ?: 'https://www.instagram.com/accounts/login/'; ?>" target="_blank" aria-label="Instagram Login">
            <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://accounts.google.com/ServiceLogin?service=youtube" target="_blank" aria-label="YouTube Login">
            <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="https://web.whatsapp.com/" target="_blank" aria-label="WhatsApp Web">
            <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="widget">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="<?php echo $root; ?>">Home</a></li>
                        <li><a href="<?php echo $root; ?>cdcp/">CDCP</a></li>
                        <li><a href="<?php echo $root; ?>about/">About Us</a></li>
                        <li><a href="<?php echo $root; ?>our-dentists/">Our Team</a></li>
                        <li><a href="<?php echo $root; ?>about/clinic-info/">Clinic Info</a></li>
                        <li><a href="<?php echo $root; ?>careers/">Careers</a></li>
                        <li><a href="<?php echo $root; ?>contact/">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="widget">
                    <h5>Our Services</h5>
                    <ul>
                        <li><a href="<?php echo $root; ?>services/preventative-dentistry/">Preventative Dentistry</a></li>
                        <li><a href="<?php echo $root; ?>services/general-dentistry/">General Dentistry</a></li>
                        <li><a href="<?php echo $root; ?>services/emergency-dentistry/">Emergency Dentistry</a></li>
                        <li><a href="<?php echo $root; ?>services/cosmetic-dentistry/">Cosmetic Dentistry</a></li>
                        <li><a href="<?php echo $root; ?>services/invisalign/">Clear Aligners (Invisalign)</a></li>
                        <li><a href="<?php echo $root; ?>services/dental-implants/">Dental Implants</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
        <div class="widget">
            <h5>Contact Us</h5>
            <a href="<?php echo $config['ClinicMapLink'] ?: 'https://www.google.com/maps/'; ?>" target="_blank" class="text-white text-decoration-none d-block fw-bold">
                <i class="fa-solid fa-location-dot me-2 id-color fs-14"></i>
                Clinic Location
                <div class="fw-normal text-white ms-4"><?php echo $config['ClinicAddress'] ?: '2384 Dundas St W'; ?></div>
            </a>
            <div class="spacer-20"></div>
            <a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>" class="text-white text-decoration-none d-block fw-bold">
                <i class="fa-solid fa-phone me-2 id-color fs-14"></i>Call Us
                <div class="fw-normal text-white ms-4"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></div>
            </a>
            <div class="spacer-20"></div>
            <a href="mailto:<?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?>" class="text-white text-decoration-none d-block fw-bold">
                <i class="fa fa-envelope me-2 id-color fs-14"></i>Send a Message
                <div class="fw-normal text-white ms-4"><?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?></div>
            </a>
        </div>
    </div>
</div>
</div>
<div class="subfooter">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="de-flex">
                <div class="de-flex-col">
                    Copyright 2025 - Crossroads Dental Clinic
                </div>
                <ul class="menu-simple">
                    <li><a href="<?php echo $root; ?>terms/">Terms &amp; Conditions</a></li>
                    <li><a href="<?php echo $root; ?>Privacy-policy/">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</footer>
<div id="extra-wrap" class="text-light">
<div id="btn-close">
<span></span>
<span></span>
</div>
<div id="extra-content">
<img src="<?php echo $root; ?>assets/images/logo-white.webp" class="w-150px" alt="">
<div class="spacer-30-line"></div>
<h5>Our Services</h5>
<ul class="ul-check">
<li><a href="<?php echo $root; ?>services/preventative-dentistry/">Preventative Dentistry</a></li>
<li><a href="<?php echo $root; ?>services/general-dentistry/">General Dentistry</a></li>
<li><a href="<?php echo $root; ?>services/emergency-dentistry/">Emergency Dentistry</a></li>
<li><a href="<?php echo $root; ?>services/cosmetic-dentistry/">Cosmetic Dentistry</a></li>
<li><a href="<?php echo $root; ?>services/invisalign/">Clear Aligners (Invisalign)</a></li>
<li><a href="<?php echo $root; ?>services/dental-implants/">Dental Implants</a></li>
</ul>
<div class="spacer-30-line"></div>
<h5>Contact Us</h5>
<div><i class="fa-solid fa-clock me-2 op-5"></i>Monday - Friday 08.00 - 18.00</div>
<div><i class=" fa-solid fa-location-dot me-2 id-color fs-14 me-2 op-5"></i><?php echo $config['ClinicAddress'] ?: '2384 Dundas St W'; ?> </div>
<div><i class="fa-solid fa fa-envelope me-2 id-color fs-14 me-2 op-5"></i><?php echo $config['ClinicEmail'] ?: 'info@crossroadsdental.ca'; ?> </div>
<div class="spacer-30-line"></div>
<h5>About Us</h5>
<p>At Crossroads Dental, we’re dedicated to providing high-quality, personalized dental care for patients of all ages. Our skilled team uses the latest technology to ensure comfortable, efficient treatments and beautiful, healthy smiles for life.</p>
<div class="social-icons">
<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
<a href="#"><i class="fa-brands fa-instagram"></i></a>
<a href="#"><i class="fa-brands fa-youtube"></i></a>
<a href="#"><i class="fa-brands fa-whatsapp"></i></a>
</div>
</div>
</div>