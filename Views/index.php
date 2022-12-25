<?= generate_tag_group('css',$revolutionSliderCss); ?>
<?php include PARTIALS.'home-banner.php'; ?>
<?php include STATIC_DATA.'service_captions.php'; ?>
<?php $service_captions = $data['service_captions_mini']; ?>

<section class="section position-relative border-0 m-0 p-0">
    <div class="container custom-container-background z-index-1 py-5">
        <div class="row position-relative z-index-1 pt-5-5">
             <div class="col-sm-12 text-center">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5"><strong> Why Choose Us? </strong></h2>
            </div>
            <div class="col-sm-12 mb-7 text-center">
                <p class="text-4">
                Our capabilities and services complement all phases of the project delivery lifecycle, from the initial planning phase through to the delivery of leading business practices and technology functions.
                </p>
            </div>
        </div>
        <div class="row justify-content-center position-relative z-index-1">
      <?php foreach($service_captions as $service => $caption): ?>
        <div class="col-md-10 col-lg-4  text-center appear-animation mb-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
            <div class="card border-radius-3 transition-2ms box-shadow-1 box-shadow-1-hover">
                        <div class="card-body">
                        <div class="animated-icon animated fadeIn mb-4-5">
                        <img src="<?= $caption['icon'] ?>" class="img-fluid mb-3" style="max-height:60px" />
                        </div>
                        <h3 class="text-color-dark text-transform-none text-4 text-capitalize  mb-3"><?= $caption['title'] ?></h3>
                        <p class="text-3-5 mb-0"><?= $caption['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="partners" class="mb-4 bg-transparent container">
        <?php include PARTIALS.'partners.php'; ?>
</section>

<section id="partners" class="mb-4 bg-transparent container">
       <div class="container">
        
       </div>
</section>