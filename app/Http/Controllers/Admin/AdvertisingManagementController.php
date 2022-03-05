<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Validator;
use App\Models\Adverting;
use App\Models\Advertings;

class AdvertisingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('admin.advertising.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('admin.advertising.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'ad_name' => 'required',
            'link' => 'required',
            //'ad_image' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            if ($file = $request->file('ad_image')) {
                $destinationPath = base_path('public/uploads/');
                $ad_image = uniqid('file') . "-" . $file->getClientOriginalName();
                $path = $file->move($destinationPath, $ad_image);
            } else {
                $ad_image = '760614_1.jpg';
            }

            $userData = Advertings::create([
                'ad_name' => $request->has('ad_name') ? $request->ad_name : '',
                'link' => $request->has('link') ? $request->link : '',
                'ad_image' => $ad_image,
            ]);
            return redirect('/admin/advertising-management')->with(['status' => 'success', 'message' => 'New advertising added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        foreach (Advertings::lazy() as $flight) {
            dd($flight);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertings  $Advertings
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertings  $Advertings, $id)
    {
        Advertings::find($id)->delete();
        return redirect('/admin/advertising-management')->with(['status' => 'success', 'message' => 'Advertising Delete Successfully!']);
    }
}
