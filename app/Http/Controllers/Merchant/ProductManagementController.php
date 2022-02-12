<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Redirect;
use Validator;
use Auth;


class ProductManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.product.create', $data);
    }

    public function createService()
    {
        $data = array();
        return view('merchent.services.create', $data);
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
        if ($request->product_type == '1') {
            $validator = Validator::make($request->all(), [
                'product_name'      => 'required',
                'pro_category'      => 'required',
                'pro_discount'      => 'required',
                'pro_valid_till'    => 'required',
                'pro_description'   => 'required',
                //'pro_price'       => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'product_name'      => 'required',
                'pro_category'      => 'required',
                'pro_discount'      => 'required',
                'pro_valid_till'    => 'required',
                'pro_description'   => 'required',
                //'pro_price'       => 'required',
            ]);
        }
       
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            // dd($request->all());
            $productData = Product::create([
                'merchent_id'           => Auth::user()->id,
                'product_type'          => $request->has('product_type') ? $request->product_type : '',
                'pro_valid_till'        => $request->has('pro_valid_till') ? $request->pro_valid_till : '',
                'product_name'          => $request->has('product_name') ? $request->product_name : '',
                'pro_category'          => $request->has('pro_category') ? $request->pro_category : '',
                'pro_discount'          => $request->has('pro_discount') ? $request->pro_discount : '',
                'pro_description'       => $request->has('pro_description') ? $request->pro_description : '',
                'pro_price'             => $request->has('pro_price') ? $request->pro_price : '',
            ]);
            if ($request->hasFile('pro_image')) {
                $product = Product::find($productData->id);
                $file = $request->file('pro_image');
                $filename = 'pro_image-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('public/uploads/', $filename);
                $product->pro_image = $filename;
                $product->save();
            }
            if ($request->product_type == '1') {
                $product_type = "Product";
            } else {
                $product_type = "Services";
            }

            return redirect('/merchant/product-management')->with([
                'status' => 'success',
                'message' => 'New ' . $product_type . ' added Successfully!',
                'product_type' => $product_type
            ]);
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
        //
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
