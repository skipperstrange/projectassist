<?php include_once STATIC_DATA.'services.php'; ?>
<?php  $traits = $data['traits']; ?>
<?php foreach ($traits as $index => $value): 
    $bg_position = ((($index+2)%2)+1);
?>
<div class="row">
    <div class="col-lg-6 col-md-6 p-0 <?php if($bg_position === 2): echo "order-lg-2"; else: echo  "order-lg-1"; endif; ?>">
        <section class="section m-0 border-0  appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" 
        style="animation-delay: 100mshidden;padding:0;background-image:url(<?=$value['icon']?>); 
        height: 100%; background-repeat:no-repeat;
        background-size:cover;">
          
        </section>
    </div>

    <div class="col-lg-6 col-md-6 p-0 <?php if($bg_position === 1): echo "order-lg-2"; else: echo  "order-lg-1"; endif; ?>">
        <section class="section  m-0 border-0">
            <div class="row m-0 mt-lg-5 pt-lg-0">
                <div class="col-half-section mb-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <h3 class="strong text-6"><?=$traits[$index]['title'];?></h3>
                    <p><?= $traits[$index]['description'] ?></p>
                </div>
            </div>
        </section>
    </div>
</div>
<?php endforeach; ?>