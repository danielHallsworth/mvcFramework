<?php

/*
     Purpose of the ProductController class is to get and set a new product and pip the values into productView.php     
  */

class ProductController
{

    public static function product($params)
    {       
    	
    	Product::setProductName($params[1]);    	
    	$ProductName        = Product::getProductName();
    	
    	include 'view/productView.php';
        
    }
}