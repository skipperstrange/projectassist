<?php 
include_once PARTIALS.'sub_header.php'; 
?>
<div class="container">
    <div class="row">
        <?php foreach($services as $index => $service){ ?>
        <div class="col-12 col-sm-6 col-md-4  col-lg-4">
        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
            <span class="thumb-info-wrapper overlay-theme">
                <a href="<?= _link('services&id='.$index)?>" >
                    <img src="<?=$service['icon'];?>" />
                </a>
            </span>
            <span class="thumb-info-title col-7">
                <span class="thumb-info-inner text-5"><?= $service['title']?></span>
            </span>
        </span>
        </div>
        <?php } ?>
    </div>
</div>

<style>
.overlay-theme{
    content: '';
  position: absolute;
  left: 0; top: 0;
  width: 100%; height: 100%;
    background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.7), rgba(117, 19, 93, 0.83)); background-size: cover;"
}

.thumb-info .thumb-info-title  {
    transition: all 0.3s;
    background: none;
    color: #FFF;
    font-weight: 600;
    left: 0;
    letter-spacing: -.05em;
    position: absolute;
    z-index: 2;
    max-width: 90%;
}
</style>
