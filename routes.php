<?php

// $router->register([
//     "" => "controllers/IndexController.php",
//     "about"=> "controllers/AboutController.php",
//     "contact"=> "controllers/ContactController.php",
//     "order"=> "controllers/OrderController.php",
//     "customer"=> "controllers/CustomerController.php",
//     "names"=>"controllers/add-name.php"
// ]);


$router->get("", "PagesController@home");
$router->get("about", "PagesController@about");
$router->get("contact", "PagesController@contact");
$router->post("names", "PagesController@createUser");
