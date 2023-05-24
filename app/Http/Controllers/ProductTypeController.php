<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product_types = ProductType::latest()->get();
        $trashed_product_type = ProductType::onlyTrashed()->latest()->get();
        return view('backend.product_type.all_product_types_lists', compact('product_types', 'trashed_product_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('backend.product_type.product_type_add');
    }

    /**
     * Upload product type in database
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return $request;
        $request->validate([
            "product_type" => "required ||unique:product_types,product_type",
            "product_description" => "required"
        ],[
            "product_type.required" => "Product  type is required",
            "product_type.unique" => "Product  type already taken",
            "product_description.required" => "Product  Description is required",
        ]);
        ProductType::insert($request->except('_token') + ['created_at' =>Carbon::now()]);
        return back()->withSuccess('Brand Type Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Editing this form
     */
    public function edit($product_id)
    {
        //
       $edit_product_type = ProductType::find($product_id);
        return view('backend.product_type.product_type_edit', compact("edit_product_type"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product_id)
    {


        ProductType::find($product_id)->update([
            "product_type" => $request->update_product_type,
            "product_description" => $request->update_product_description,
        ]);
        return back()->withSuccess("Product Type Updated Successfully");

    }



    /**
     * Delete product id
     */
    public function delete($product_id){
        //return $product_id;
        ProductType::find($product_id)->delete();
        return back()->withSuccess("Product Type Deleted Successfully");
    }
    /**
     * Restore product type
     */
    public function restore ($product_id)
    {
        ProductType::onlyTrashed()->find($product_id)->restore();
       // ProductType::onlyTrashed()->find("id", $product_id)->restore();
        return back()->withTrashedsuccess("Product Type restore successfully");
    }

    /*
    * Permanent delete
    */
    public function permanent_delete($product_id){
        ProductType::onlyTrashed()->find($product_id)->forceDelete();
        return back()->withTrashedsuccess("Product Type permanent deleted successfully");
    }
}
