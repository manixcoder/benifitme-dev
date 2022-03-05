<?php

namespace App\Http\Controllers\Merchant;

use App\Models\LoyaltyModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoyaltyManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.invitePeople.index', $data);
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
     * @param  \App\Models\LoyaltyModel  $loyaltyModel
     * @return \Illuminate\Http\Response
     */
    public function show(LoyaltyModel $loyaltyModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoyaltyModel  $loyaltyModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LoyaltyModel $loyaltyModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoyaltyModel  $loyaltyModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoyaltyModel $loyaltyModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoyaltyModel  $loyaltyModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoyaltyModel $loyaltyModel)
    {
        //
    }
}
