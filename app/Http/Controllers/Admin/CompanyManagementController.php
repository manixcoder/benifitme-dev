<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use App\Models\UserRoleRelation;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use DateTime;

class CompanyManagementController extends Controller
{
    public function __construct()
    {
        $Inmerchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('is_active', '0')
            ->get();
        foreach ($Inmerchant as $merchant) {
            $d1 = new DateTime($merchant->created_at);
            $d2 = new DateTime(date("Y-m-d H:i:s"));
            $interval = $d1->diff($d2);
            $diffInMinutes = $interval->i;
            if ($diffInMinutes >= 3) {
                User::where('id', $merchant->id)
                    ->update([
                        //  'is_active' => '1'
                    ]);
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $Inmerchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('is_active', '0')
            ->orderBy('id', 'DESC')
            ->get();
        $merchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('is_active', '1')
            ->orderBy('id', 'DESC')
            ->get();
        $data['inmerchants'] = $Inmerchant;
        $data['merchants'] = $merchant;
        return view('admin.company.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('admin.company.create_company', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'company_type' => 'required',
            'sub_restaurant_type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'uid_number' => 'required',
            'general_layality' => 'required',
            'user_type' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_birthday' => 'required',
            'gender' => 'required',
            'is_audience' => 'required',
            'is_confirmation_chk' => 'required',
            'email' => 'required|string|max:255|unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required',
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
            // dd($request->all());
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
                'is_active'                 => '1',
                'is_audience'               => '1',
                'is_confirmation_chk'       => '1',
                'profile_image'             => $profile_image,
                'last_login'                => date("Y-m-d H:i:s"),
            ]);
            $roleArray = array(
                'user_id' => $companyData->id,
                'role_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            );
            UserRoleRelation::create($roleArray);
            // Auth::loginUsingId($companyData->id);
            return redirect('/admin/company-management')->with(['status' => 'success', 'message' => 'New Company added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }
    public function companyDetails(Request $request)
    {
        // dd($request->all());
        $merchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('id', $request->comp_id)
            ->first();
        $data['merchants'] = $merchant;
        return view('admin.company.show', $data);
    }

    public function companyShortDetails(Request $request)
    {
        $merchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('id', $request->comp_id)
            ->first();
        // dd($merchant);
        $data['merchants'] = $merchant;
        return view('admin.company.short_details', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merchant = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchant');
            })
            ->where('id', $id)
            ->first();
        $data['merchants'] = $merchant;
        return view('admin.company.show', $data);
    }
    public function decline($id)
    {
        User::where('id', $id)
            ->update([
                'is_active' => '2'
            ]);
        return redirect('/admin/company-management')->with(['status' => 'success', 'message' => 'Company decline Successfully!']);
    }

    public function accept($id)
    {
        User::where('id', $id)
            ->update([
                'is_active' => '1'
            ]);
        return redirect('/admin/company-management')->with(['status' => 'success', 'message' => 'Company Accepted Successfully!']);
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
