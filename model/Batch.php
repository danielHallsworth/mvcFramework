<?php

/**
* Batch class contains two classes. the purpose of this is to manage the batch number and nothing else
* getCurrentBatch() 
* setNextBatch()
*/

class Batch extends AbstractModel
{
	static $batchId = 0;

	/**
    * returns current batch number as an integer
    * @return integer       
    */
    public static function getCurrentBatch(){    	
    	return self::$batchId; // use instead of $this in static functions
    }    

    /**
      * increments current batch number by 1
      * @return integer       
    */
     public static function setNextBatch(){     	
    	return self::$batchId++;
     }
    
}