<?php

namespace App\Services;




use App\Models\Customers;
use App\Models\User;


class CustomersService
{


    protected $table = 'registrations';


    public function store($data){

        customers::insertcustomer($data);
    }


    public function getAllCustomers()
    {
        return Customers::all();
    }

    public  function getDetail($id){
        
        return Customers::findorfail($id);

    }

    public function show(string $customerId)
    {
        return Customers::getAllCustomersAttributes($customerId);
    }



}









?>