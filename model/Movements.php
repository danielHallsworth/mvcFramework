<?php

/**
* Movements class contains the classes. the purpose of this is to create a courier movement, containing the courier, product and batch
* This class needs additional work to implement the ability the send data to couriers 
* getProductName() 
* setProductName($params)
*/

class Movements extends AbstractModel
{
	
	static $storeMovements;	
	static $splitUrl;
	
    
    /**
    * create a movement by passing paramaters into URL. /movements/product/batch/courier
    * @param $params
    */	
	public static function storeMovements($params){

  	    // this is used to split the URL into 3 paramaters. storeParamaters array needs work to be an insert statement into the database
		self::$splitUrl = explode("/",$params[1]);
		self::$storeMovements = [self::$splitUrl[0], self::$splitUrl[1], self::$splitUrl[2]];		
	}

	/**
    * get the product name for the movement. this needs work to query the database
    * @return string
    */	
    public static function getMovementProduct(){    	    	

    	return self::$storeMovements[0];
    }    

    /**
    * get the batch number for the movement. this needs work to query the database
    * @return integer
    */	
    public static function getMovementBatch(){    	    	
    	return self::$storeMovements[1];
    }    

    /**
    * get the courier who performed the the movement. this needs work to query the database
    * @return string
    */	
     public static function getMovementCourier(){    	     	
    	return self::$storeMovements[2];
    }    
    
}