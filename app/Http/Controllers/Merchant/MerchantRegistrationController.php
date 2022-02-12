<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Auth;
use App\Models\UserRoleRelation;
use Yajra\Datatables\Datatables;


class MerchantRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function profileShow(Request $request)
    {
        return view('merchent.profile.profile_update');
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
            'company_name'          => 'required',
            'company_type'          => 'required',
            'sub_restaurant_type'   => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'zip_code'              => 'required',
            'uid_number'            => 'required',
            'user_type'             => 'required',
            'first_name'            => 'required',
            'last_name'             => 'required',
            'date_birthday'         => 'required',
            'gender'                => 'required',
            'email'                 => 'required|string|max:255|unique:users',
            'mobile'                => 'required',
            'password'              => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            if ($request->gender == '1') {
                $profile_image = 'boy.png';
            } else if ($request->gender == '2') {
                $profile_image = 'woman.png';
            } else {
                $profile_image = 'user.png';
            }

            //dd($request->all());
            $companyData = User::create([
                'user_role'                 => 2,
                'company_name'              => $request->has('company_name') ? $request->company_name : '',
                'company_type'              => $request->has('company_type') ? $request->company_type : '',
                'sub_restaurant_type'       => $request->has('sub_restaurant_type') ? $request->sub_restaurant_type : '',
                'address'                   => $request->has('address') ? $request->address : '',
                'city'                      => $request->has('city') ? $request->city : '',
                'zip_code'                  => $request->has('zip_code') ? $request->zip_code : '',
                'uid_number'                => $request->has('uid_number') ? $request->uid_number : '',
                'general_layality'          => $request->has('general_layality') ? $request->general_layality : '',
                'user_type'                 => $request->has('user_type') ? $request->user_type : '',
                'first_name'                => $request->has('first_name') ? $request->first_name : '',
                'last_name'                 => $request->has('last_name') ? $request->last_name : '',
                'date_birthday'             => $request->has('date_birthday') ? $request->date_birthday : '',
                'gender'                    => $request->has('gender') ? $request->gender : '',
                'name'                      => $request->has('company_name') ? $request->company_name : '',
                'email'                     => $request->has('email') ? $request->email : '',
                'mobile'                    => $request->has('mobile') ? $request->mobile : '',
                'password'                  => Hash::make($request->input('password')),
                'profile_image'             => $profile_image,
                'is_active'                 => '0',
                'last_login'                => date("Y-m-d H:i:s"),
            ]);
            $roleArray = array(
                'user_id' => $companyData->id,
                'role_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            );
            UserRoleRelation::create($roleArray);
            Auth::loginUsingId($companyData->id);
            return redirect('/admin/company-management')->with(['status' => 'success', 'message' => 'New Company added Successfully!']);
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
