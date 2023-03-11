<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class deliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $deliveryGuys = [];
        $count = 0;

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . config('constants.API_KEY')
        ])->get(config('constants.DELIVERY_SRV_API') . 'deliverystaff');

        $deliveryGuys = json_decode($response->body(), true);
        // dd($deliveryGuys);
        return view('deliveryguys', ['deliveryGuys' => $deliveryGuys, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deliveryguy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user-name' => 'required',
            'national-id' => 'required',
            'phone' => 'required',
            'salary' => 'required',
            'password' => 'required',
            'motor-num' => 'required',
            'email' => 'required|email',
        ]);
        $info = $request->all();
        // send info to api
        Http::withHeaders([
            'Authorization' => 'Bearer ' . config('constants.API_KEY')
        ])->post(config('constants.DELIVERY_SRV_API') . 'deliverystaff/add', [
            'name' => $info['name'],
            'user-name' => $info['user-name'],
            'national-id' => $info['national-id'],
            'phone' => $info['phone'],
            'salary' => $info['salary'],
            'password' => $info['password'],
            'motor-num' => $info['motor-num'],
            'email' => $info['email'],
        ]);
        return redirect('deliveryguys');
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
