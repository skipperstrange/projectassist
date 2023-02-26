<?php
include_once PARTIALS.'sub_header.php'; 
?>
<section class="position-relative border-0 m-0 p-0">
    <div class="container custom-container-background z-index-1 py-5 ">
        <div class="row position-relative z-index-1 pt-5-5">
            <h2 class="font-weight-bold"><?=$service_info['title']?></h2>
<?php
if(file_exists($service_info_file)){
    include $service_info_file;
}
elseif($service_info['home_redirect'] === true){
    redirect_to('','');
}
else{
    echo "<div class=\"mt-4 col-12\"><h1>Service Information Unavailable</h1></div>";
}
?>
        </div>
    </div>
</section>