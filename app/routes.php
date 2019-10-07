<?php
$routes = [];

$routes['/']= function (){
    include __DIR__.'/../view/index.phtml';
};
$routes['/phpinfo.php'] = function () {
    phpinfo();
};
return $routes;