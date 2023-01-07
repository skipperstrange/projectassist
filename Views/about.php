<?php include_once STATIC_DATA.'site_content.php';
include_once PARTIALS.'sub_header.php'; 
$captions = $data['about_traits']; 
?>
<section class="position-relative border-0 m-0 p-0">
    <div class="container custom-container-background z-index-1 py-5 ">
        <div class="row position-relative z-index-1 pt-5-5">
             <div class="col-sm-12 text-center">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;"><strong> Why Project Assist</strong></h2>
            </div>
            <div class="col-sm-12 mb-7 text-color-dark text-center  appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                <p class="text-4 mb-5">
                    <?=$data['brief_history']?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center position-relative z-index-1">
            <?php include PARTIALS.'caption_cards.php'; ?>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-lg-6 col-md-6 p-0 order-lg-2">
        <section class="section m-0 border-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="padding: 0px; background-image: url('<?=IMAGES_URL?>business_change.jpg'); height: 100%; background-repeat: no-repeat; background-size: cover; animation-delay: 100ms;">
          
        </section>
    </div>

    <div class="col-lg-6 col-md-6 p-0 order-lg-1">
        <section class="section  m-0 border-0">
            <div class="row m-0 mt-lg-5 pt-lg-0">
                <div class="col-half-section mb-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <h3 class="text-5 text-primary"><strong>Simulate business change</strong></h3>
                    <p>
                    In a rapidly evolving, highly competitive global market your business must be able to respond to change quickly and effectively. Flexibility and agility are no longer differentiators, to remain at the top of your field your business must take ownership to lead the change – Project Assist has the skills, expertise and experience to help.

                    </p>
                    </div>
            </div>
        </section>
    </div>
</div>

<section class="position-relative border-0 m-0 p-0">
    <div class="container custom-container-background z-index-1 py-5 ">
        <div class="row position-relative z-index-1 pt-5-5">
             <div class="col-sm-12 text-center">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;"><strong> Our Mission</strong></h2>
            </div>
            <div class="col-sm-12 mb-7 text-color-dark text-center  appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                <p class="text-4 mb-5">
                    <?=$data['mission']?>
                </p>
            </div>
        </div>
    </div>
</section>