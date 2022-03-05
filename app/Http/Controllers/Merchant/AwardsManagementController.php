<?php

namespace App\Http\Controllers\Merchant;

use App\Models\AwardsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class AwardsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['awards'] = AwardsModel::get();

        return view('merchent.awards.index', $data);
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
     * @param  \App\Models\AwardsModel  $awardsModel
     * @return \Illuminate\Http\Response
     */
    public function show(AwardsModel $awardsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwardsModel  $awardsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardsModel $awardsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwardsModel  $awardsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwardsModel $awardsModel, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), array(
            'regular_visitor'       => 'required',
            'visitor_points'        => 'required',
            'big_spender'           => 'required',

        ));
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $awardData = AwardsModel::find($id);
            $updateData = array(
                "regular_visitor" => $request->has('regular_visitor') ? $request->regular_visitor : $awardData->regular_visitor,
                "visitor_points" => $request->has('visitor_points') ? $request->visitor_points : $awardData->visitor_points,
                "big_spender" => $request->has('big_spender') ? $request->big_spender : $awardData->big_spender,


            );
            $awardData->update($updateData);
            return redirect('/merchant/awards-management')->with(array('status' => 'success', 'message' => 'Update record successfully.'));
        } catch (\exception $e) {
            return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwardsModel  $awardsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwardsModel $awardsModel)
    {
        //
    }
}
