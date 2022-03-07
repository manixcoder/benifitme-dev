<?php

namespace App\Http\Controllers\API;

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

class UserManagementController extends Controller
{
    public $successStatus = 200;

    public function customerRegistration(Request $request)
    {
        //dd($request->all());
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
            return response()->json(['error' => $validator->errors()], 401);
            // return back()->withErrors($validator)->withInput();
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
            $userData = User::find($userData->id);
            $success['data'] =  $userData;
            $success['token'] =  $userData->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], $this->successStatus);
        } catch (\Exception $e) {
            return response()->json(['status' => 'danger', 'message' => $e->getMessage()], 401);
            // return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            // return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }
}
