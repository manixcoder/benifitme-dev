<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Validator;
use App\Models\UserRoleRelation;


class CustomerManagementController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            'password'      => 'required',
            'company_name'      => 'required',
            'company_type'      => 'required',
            'sub_restaurant_type'      => 'required',
            'address'      => 'required',
            'city'      => 'required',
            'zip_code'      => 'required',
            'uid_number'      => 'required',
            // 'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        try {

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $input['user_role'] = '3';
            $user = User::create($input);
            $roleArray = array(
                'user_id' => $user->id,
                'role_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            );
            UserRoleRelation::create($roleArray);
            //dd($user);
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            return response()->json(['success' => $success], $this->successStatus);
        } catch (\exception $e) {
            return response()->json(['status' => 'danger', 'message' =>  $e->getMessage()]);
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }
    }
}
