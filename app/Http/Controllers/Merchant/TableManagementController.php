<?php

namespace App\Http\Controllers\Merchant;

use App\Models\TableModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Validator;
use Auth;

class TableManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.tables.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.tables.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->all());
        $validator = Validator::make($request->all(), [
            'table_name'        => 'required',
            'table_for'         => 'required',
            'booking_time'      => 'required',
            'number_tables'     => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $companyData = TableModel::create([
                'merchent_id'           => Auth::user()->id,
                'table_name'            => $request->has('table_name') ? $request->table_name : '',
                'table_for'             => $request->has('table_for') ? $request->table_for : '',
                'booking_time'          => $request->has('booking_time') ? $request->booking_time : '',
                'number_tables'         => $request->has('number_tables') ? $request->number_tables : '',
            ]);
            return redirect('/merchant/table-management')->with(['status' => 'success', 'message' => 'New Table added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TableModel  $tableModel
     * @return \Illuminate\Http\Response
     */
    public function show(TableModel $tableModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TableModel  $tableModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TableModel $tableModel,$id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TableModel  $tableModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableModel $tableModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableModel  $tableModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableModel $tableModel)
    {
        //
    }
}
