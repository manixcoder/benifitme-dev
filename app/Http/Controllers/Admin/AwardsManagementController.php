<?php

namespace App\Http\Controllers\Admin;

use App\Models\AwardModel;
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
        return view('admin.awards.index', $data);
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
     * @param  \App\Models\AwardModel  $awardModel
     * @return \Illuminate\Http\Response
     */
    public function show(AwardModel $awardModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwardModel  $awardModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardModel $awardModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwardModel  $awardModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwardModel $awardModel, $id)
    {
        $validator = Validator::make($request->all(), array(
            'regular_visitor'       => 'required',
            'visitor_points'        => 'required',
            'big_spender'           => 'required',
            'spendor_point'         => 'required',
            'sharing_app_points'    => 'required',

        ));
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $awardData = AwardModel::find($id);
            $updateData = array(
                "regular_visitor" => $request->has('regular_visitor') ? $request->regular_visitor : $awardData->regular_visitor,
                "visitor_points" => $request->has('visitor_points') ? $request->visitor_points : $awardData->visitor_points,
                "big_spender" => $request->has('big_spender') ? $request->big_spender : $awardData->big_spender,
                "spendor_point" => $request->has('spendor_point') ? $request->spendor_point : $awardData->spendor_point,
                "sharing_app_points" => $request->has('sharing_app_points') ? $request->sharing_app_points : $awardData->sharing_app_points,

            );
            $awardData->update($updateData);
            return redirect('/admin/awards-management')->with(array('status' => 'success', 'message' => 'Update record successfully.'));
        } catch (\exception $e) {
            return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwardModel  $awardModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwardModel $awardModel)
    {
        //
    }
}
