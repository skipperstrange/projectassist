<?= generate_tag_group('css',$revolutionSliderCss); ?>
<?php include PARTIALS.'home-banner.php'; ?>


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
            <?php include PARTIALS.'caption_cards.php'; ?>
        </div>
    </div>
</section>
<section class="mb-4 bg-transparent container">
       <div class="container text-center">
        <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                    <h2 class="pt-5 text-color-dark font-weight-medium "><strong>Your 360 Project Management Solution Provider</strong></h2>
        </div>
      </div> 
    </section>
<section id="partners" class="mb-4 bg-transparent container">
        <?php include PARTIALS.'partners.php'; ?>
</section>


<!-- Picture blocks -->
<?php include PARTIALS.'traits.php'; ?>

<!-- End Pictures Blocks -->

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

     

