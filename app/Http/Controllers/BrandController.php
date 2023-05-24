<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $all_brands = Brand::latest()->get();
        $all_trashedBrands = Brand::onlyTrashed()->latest()->get();
        return view('backend.brands.brand_lists', compact('all_brands', 'all_trashedBrands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brands.add_brands');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return $request;
        $request->validate([
            'brand_name' => "required || max:30 || unique:brands,brand_name",
            'brand_description' => "required"

        ],[
            "brand_name.required" => "Brand Name is required",
            "brand_name.unique" => "Brand Name Already Taken",
            "brand_name.max" => "Band name maximum 50 character",
            "brand_description.required"=> "Brand Description is required",
        ]);
        Brand::insert($request->except('_token') + ["created_at" => Carbon::now()]);
        return back()->withSuccess("Brand added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $brand_id){
        $brand_info =  Brand::find($brand_id);
        return view('backend.brands.edit_brand', compact('brand_info'));
    }



    /**
     *  Brand Delete
     */
    public function brand_delete(Request $request, $brand_id){
        //return $brand_id;
        Brand::find($brand_id)->delete();
        return back()->withSuccess("Brand Deleted Successfully");
    }

/**
 * Brand permanent delete
 */
    public function permanent_delete($brand_id){
       // return $brand_id;

 Brand::onlyTrashed()->where("id", $brand_id)->forceDelete();
return back();
    }



    /**
     * Brand restore
     */
    public function brand_restore($brand_id){
        //return $brand_id;
        Brand::onlyTrashed()->find($brand_id)->restore();
        // Brand::onlyTrashed()->find($brand_id)->restore();
         return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $brand_id)
    {

        Brand::find($brand_id)->update([
            'brand_name' => $request->update_brand_name,
            'brand_description' => $request->update_brand_description,
        ]);
        return back()->withSuccess('Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
