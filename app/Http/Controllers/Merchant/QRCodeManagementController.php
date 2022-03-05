<?php

namespace App\Http\Controllers\Merchant;

use App\Models\QRCodeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QRCodeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.QRCode.index', $data);
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
     * @param  \App\Models\QRCodeModel  $qRCodeModel
     * @return \Illuminate\Http\Response
     */
    public function show(QRCodeModel $qRCodeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QRCodeModel  $qRCodeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(QRCodeModel $qRCodeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QRCodeModel  $qRCodeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QRCodeModel $qRCodeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QRCodeModel  $qRCodeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(QRCodeModel $qRCodeModel)
    {
        //
    }
}
