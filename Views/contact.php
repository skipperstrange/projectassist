<?php
include_once STATIC_DATA.'site_content.php';
include_once PARTIALS.'sub_header.php';
?>
<div class="container">
    <div class="row py-4">
        <div class="col-lg-12">
            <h4 class="pt-5"><strong>Contact Us</strong></h4>
            <p class="mb-4 text-4">
                Our team is ready to assist, get in touch today.
            </p>

        </div>        
    </div>
</div>
<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div class="container">
    <div class="row p-0">
        <div class="google-map mt-0 col-sm-12" style="height: 500px;">
            <iframe src="https://maps.google.com/maps?q=TFS%20Building%20Tema%20Community%201&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="500" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-4  text-center">
        <div class="col-lg-4">

            <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <?= STREET_ADDRESS ?></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
            <ul class="list list-icons list-icons-style-2 mt-2">
            <!--li><i class="fas fa-envelope top-6"></i> <a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a></li-->
            <li><i class="fas fa-envelope top-6"></i> <?=ADDRESS?></li>
            </ul>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
            <ul class="list list-icons list-icons-style-2 mt-2">
            <li><i class="fas fa-phone top-6"></i>233 302 213 940</li>
            </ul>
            </div>


        </div>        
    </div>
</div>