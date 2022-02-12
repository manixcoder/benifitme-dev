<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;
use Redirect;
use Validator;
use DB;

class CategoryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('admin.category.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function editCategory($id)
    {
        $categoryData = Category::find($id);
        return view('admin.category.editCategory')->with(array(
            'categoryData' => $categoryData,
        ));
    }
    public function editSubCategory($id)
    {
        $categoryData = Category::find($id);
        return view('admin.category.editSubCategory')->with(array(
            'categoryData' => $categoryData,
        ));
    }
    public function editUserCategory($id)
    {
        $categoryData = Category::find($id);
        return view('admin.category.editUserCategory')->with(
            array(
                'categoryData' => $categoryData,
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function updateCategary(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
        ];
        $messages = [
            'name' => 'Category Name Required.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            if ($request->cat_type === 'campany_cat') {
                $updata = array(
                    'name'          => $request->has('name') ? $request->name : '',
                    'parent_id'     => '0',
                    'status'        => '1',
                    'c_type'        => '1',
                );
            } elseif ($request->cat_type === 'sub_cat') {
                $updata = array(
                    'name'          => $request->has('name') ? $request->name : '',
                    'parent_id'     => $request->has('parent') ? $request->parent : '',
                    'status'        => '1',
                    'c_type'        => '1',
                );
            } else {
                $updata = array(
                    'name'          => $request->has('name') ? $request->name : '',
                    'parent_id'     => '0',
                    'status'        => '1',
                    'c_type'        => '2',
                );
            }
            $categoryData = Category::find($id);
            $categoryData->update($updata);           
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'Record updated Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        Category::where('parent_id', $id)->delete();
        User::where('sub_restaurant_type', $id)->orWhere('user_type', $id)->orWhere('company_type', $id)->delete();

        return redirect('/admin/category-management')->with([
            'status' => 'success',
            'message' => 'Records Deleted Successfully!'
        ]);
    }
    public function companyCategory(Request $request)
    {
        $data = array();
        return view('admin.category.createCompanyCategory', $data);
        return "Create Company category";
    }
    public function saveComapanyCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '1',
            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New User added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }


    public function addSubCategory()
    {
        $data = array();
        return view('admin.category.createCompanySubCategory', $data);
        return "Create sub Company category";
    }
    public function saveSubCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'parent' => 'required',
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => $request->has('parent') ? $request->parent : '',
                'status'        => '1',
                'c_type'        => '1',
            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New Sub Categary added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    public function addUserCategory()
    {
        $data = array();
        return view('admin.category.createUserCategory', $data);
    }
    public function saveUserCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $categoryData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '1',
            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New Sub Categary added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }
}
