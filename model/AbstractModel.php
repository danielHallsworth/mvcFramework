<?php

abstract class AbstractModel
{
    
    public static function getCustomer($value){    
        $instance = new static;    
        return $instance->returnCustomer($value);
    }
    

}
