<?php

declare(strict_types=1);

use App\Application\Middleware\SessionMiddleware;
//use Cherif\InertiaPsr15\Middleware\InertiaMiddleware;
use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $app->add(SessionMiddleware::class);
//    $app->add(InertiaMiddleware::class);
    $twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);
// Add Twig-View Middleware
    $app->add(TwigMiddleware::create($app, $twig));

};
