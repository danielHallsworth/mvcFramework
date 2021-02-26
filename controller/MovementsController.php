<?php

/**
* Purpose of the MovementsController class is to link the Batch, Product and Courier classes together and create courier movements where the user will pass paramaters of: Courier, Batch and Product. These values would be stored into a database and then later managed to view and send Couriers information about products they have delivered
*
*/

class MovementsController
{

    public static function movements($params)
    {       
    	$movements = Movements::storeMovements($params);
    	$product  = Movements::getMovementProduct();    	    	
    	$batch    = Movements::getMovementBatch();    	    	
    	$courier  = Movements::getMovementCourier();
    	
    	include 'view/movementsView.php';
        
    }
}