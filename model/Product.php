<?php

/**
* Product class contains two classes. the purpose of this is to manage the products
* getProductName() 
* setProductName($params)
*/

class Product extends AbstractModel
{
	static $productName;
	
	/**
    * gets the product name from the first parameter passed into URL /product/sponge
    * @return string
    */
    public static function getProductName(){    	
    	return self::$productName;
    }    

    /**
    * sets the product name from the first parameter passed into URL /product/sponge
    * @param $params
    */
     public static function setProductName($params){     	
    	self::$productName = $params;
     }
    
}