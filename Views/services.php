<?php 
include_once PARTIALS.'sub_header.php'; 
$services = $data['services']; 
?>
<div class="container">
    <div class="row">
        <?php foreach($services as $service){ ?>
        <div class="col-12 col-sm-6 col-md-4  col-lg-4">
        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
            <span class="thumb-info-wrapper">
                <a href="#" >
                    <img src="<?=$service['icon'];?>" />
                    <span class="thumb-info-title col-7">
                        <span class="thumb-info-inner text-4"><?= $service['title']?></span>
                    </span>
                </a>
            </span>
        </span>
        </div>
        <?php } ?>
    </div>
</div>
