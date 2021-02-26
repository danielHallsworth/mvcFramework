<?php

/**
* Purpose of the CourierController class is to create a new courier and pipe the values into the courierView
*
*/

class CourierController
{

    public static function courier($params)
    {       
    	// this is used to split the URL parameters e.g. /courier/hermes/london (this would capture hermes for account name)
    	// this could possibly be done a better way. work to be picked up by another developer
    	$splitUrl = explode("/",$params[1]);
    	
    	
    	Courier::setCourierName($splitUrl[0]);
    	Courier::setAlgorithm($splitUrl[1]);
    	Courier::setTransport($splitUrl[2]);

    	$courierName        = Courier::getCourierName();
    	$courierAlgorithm   = Courier::getAlgorithm();
    	$courierTransport   = Courier::getTransport();
    	
    	include 'view/courierView.php';
        
    }
}