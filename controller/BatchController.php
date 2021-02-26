<?php

/*
     Purpose of the BatchController class is to get and set batch numbers and pipe the values into batchView.php     
  */

class BatchController
{

  

    public static function batch($params)
    {   
       // used to split the URL parameters into an array. 
       $splitUrl = explode("/",$params[1]);  

       // if user passes /batch/set this will increment by the batch number by 1
       if ($splitUrl[0] == 'set'){
        /**        
        * increment the current batch number by 1        
        */
       	Batch::setNextBatch();
       }
    	
      
      /**
      * returns current batch number as an integer
      * @return integer       
      */
    	$batch  = Batch::getCurrentBatch();
    	
    	include 'view/batchView.php';
        
    }
}

