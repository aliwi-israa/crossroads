<div class="popup-overlay" id="popupOverlay"></div>
<div class="popup" id="promoPopup">
    <div class="row">
        <div class="col-7 img-section">
            <picture>
            <source srcset="<?php echo $root; ?>assets/images/homepage/popup-480.webp" media="(max-width: 600px)">
            <source srcset="<?php echo $root; ?>assets/images/homepage/popup-768.webp" media="(max-width: 992px)">
            <img src="<?php echo $root; ?>assets/images/homepage/popup-1280.webp" class="promo-img" loading="lazy" alt="Dental Promo Image">
            </picture>
        </div>
        <div class="col-5 text-section">
            <button type="button" class="close-btn float-end" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="mt-4 mb-5">Welcome to Your New Dental Home</h3>
            <p class="my-3">
                Take the first step toward a healthier smile with our $99 New Patient Special.
                <br/>
                <span class="mt-1">We’re here to make your visit easy, affordable, and all about you.<span>
            </p>
              <div class="col-lg-12 mt-5 text-center">
                <a class="btn-secondary fx-slide btn-rounded" href="services.html"><span>Book Appointment Today</span></a>
                <p>or Call<a href="tel:<?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?>"><?php echo $config['ClinicPhoneNumber'] ?: '(+1) 234-5678'; ?></a></p>
                </div>
            </div>
        </div>
    </div>