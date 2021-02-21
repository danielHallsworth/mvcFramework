<?php

class CustomerController
{
    
    public function customerName($params)
    {       
        $customer  = Customer::getCustomer($params[1]);
        include 'view/accountView.php';
    }
}

