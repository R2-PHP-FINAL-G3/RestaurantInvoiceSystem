<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        //validate the input
        $request->validate([
            'Client_Name' => 'required',
            'Email' => 'required|email',
            'Phone' => 'required|max:15',
            'Address' => 'required',
            'Street' => 'required',
        ]);

        //create a new customer
        $customersData = $request->all();
        // dd($customerData);
        $Client_Name = $customersData['Client_Name'];

        // $Rate=$customerData['Rate'];
        $Email = $customersData['Email'];
        $Phone = $customersData['Phone'];

        $Address = $customersData['Address'];

        $newCustomer = Customer::create([
            'name' => $Client_Name,
            'email' => $Email,
            'phone' => $Phone,
            'city' => $Address,
            'street' => $customersData['Street'],

        ]);

        // redirect the user and write friendly message
        return redirect()->route('customers')->with('New customer has been added successfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
