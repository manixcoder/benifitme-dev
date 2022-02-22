<?php

namespace App\Http\Controllers;

use App\Models\LicenseClassModel;
use Auth;
use App\User;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return $this->checkUserRole();

        if (Auth::guest()) {
            return view('index');
        } else {
            return redirect('/validate-user');
        }
    }

    public function sendOTPOnEmail(Request $request)
    {
        $userdata = User::with(['getRole'])->where('email', $request->email)->get();
        $otp_code = $this->otp_code();
        if (!empty($userdata)) {
            $postdata = DB::table('users')->where('email', $request->email)->update([
                'otp' => $otp_code
            ]);
        }

        $userdata = User::where('email', $request->email)->first();
        Session::put('user_id', $userdata->id);
        Session::put('user_email', $userdata->email);
        Session::put('otp', $userdata->otp);
        return redirect('/verification')->with(array(
            'status' => 'success',
            'message' => 'OTP has been sent to ' . $userdata->email
        ));
        // return view('verification');
    }
    public function verifyOtp(Request $request)
    {
        $otp = implode("", $request->vcode);
        $userdata = User::where('id', Session::get('user_id'))->first();
        //  dd($userdata->otp);
        if ($userdata->otp != $otp) {
            return redirect('/verification')->with(array(
                'status' => 'danger',
                'message' => 'OTP not matched.'
            ));
        } else {
            return redirect('/create-newpassword')->with(array(
                'status' => 'success',
                'message' => 'OTP matched successfully.'
            ));
        }
    }

    public function updatePassword(Request $request)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect('/create-newpassword')->with(array(
                'status' => 'danger',
                'message' => 'Password and confirmation password not matched.'
            ));
        } else {
            User::where('id', $request->user_id)->update([
                'password' => Hash::make($request->input('password')),
            ]);
            Session::forget('user_id');
            Session::forget('user_email');
            Session::forget('otp');
            return redirect('/admin-login')->with(array('status' => 'success', 'message' => 'Update record successfully.'));
        }
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkUserRole()
    {
        $this->middleware('auth');
        if (Auth::check()) {
            //Get Login User role here
            $role = Auth::user()->roles->first();
            //dd($role);
            if (!empty($role)) {
                return redirect('/' . $role->name);
            }
        }
        Auth::logout();
        return redirect('/login')->with(['status' => 'danger', 'message' => 'you are not authorized to login here !']);
    }
    public function getSubCategory(Request $request, $id)
    {
        try {
            $list = DB::table('categories')
                ->where('parent_id', '=', $id)
                ->where('c_type', '=', '1')
                ->get();
            //dd($list);
            if ($list) {
                $data['status'] = 'success';
            } else {
                $data['status'] = 'error';
            }
            $data['list'] = $list;
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }

    public function otp_code()
    {
        $length = 4;
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $userData = DB::table('users')->where('otp', $randomString)->first();

        if ($userData) {
            return $this->otp_code();
        } else {
            return $randomString;
        }
    }
}
