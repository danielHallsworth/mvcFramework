<?php
/*
* Courier class has functions managing information about Couriers and nothing else
* Work to be picked up on this class is to link the functions to a Database and return information this way  from using Courier ID* 
* getCourierName() 
* setCourierName($params)
* getAlgorithm()
* setAlgorithm($params)
* getTransport()
* setTransport($params)
*/

class Courier extends AbstractModel
{

	static $courierName;
	static $algorithm;
	static $transport;

	/**
    * returns the courier name from first parameter passed into URL /courier/(hermes)/HERM1/API
    * @return string
    */
    public static function getCourierName(){    	
    	return self::$courierName;
    } 

    /**
    * sets courier name from first parameter passed into URL /courier/(hermes)/HERM1/API
    * @param $params
    */
     public static function setCourierName($params){     	
    	self::$courierName = $params;
     }

    /**
    * returns the courier custom algorithm for consignment numbers from second parameter passed into URL /courier/hermes/(HERM1)/API
    * @return string
    */
     public static function getAlgorithm(){
     	return self::$algorithm;
     }

     /**
    * sets the courier custom algorithm for consignment numbers from second parameter passed into URL /courier/hermes/(HERM1)/API
    * @param $params
    */
     public static function setAlgorithm($params){
     	self::$algorithm = $params;
     }


    /**
    * returns the courier data transport method from third parameter passed into URL /courier/hermes/HERM1/(API)
    * @return string
    */
     public static function getTransport(){
     	return self::$transport;
     }

    /**
    * sets the courier data transport method from third parameter passed into URL /courier/hermes/HERM1/(API)
    * @param $params
    */
     public static function setTransport($params){
     	self::$transport = $params;
     }

    
}