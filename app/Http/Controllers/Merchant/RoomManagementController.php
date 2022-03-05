<?php

namespace App\Http\Controllers\Merchant;

use App\Models\RoomModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Auth;
use File;

class RoomManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.rooms.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.rooms.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'room_type'             => 'required',
            'room_for'              => 'required',
            'number_of_room'        => 'required',
            'min_booking_for'       => 'required',
            'price_per_night'       => 'required',
            'discount'              => 'required',
            'short_discription'     => 'required',
            'room_sq_ft'            => 'required',
            'single_beds'           => 'required',
            'hotle_address'         => 'required',
            // 'check_in'              => 'required',
            // 'check_out'             => 'required',
            // 'extra_rows'            => 'required',
            // 'health_safety'         => 'required',
            // 'room_image'            => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            // dd($request->all());
            if ($files = $request->room_image) {
                $destinationPath = public_path('/uploads/');
                $profileImage = date('YmdHis') . "-" . $files->getClientOriginalName();
                $path =  $files->move($destinationPath, $profileImage);
                $image = $insert['room_image'] = "$profileImage";
            } else {
                $image = '';
            }
            //$image = '';
            $roomData =  RoomModel::create([
                'merchent_id'               => Auth::user()->id,
                'room_type'                 => $request->has('room_type') ? $request->room_type : '',
                'room_for'                  => $request->has('room_for') ? $request->room_for : '',
                'number_of_room'            => $request->has('number_of_room') ? $request->number_of_room : '',
                'min_booking_for'           => $request->has('min_booking_for') ? $request->min_booking_for : '',
                'price_per_night'           => $request->has('price_per_night') ? $request->price_per_night : '',
                'discount'                  => $request->has('discount') ? $request->discount : '',
                'short_discription'         => $request->has('short_discription') ? $request->short_discription : '',
                'room_sq_ft'                => $request->has('room_sq_ft') ? $request->room_sq_ft : '',
                'single_beds'               => $request->has('single_beds') ? $request->single_beds : '',
                'selected_amenities'        => serialize($request->selected_amenities),
                'hotle_address'             => $request->has('hotle_address') ? $request->hotle_address : '',
                'check_in'                  => $request->has('check_in') ? $request->check_in : '',
                'check_out'                 => $request->has('check_out') ? $request->check_out : '',
                'extra_rows'                => serialize($request->extra_rows),
                'health_safety'             => serialize($request->health_safety),
                'room_image'                => $image
            ]);

            return redirect('/merchant/room-management')->with(['status' => 'success', 'message' => 'New Room added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function show(RoomModel $roomModel, $id)
    {
        //
    }
    public function getRoomData($id)
    {
       // dd($id);
        if (!empty($id)) {
            $id = $id;
        } else {
            $catData = DB::table('hotel_room')->where('merchent_id', Auth::user()->id)->where('room_for',$id)->orderby('id', 'ASC')->first();
            $id = $catData->room_for;
        }
        $roomsData = RoomModel::where('room_for', $id)->where('merchent_id', Auth::user()->id)->get();
        // dd($category_dise);
        $data = array();
        $data['roomsData'] = $roomsData;

        $currentData = view('merchent.rooms.render.room_listing')->with('roomsData', $roomsData)->render();

        if ($currentData) {
            return response()->json(['status' => 'success', 'currentData' => $currentData]);
        }
        return response()->json(['status' => 'danger', 'message' => 'No matches found.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomModel $roomModel, $id)
    {
        //dd($id);
        $roomsData = RoomModel::find($id);
        $data = array();
        $data['roomsData']=$roomsData;
        return view('merchent.rooms.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomModel $roomModel, $id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomModel $roomModel, $id)
    {
        dd($id);
    }
}
