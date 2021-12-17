<?php

// $router->register([
//     "" => "controllers/IndexController.php",
//     "about"=> "controllers/AboutController.php",
//     "contact"=> "controllers/ContactController.php",
//     "order"=> "controllers/OrderController.php",
//     "customer"=> "controllers/CustomerController.php",
//     "names"=>"controllers/add-name.php"
// ]);

// Laravel7
// $router->get("", "PagesController@home");
// $router->get("about", "PagesController@about");
// $router->get("contact", "PagesController@contact");
// $router->post("names", "PagesController@createUser");



//Laravel 8
use controllers\PagesController;

$router->get('', [PageController::class,"home"]);
$router->get('about', [PageController::class,"about"]);
$router->get('contact', [PageController::class,"contact"]);
$router->post('names', [PageController::class,"createUser"]);
