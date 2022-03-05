<?php

namespace App\Http\Controllers\Merchant;

use App\Models\CustomerJounery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerJouneryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.customerJounery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerJounery  $customerJounery
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerJounery $customerJounery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerJounery  $customerJounery
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerJounery $customerJounery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerJounery  $customerJounery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerJounery $customerJounery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerJounery  $customerJounery
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerJounery $customerJounery)
    {
        //
    }
}
