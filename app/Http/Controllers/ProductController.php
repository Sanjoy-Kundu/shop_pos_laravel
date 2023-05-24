<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.products.product_list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $productTypes = ProductType::all();
        $brands = Brand::all();

        return view('backend.products.add_product', compact('brands', 'productTypes'));
    }

    /**
     * Store data into database
     */
    public function store(Request $request)
    {

        $product_invoice =  Str::upper(Str::random(10));

        //return $request;
        $request->validate([
            "product_type_id" => "required",
            "product_brand_id" => "required",
            "product_name" => "required ||unique:products,product_name",
            'product_price' => 'required',
            'product_quantity' => 'required',

        ],[
            'product_type_id' =>'Product type is required',
            'product_brand_id' =>'Product brand is required',
            'product_name' =>'Product name is required',
            'product_name.unique' =>'Product name already taken',
            'product_price' =>'Product price is required',
        ]);
        Product::insert($request->except('_token') + [
            'product_invoice' => $product_invoice,
            'created_at' =>Carbon::now()]);
        return back()->withSuccess("Product Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {
        //

        $product = Product::find($product_id);
        $brands = Brand::all();
        $productTypes = ProductType::all();
        return view('backend.products.edit_product', compact('product','brands', 'productTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$product_id)
    {
       // return $product_id;
      // return  Product::find($product_id);
     Product::find($product_id)->update([
         'product_type_id'=> $request->update_product_type_id,
        'product_brand_id'=> $request->update_product_brand_id,
        'product_name'=> $request->update_product_name,
        'product_price' => $request->update_product_price,
         'product_quantity'=>$request->update_product_quantity,
        'product_description'=> $request->update_product_description,
     ]);
       return back()->withSuccess("Product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
