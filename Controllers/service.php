<?php
//checking if a get request has been set. (p or post to check POST requests, g or get to check GET requests)
$service_id = $_GET['id'];
include_once STATIC_DATA.'services.php';
$services = $data['services']; 
$service_info = $services[$service_id];
$service_info_file = PARTIALS.'services'.DS.'_'.$service_id.'.php';



$headerTitle = $service_info['title'];
$headerDescription = '';
$pageTitle = $headerTitle;
$headerBackground = IMAGES_URL.'sub-banner-1.jpg' ;