
   <?php include STATIC_DATA.'partners.php';?>
   <?php $partners = $data['partners']; ?>
    <div class="row mt-4 justify-content-center pt-3">
    <?php foreach($partners as $partner):?>
        <div class="content-grid-item col-sm-2 text-center">
            <div class="p-4">
                <img class="img-fluid" title="<?=$partner['title']?>" style="max-width:118px;" src="<?=$partner['logo']?>" alt="">
            </div>
        </div>
    <?php endforeach;?>
    </div>
