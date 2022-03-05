<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServicesCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Auth;
use DateTime;

class ServicesCategoryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('admin.productServicecategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('admin.productServicecategory.create', $data);
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
            'category_name' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            if ($request->parent != '') {
                $companyData = ServicesCategory::create([
                    'category_name'              => $request->has('category_name') ? $request->category_name : '',
                    'parent_id'              => $request->has('parent') ? $request->parent : '0',
                ]);
            } else {
                $companyData = ServicesCategory::create([
                    'category_name'              => $request->has('category_name') ? $request->category_name : '',
                    // 'parent_id'              => $request->has('parent') ? $request->parent : '0',
                ]);
            }



            return redirect('/admin/services-category-management')->with(['status' => 'success', 'message' => 'New Category added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesCategory  $servicesCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesCategory $servicesCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesCategory  $servicesCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesCategory $servicesCategory, $id)
    {

        $serviceData = ServicesCategory::find($id);
        //dd($serviceData);
        $data = array();
        $data['serviceData'] = $serviceData;
        return view('admin.productServicecategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesCategory  $servicesCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesCategory $servicesCategory, $id)
    {
        $servicesData = ServicesCategory::find($id);
        //dd($request->all());
        if ($request->parent != null) {
            $updateData = array(
                'category_name'              => $request->has('category_name') ? $request->category_name : '',
                'parent_id'              => $request->has('parent') ? $request->parent : '0',
            );
        } else {
            $updateData = array(
                'category_name'              => $request->has('category_name') ? $request->category_name : '',
            );
        }
        $servicesData->update($updateData);

        return redirect('/admin/services-category-management')->with(['status' => 'success', 'message' => 'Update Category Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesCategory  $servicesCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesCategory $servicesCategory, $id)
    {
        ServicesCategory::find($id)->delete();
        ServicesCategory::where('parent_id', $id)->delete();
        
        return redirect('/admin/services-category-management')->with(['status' => 'success', 'message' => 'Delete Category Successfully!']);
    }
}
