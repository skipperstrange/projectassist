<?php foreach($captions as $service => $caption): ?>
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