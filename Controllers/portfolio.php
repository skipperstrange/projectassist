<?php
include_once STATIC_DATA.'site_content.php';
include_once STATIC_DATA.'partners.php';
include_once STATIC_DATA.'sectors.php';
include_once STATIC_DATA.'case_study.php';

$case_study = $data['case_study']; 
$captions = $data['sectors']; 
$affiliates = $data['partners'];
$headerTitle = 'Clients';
$headerDescription = '';
$pageTitle = 'Portfolio';
$headerBackground = IMAGES_URL.'sub-banner-1.jpg' ;