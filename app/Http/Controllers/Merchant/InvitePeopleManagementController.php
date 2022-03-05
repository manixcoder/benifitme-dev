<?php

namespace App\Http\Controllers\Merchant;

use App\Models\InvitePeople;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use QRCode;
use Auth;

class InvitePeopleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.invitePeople.index', $data);
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
        //dd($request->all());
        $validator = Validator::make($request->all(), array(
            'name'       => 'required',
            'email'        => 'required',
            'mobile'           => 'required',

        ));
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = User::where('name', $request->name)
                ->where('name', $request->name)
                //->where('email', $request->email)
                //->where('mobile', $request->mobile)
                // ->where('user_role', '3')
                ->get();
            //dd($userData);
            if (count($userData) > 0) {
                /* QR Code Generate start*/
                require base_path('public/phpqrcode/qrlib.php');
                $tempDir = base_path('public/uploads/QRCode/');
                $codeContents = $codeContents =  $request->input('mobile');
                $qr_fileName = $request->input('mobile') . md5($codeContents) . '.png';
                $pngAbsoluteFilePath = $tempDir . $qr_fileName;
                if (!file_exists($pngAbsoluteFilePath)) {
                    QRcode::png($codeContents, $pngAbsoluteFilePath);
                }

                $invitePeople = InvitePeople::create([
                    'user_id' => $userData[0]->id,
                    'merchent_id' => Auth::user()->id,
                    'invite_qr_code' => $qr_fileName
                ]);

                return redirect('/merchant/invite-people-management')->with([
                    'status' => 'success',
                    'message' => 'New QR Code added Successfully!'
                ]);
            } else {
                return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
            }
        } catch (\exception $e) {
            return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function show(InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function edit(InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvitePeople $invitePeople)
    {
        //
    }
}
