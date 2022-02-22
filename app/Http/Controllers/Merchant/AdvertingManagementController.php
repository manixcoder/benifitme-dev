<?php

namespace App\Http\Controllers\Merchant;

use App\Models\MerchentAdvertings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Auth;
use DB;

class AdvertingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.adverting.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.adverting.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'ad_title'             => 'required',
            'ad_product'             => 'required',
            'product_url'             => 'required',
            'banner_image'             => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {

            $addData =  MerchentAdvertings::create([
                'merchent_id' => Auth::user()->id,
                'ad_title'  => $request->has('ad_title') ? $request->ad_title : '',
                'ad_product'  => $request->has('ad_product') ? $request->ad_product : '',
                'product_url'  => $request->has('product_url') ? $request->product_url : '',

            ]);
            if ($request->hasFile('banner_image')) {
                $product = MerchentAdvertings::find($addData->id);
                $file = $request->file('banner_image');
                $filename = 'banner_image-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('public/uploads/', $filename);
                $product->banner_image = $filename;
                $product->save();
            }
            return redirect('/merchant/adverting-management')->with(['status' => 'success', 'message' => 'New adds added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MerchentAdvertings  $adverting
     * @return \Illuminate\Http\Response
     */
    public function show(MerchentAdvertings $adverting, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MerchentAdvertings  $adverting
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchentAdvertings $adverting, $id)
    {
       // dd($id);
        $data = array();
        $data['addsData']=MerchentAdvertings::find($id);
        return view('merchent.adverting.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MerchentAdvertings  $adverting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchentAdvertings $adverting, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MerchentAdvertings  $adverting
     * @return \Illuminate\Http\Response
     */
    public function destroy(MerchentAdvertings $adverting, $id)
    {
        MerchentAdvertings::find($id)->delete();
        return redirect('/merchant/adverting-management')->with(['status' => 'success', 'message' => 'Delete Successfully!']);
    }
}
