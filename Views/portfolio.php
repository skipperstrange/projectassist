<?php 
include_once PARTIALS.'sub_header.php'; 
?>

<section class="position-relative border-0 m-0 p-0">
    <div class="container custom-container-background justify-content-center z-index-1 py-5 ">
        <div class="row position-relative  z-index-1 pt-5-5">
             <div class="col-sm-12">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                    <strong>Clients</strong>
                </h2>
            </div>
        </div>
        <div class="row mt-4">
                        <div class="content-grid content-grid-dashed col mt-4 mb-4">
                            <div class="row content-grid-row">
                                <?php foreach($affiliates as $partner): ?>
                                <div class="content-grid-item col-sm-4 text-center">
                                    <div class="p-4">
                                        <img class="img-fluid" style="max-width:118px;" src="<?= $partner['logo'] ?>" alt="">
                                    
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
    </div>
</section>


<section class="position-relative border-0 m-0 p-0">
    <div class="container custom-container-background justify-content-center z-index-1 py-5 ">
        <div class="row position-relative  z-index-1 pt-5-5">
             <div class="col-sm-12">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                    <strong>Sectors</strong>
                </h2>
            </div>

            <div class="col-sm-12 mb-7 text-color-dark appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                <p class="text-4 mb-5">
                Since industry environments differ, we concentrate on areas in which we have seasoned, specialist knowledge offering custom solutions built specifically for your business:
                </p>
            </div>
        </div>
        <div class="row justify-content-center position-relative z-index-1 my-4">
            <?php include PARTIALS.'caption_cards.php'; ?>
        </div>

        <div class="col-sm-12">
                <h2 class="text-color-dark font-weight-medium text-8 mb-5-5 appear-animation animated  fadeInUpShorter appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                    <strong>Case Studies</strong>
                </h2>
            </div>

        <div class="row mb-5 pb-3">
            <?php 
            foreach($case_study as $context){
            ?>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                    <span class="thumb-info-wrapper overlay-theme">
                    <img class="card-img-top" src="<?=$context['icon']?>" alt="<?=$context['title']?>">
                    </span>
                    <span class="thumb-info-title col-7">
                        <span class="thumb-info-inner text-3"><?=$context['title']?></span>
                    </span>
                </span>
                    
                    <div class="card-body pt-0 mt-0">
                        <p class="card-text text-2"><?=$context['description']?></p>
                        <!--a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a-->
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

