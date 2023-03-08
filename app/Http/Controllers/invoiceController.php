<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoices');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = []; //Customer::all();
        $products = []; //Meal::all();
        return view('invoice', [
            'customers' => $customers,
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. insert into db
        // $info = $req()->all();
        // dd($req->all());
        $client = json_decode($request->all()["client"], true);
        // dd($client);
        $totalPrice = json_decode($request->all()["totalPrice"], true);
        // dd($totalPrice);
        $date = date('m-d-H:i');
        $code = "cd{$client['id']}-{$totalPrice}-{$date}";
        $bill = Bill::create([
            'invoiceCode' => $code,
            'delivaryFees' => 1,
            'totalPrice' => $totalPrice,
            'customerId' => $client['id'],
        ]);

        $bill = Bill::select()->where('invoiceCode', $code)->first();
        // dd($bill);
        // 2. send info to api
        Http::withHeaders([
            'Authorization' => 'Bearer 2|aqQghWswGXwUAZv2PaD8vGNeZeR7QO8nXLYdYTQK'
        ])->post(config('constants.DELIVERY_SRV_API') . 'orders/add', [
            'companyId' => 1,
            'isPaid' => 1,
            'delivaryFees' => 0,//$bill['delivaryFees'],
            'city' => $client['city'],
            'street' => $client['address_1'],
            'buildingNumber' => 0,
            'floorNumber' => 0,
            'apartmentNumber' => 0,
            'totalPrice' => $totalPrice,
            'orderDate' => "{$bill['created_at']}",
            'clientName' => $client['name'],
            'clientPhone' => $client['phone'],
            'invoiceCode' => $code,
        ]);
        // return $res;
        return redirect('/allinvoices');
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