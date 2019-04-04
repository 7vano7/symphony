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

$routes->add('about', '/about')->controller([MainController::class, 'about'])->methods(['GET']);
$routes->add('factory', '/factory')->controller([MainController::class, 'factory'])->methods(['GET']);
$routes->add('production', '/production')->controller([MainController::class, 'production'])->methods(['GET']);
$routes->add('dostavka', '/dostavka')->controller([MainController::class, 'dostavka'])->methods(['GET']);
$routes->add('contacts', '/contacts')->controller([MainController::class, 'contacts'])->methods(['GET']);


// Matches /blog/*
// but not /blog/slug/extra-part
//$routes->add('blog_show', '/blog/{slug}')
//->controller([BlogController::class, 'show'])
//;
};