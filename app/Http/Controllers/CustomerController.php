<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers=Customer::all();
        return view('customers.index')->with('customers',$customers);
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('customers.index')->with('success','Customer Added Succesfully');
    }
    public function show(Customer $customer)
    {
        return view('customers.show')->with('customer',$customer);
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit')->with('customer',$customer);

    }
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('customers.index')->with('success','Customer Edited Succesfully');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Customer Deleted Succesfully');
    }
}