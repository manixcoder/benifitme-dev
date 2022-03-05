<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Appointment;
use App\Models\CrudEvents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use DB;

class AppointmentManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.appointments.index', $data);
    }

    public function availabilityAppointments()
    {
        $data = array();
        return view('merchent.appointments.availability_appointments', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // if ($request->ajax()) {
        //     $data = Appointment::whereDate('event_start1', '>=', $request->start)
        //         ->whereDate('event_end',   '<=', $request->end)
        //         ->get(['id', 'event_name', 'event_start', 'event_end']);
        //     return response()->json($data);
        // }

        $data = array();
        return view('merchent.appointments.create_availability', $data);
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
            case 'create':
                $event = CrudEvents::create([
                    'event_name' => $request->event_name,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);

                return response()->json($event);
                break;

            case 'edit':
                $event = CrudEvents::find($request->id)->update([
                    'event_name' => $request->event_name,
                    'event_start' => $request->event_start,
                    'event_end' => $request->event_end,
                ]);

                return response()->json($event);
                break;

            case 'delete':
                $event = CrudEvents::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # ...
                break;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), array(
            'appointment_title'       => 'required',
            'appointment_start'        => 'required',
            'appointment_end'        => 'required',
            'appointment_time_start'        => 'required',
            'appointment_time_end'        => 'required',

        ));
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            // dd($request->all());
            Appointment::create([
                'merchent_id' => Auth::user()->id,
                'appointment_title'             => $request->appointment_title,
                'appointment_start'             => $request->appointment_start,
                'appointment_end'               => $request->appointment_end,
                'appointment_time_start'        => $request->appointment_time_start,
                'appointment_time_end'          => $request->appointment_time_end,
                'appointment_product_services'  => ''
            ]);
            return redirect('/merchant/appointments-management/availability-appointments')->with(array('status' => 'success', 'message' => 'Appointment created successfully.'));
        } catch (\exception $e) {
            return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            return back()->with(array('status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment, $id)
    {
        //dd($id);
        $Appointment = Appointment::find($id);
        $data = array();
        $data['appointment']=$Appointment;

        return view('merchent.appointments.edit_availability', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment, $id)
    {
        //
    }
}
