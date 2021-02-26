<?php

/**
* the purpose is to provide a template for other classes in the model to inherit this abstract classes methods
*/

abstract class AbstractModel
{

    // Batch classes start    

    /**
    * returns current batch number as an integer
    * @return integer       
    */
    public static function getCurrentBatch(){    	
        $instance = new  static;
    	return $instance->getCurrentBatch();
    }

    /**
    * increments current batch number by 1    
    */
     public static function setNextBatch(){
        $instance = new  static;
     	$instance->setNextBatch();
     }

     // Batch classes end

     

     // Courier classes start    

     /**
    * returns couriers name
    * @return string       
    */
     public static function getCourierName(){

        // Question. which option is bettter
        // option 1. seems better since if the Courier class name changes then you would have to update (new Courier)

        // 1.
        $instance = new  static;
     	return $instance->getCourierName();

        //2.
        //return (new Courier)->setCourierName($params);
     }

    /**
    * sets the couriers name. first value in url parameter courier/(courierName)/algorithm/dataTransport
    * @param $params
    */
     public static function setCourierName($params){
        $instance = new static;
     	$instance->setCourierName($params);
     }

    /**
    * sets the couriers name. first value in url parameter courier/courierName/(algorithm)/dataTransport
    * @param $params
    */
     public static function setAlgorithm($params){
        $instance = new static;
        $instance->setAlgorithm($params);
     }

     /**
    * gets the couriers algorithm for consignment numbers
    * @return string
    */
     public static function getAlgorithm(){
     	$instance = new static;
        return $instance->getAlgorithm();
     }

    /**
    * sets the couriers custom data transport method. third value in url parameter courier/courierName/algorithm/(dataTransport)
    * @param $params
    */ 
     public static function setTransport($params){
        $instance = new static;
        $instance->setTransport($params);
     }

     /**
    * sets the couriers custom data transport method e.g. API
    * @param $params
    */
     public static function getTransport(){
     	$instance = new static;
        return $instance->getTransport();
     }

     
     // Courier classes end



    // Product classes start    

    /**
    * sets the product name using URL parameter
    * @param $params
    */ 
     public static function setProductName($params){
        $instance = new static;
        $instance->setProductName($params);
     }

     /**
    * gets the product name using URL parameter
    * @return string
    */ 
     public static function getProductName(){
     	$instance = new static;
        return $instance->getProductName();
     }

     //Product classes end


    // Movements classes start        

    /**
    * creates a movement by passing in movements/productName/batch/courierName into URL
    * @param $params
    */ 
     public static function storeMovements($params){
        $instance = new static;
        $instance->storeMovements($params);
     }

    /**
    * returns the productName used when creating movement and returns first parameter from url
    * @return string
    */ 
     public static function getMovementProduct(){
        $instance = new static;
        return $instance->getMovementProduct();
     }

    /**
    * returns the batch used when creating movement and returns second parameter from url
    * @return integer
    */ 
     public static function getMovementBatch(){
        $instance = new static;
        return $instance->getMovementBatch();
     }

    /**
    * returns the customer name used when creating movement and returns third parameter from url
    * work to be picked up by another developer is by passing in customer name is to fetch their data transport method and send data to them
    * @return string
    */
     public static function getMovementCourier(){
        $instance = new static;
        return $instance->getMovementCourier();
     }
     
    // Movements classes end

    

}
