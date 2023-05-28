<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productTypes = ProductType::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('backend.sales.sale_form', compact('productTypes', 'brands', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }


    public function get_product_details(Request $request){
        $generated_option = " "; //new class
             // return $request->productTypeIdName;
     //return Brand::all();
       $products =  Product::where([
            'product_type_id' => $request->productTypeIdName
        ])->get();

        foreach($products as $product){


            //echo $product->relationToBrand->brand_name;
            // $generated_option .= "<option value='..'>.$product->relationToBrand->brand_name.</option>";
            $generated_option .= "<option value='".$product->relationToBrand->id."'>".$product->relationToBrand->brand_name."</option>";
            //$generated_option = "<option value='".$product->id."'>".$product->product_name."</option>";
        }
        return $generated_option;
    }


    //product name
    public function get_product_name(Request $request){
        $generated_option = " "; //new class
           // return $request->productIdName;

     //return Brand::all();
       $products =  Product::where([
            'id' => $request->productIdName,
        ])->get();

        foreach($products as $product){

            //echo $product->product_name;
            //echo $product->product_price;
            $generated_option =   "<option value='".$product->id."'>".$product->product_price."</option>";
          //  $quantity_option =   "<option value='".$product->id."'>".$product->product_quantity."</option>";
            //              $generated_option =   "<input type='number' class='form-control' name='product_price' value='$product->price' id='product_price'>";
        }
        return $generated_option;
    }






}
