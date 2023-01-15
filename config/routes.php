<?php
define("ROUTES", [
//Example route format
//# controller:aztrasC view:index
['url'=>'@^home$@', 'name'=>'', 'controller'=>'index', 'view'=>'index'],

//# controller:about view:about
['url'=>'@^home\/$@', 'name'=>'', 'controller'=>'index', 'view'=>'index'],


['url'=>'@^about$@', 'name'=>'about', 'controller'=>'about', 'view'=>'about'],

//# controller:about view:about
['url'=>'@^about\/$@', 'name'=>'about', 'controller'=>'about', 'view'=>'about'],


['url'=>'@^contact$@', 'name'=>'contact', 'controller'=>'contact', 'view'=>'contact'],

//# controller:about view:about
['url'=>'@^contact\/$@', 'name'=>'contact', 'controller'=>'contact', 'view'=>'contact'],

//# controller:aztrasC view:index
['url'=>'@^$@', 'nacome'=>'', 'controller'=>'index', 'view'=>'index'],

//#Passing parameters through route - (?P<parameter-name>\w)
['url'=>'@^services$@', 'name'=>'', 'controller'=>'services', 'view'=>'services'],
['url'=>'@^services/$@', 'name'=>'', 'controller'=>'services', 'view'=>'services'],

['url'=>'@^services/(?P<id>\d+)/$@', 'name'=>'', 'controller'=>'service', 'view'=>'service'],
['url'=>'@^services/(?P<id>\d+)$@', 'name'=>'', 'controller'=>'service', 'view'=>'service'],

['url'=>'@^service$@', 'name'=>'', 'controller'=>'services', 'view'=>'services'],
['url'=>'@^service/$@', 'name'=>'', 'controller'=>'services', 'view'=>'services'],

['url'=>'@^service/(?P<id>\d+)/$@', 'name'=>'', 'controller'=>'service', 'view'=>'service'],
['url'=>'@^service/(?P<id>\d+)$@', 'name'=>'', 'controller'=>'service', 'view'=>'service'],
//Strict for digits
//['url'=>'@^product/(?P<id>\w+)/$@', 'name'=>'', 'controller'=>'admin', 'view'=>'admin/index'],

//Special route for extracting static data from static folder.

//Post request with a reference to the data file and query with reference the data variable being accessed json object to be return
['url'=>'@^api/$@', 'name'=>'', 'controller'=>'api', 'view'=>''],
['url'=>'@^api$@', 'name'=>'', 'controller'=>'api', 'view'=>''],
#end of routes
]);

