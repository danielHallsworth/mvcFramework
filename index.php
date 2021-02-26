<?php
/**
 * This is the Front Controller.
 * The Front Controller decides which action to run.
 *
 * This particular Front Controller defines a route table,
 * defines which URLs map
 * 
 */

require_once 'vendor/autoload.php';

// Define the routes table. syntax goes Controller/class
$routes = array(   
   '/\/batch\/(.+)/' => array('BatchController', 'batch')
  ,'/\/courier\/(.+)/' => array('CourierController', 'courier') 
  ,'/\/product\/(.+)/' => array('ProductController', 'product') 
  ,'/\/movements\/(.+)/' => array('MovementsController', 'movements') 
);

// Decide which route to run
foreach ($routes as $url => $action) {

    // See if the route matches the current request
    $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);


    // If it matches...
    if ($matches > 0) {


        // Run this action, passing the parameters.        
        $controller = new $action[0];
        $controller->{$action[1]}($params);

        break;
    }
}

