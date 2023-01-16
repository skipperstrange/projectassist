<?php

$navLinks = [
    'home'=>['href'=>  WEB_URL],
    'about_us' => ['href'=>_link('about')],
    'services' => ['href'=>_link('service')],
    'clients' => ['href'=>_link('portfolio')],
    'contact' => ['href'=>_link('contact')],
    
];

$buttonLinks = [
    
];

//Social media Links - top of navbar
$data['socialMediaLinks'] = [
    ['href'=>LINKEDIN, 'icon'=>'fab fa-linkedin', 'title'=>'linkedin'],
    ['href'=>FACEBOOK, 'icon'=>'fab fa-facebook', 'title'=>'facebook'],
    ['href'=>INSTAGRAM, 'icon'=>'fab fa-instagram', 'title'=>'instagram'],
    ['href'=>TWITTER, 'icon'=>'fab fa-twitter', 'title'=>'twitter'],
];