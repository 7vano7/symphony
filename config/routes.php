<?php

namespace Symfony\Component\Routing\Loader\Configurator;

use App\Controller\MainController;

return function (RoutingConfigurator $routes) {
// Matches /blog exactly
$routes->add('home', '/')
->controller([MainController::class, 'home'])
->methods(['GET'])
//->schemes(['https'])
;
// Matches /blog/*
// but not /blog/slug/extra-part
//$routes->add('blog_show', '/blog/{slug}')
//->controller([BlogController::class, 'show'])
//;
};