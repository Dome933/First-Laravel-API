<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersApiController extends Controller
{
    public function index() 
    {
        return Customer::all();
    }

    public function addNewCustomer()
    {
        Customer::validateInputData();

        $input_data = Customer::getInputData();
        
        return Customer::create($input_data);
    }

    public function updateCustomer(Customer $customer)
    {
        Customer::validateInputData();

        $input_data = Customer::getInputData();
        $success = $customer->update($input_data);

        return Customer::showResponseStatus($success);
    }

    public function deleteCustomer(Customer $customer)
    {
        $success = $customer->delete();

        return Customer::showResponseStatus($success);
    }
}
