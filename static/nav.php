<?php

$navLinks = [
    'home'=>['href'=>  WEBSITE],
    'about_us' => ['href'=>_link('about')],
    'our_service' => ['href'=>_link('service')],
    'clients' => ['href'=>_link('clients')],
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