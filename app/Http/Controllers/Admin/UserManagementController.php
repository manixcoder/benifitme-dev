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
use DB;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $users = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'users');
            })->get();
        $data['users'] = $users;
        return view('admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('admin.users.create', $data);
    }
    public function usersData()
    {
        $result = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'users');
            })->get();
        // dd($result);
        return Datatables::of($result)
            ->addColumn('action', function ($result) {
                return '
                <a href ="' . url('admin/user-management') . '/' . $result->id . '/edit"  class="btn btn-xs btn-warning edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                <a data-id =' . $result->id . ' class="btn btn-xs btn-danger delete" style="color:#fff"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                ';
            })
            ->make(true);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|max:255|unique:users',
            'mobile' => 'required',
            'gender' => 'required',
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
            $userData = User::create([
                'user_role'         => 3,
                'first_name'        => $request->has('first_name') ? $request->first_name : '',
                'last_name'         => $request->has('last_name') ? $request->last_name : '',
                'name'              => $request->has('name') ? $request->name : '',
                'email'             => $request->has('email') ? $request->email : '',
                'mobile'            => $request->has('mobile') ? $request->mobile : '',
                'password'          => Hash::make($request->input('password')),
                'gender'            => $request->has('gender') ? $request->gender : '',
                'profile_image'     => $profile_image,
                'last_login'        => date("Y-m-d H:i:s"),
            ]);
            $roleArray = array(
                'user_id' => $userData->id,
                'role_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            );
            UserRoleRelation::create($roleArray);
            return redirect('/admin/user-management')->with(['status' => 'success', 'message' => 'New User added Successfully!']);
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
