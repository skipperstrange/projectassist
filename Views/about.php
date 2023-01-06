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