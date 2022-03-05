<?php

namespace App\Http\Controllers\Merchant;

use App\Models\CheckInModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use QRCode;
use Auth;

class CheckInManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.checkin.index', $data);
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
            'reward_value'       => 'required',
            'terms_conditions'        => 'required',

        ));
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            /* QR Code Generate start*/
            require base_path('public/phpqrcode/qrlib.php');
            $tempDir = base_path('public/uploads/QRCode/');
            $codeContents = $codeContents =  $request->input('reward_value');
            $qr_fileName = $request->input('reward_value') . md5($codeContents) . '.png';
            $pngAbsoluteFilePath = $tempDir . $qr_fileName;
            if (!file_exists($pngAbsoluteFilePath)) {
                QRcode::png($codeContents, $pngAbsoluteFilePath);
            }
            $checkInData = CheckInModel::create([
                "merchent_id" => Auth::user()->id,
                "reward_value" => $request->has('reward_value') ? $request->reward_value : '',
                "terms_conditions" => $request->has('terms_conditions') ? $request->terms_conditions : '',
                "check_in_qr_code" => $qr_fileName,
            ]);
            //dd(CheckInModel::find($checkInData->id));

            return redirect('/merchant/check-in-management')->with(array('status' => 'success', 'message' => 'Update record successfully.'));
        } catch (\exception $e) {
            return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }


        return redirect('/merchant/check-in-management')->with(['status' => 'success', 'message' => 'Under progress!']);
        dd("Under progress");
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function show(CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckInModel $checkInModel)
    {
        //
    }
}
