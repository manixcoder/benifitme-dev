<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Auth;
use DB;

class MenuCategoryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.menu_category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.menu_category.create', $data);
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
            'category_name'             => 'required',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {

            MenuCategory::create([
                'merchent_id' => Auth::user()->id,
                'category_name'  => $request->has('category_name') ? $request->category_name : '',
            ]);
            return redirect('/merchant/menu-category-management')->with(['status' => 'success', 'message' => 'New Food Category added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
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
        $category = MenuCategory::find($id);
        $data = array();
        $data['category'] = $category;
        return view('merchent.menu_category.edit', $data);
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'category_name'             => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $menuCategoryData = MenuCategory::find($id);
            $updateData = array(
                "category_name" => $request->has('category_name') ? $request->category_name : $menuCategoryData->category_name,
            );
            $menuCategoryData->update($updateData);

            return redirect('/merchant/menu-category-management')
                ->with([
                    'status' => 'success',
                    'message' => 'Food Category updated Successfully!'
                ]);
        } catch (\Exception $e) {
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => $e->getMessage()
                ]);
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => 'Some thing went wrong! Please try again later.'
                ]);
        }
    }

    public function getcategoryData($id)
    {
        if (!empty($id)) {
            $id = $id;
        } else {
            $catData = DB::table('food_category')->where('merchent_id', Auth::user()->id)->orderby('id', 'ASC')->first();
            $id = $catData->id;
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
        //
    }
}
