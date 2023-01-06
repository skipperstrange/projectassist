<?= generate_tag_group('css',$revolutionSliderCss); ?>
<?php include PARTIALS.'home-banner.php'; ?>
<?php include_once STATIC_DATA.'site_content.php'; ?>
<?php $service_captions = $data['service_captions_mini']; ?>

<section class="section position-relative border-0 m-0 p-0">
    <div class="container custom-container-background z-index-1 py-5 ">
        <div class="row position-relative z-index-1 pt-5-5">
             <div class="col-sm-12 text-center">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;"><strong> Why Choose Us? </strong></h2>
            </div>
            <div class="col-sm-12 mb-7 text-color-dark text-center  appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                <p class="text-4 mb-5">
                    <?=$data['upraise_note']?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center position-relative z-index-1">
      <?php foreach($service_captions as $service => $caption): ?>
        <div class="col-md-10 col-lg-4  text-center appear-animation mb-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
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

<section class="mb-4 bg-transparent container py-4">
       <div class="container text-center">
        <div class="col-lg-12 mb-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
            <h2 class="pt-5 text-color-dark font-weight-medium "><strong>Why Project Assist Global</strong></h2>
       </div>
       <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                <img src="<?=IMAGES_URL.'quote.png'?>" alt="Quote" srcset="<?=IMAGES_URL.'quote.png'?>">
       </div>
       <div class="col-lg-12 mb-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                <p class="text-4">We are experts and industry leaders in planning and scheduling of small to large scale multi million dollar programmes. With a proven track record of success we provide practical project and programme management solutions for our clients, increasing agility, performance and driving efficiencies throughout organisations.</p>
       </div>
      </div> 
</section>

<!-- Picture blocks -->

<!-- End Pictures Blocks -->
      <?php include PARTIALS.'traits.php'; ?>

      <section class="mb-4 bg-transparent container">
       <div class="container text-center">
        <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                    <h2 class="pt-5 text-color-dark font-weight-medium "><strong>Your 360 Project Management Solution</strong></h2>
        </div>
      </div> 
    </section>
<section id="partners" class="mb-4 bg-transparent container">
        <?php include PARTIALS.'partners.php'; ?>
</section>
