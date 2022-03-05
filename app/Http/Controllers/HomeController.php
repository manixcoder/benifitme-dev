<?php

namespace App\Http\Controllers;

use App\Models\LicenseClassModel;
use App\User;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use App\Models\UserRoleRelation;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

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
    public function userRegistration(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'name'              => 'required',
            'mobile'            => 'required',
            'email'             => 'required',
            'password'          => 'required',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = User::create([
                'user_role' => 3,
                'first_name'  => $request->has('first_name') ? $request->first_name : '',
                'last_name'  => $request->has('last_name') ? $request->last_name : '',
                'name'  => $request->has('name') ? $request->name : '',
                'mobile'  => $request->has('mobile') ? $request->mobile : '',
                'email'  => $request->has('email') ? $request->email : '',
                'otp' =>  $this->otp_code(),
                'password'  => Hash::make($request->input('password')),
            ]);
            $roleArray = array(
                'user_id' => $userData->id,
                'role_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            );
            UserRoleRelation::create($roleArray);
            $userData = User::find($userData->id);
            $data = array();
            $data['userData'] = $userData;
            return view('userveification', $data);
            return redirect('/verification-veiw')->with(['userData' => $userData, 'status' => 'success', 'message' => 'Registration Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }
    public function userVerifyOtp(Request $request)
    {
        // dd($request->all());
        $otp = implode("", $request->otp);
        $userdata = User::where('id', $request->user_id)->first();
        if ($userdata->otp != $otp) {
            $data = array();
            $data['userData'] = $userdata;
            return view('userveification', $data);
        } else {
            User::where('id', $request->user_id)->update([
                'email_verified_at' => date("Y-m-d H:i:s"),
                'otp' => 'NULL'
            ]);
            return redirect('/')->with(array(
                'status' => 'success',
                'message' => 'OTP matched successfully.'
            ));
        }
    }

    public function sendOTPOnEmail(Request $request)
    {
        $userdata = User::with(['getRole'])->where('email', $request->email)->get();
        $otp_code = $this->otp_code();
        if (!empty($userdata)) {
            $postdata = DB::table('users')->where('email', $request->email)->update([
                'otp' => $this->otp_code()
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
                User::where('id', Auth::user()->id)->update([
                    'last_login' => date("Y-m-d H:i:s")
                ]);
                return redirect('/' . $role->name);
            }
        }
        Auth::logout();
        return redirect('/login')->with(['status' => 'danger', 'message' => 'you are not authorized to login here !']);
    }
    public function getSubCategory(Request $request, $id)
    {
        try {
            $list = DB::table('categories')->where('parent_id', '=', $id)->where('c_type', '=', '1')->get();
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

    public function subscriptionPlan(Request $request)
    {
        // dd($request->all());
        // dd(Auth::user()->id);
        $userData = DB::table('users')->where('id', Auth::user()->id)->update([
            'subscription_id' => $request->plan_id
        ]);

        return redirect('/payment-method')->with(['status' => 'success', 'message' => 'New Company added Successfully!']);
    }

    public function subscriptionPayment()
    {
        
    }


    public function createProductCategory()
    {
    }
}
