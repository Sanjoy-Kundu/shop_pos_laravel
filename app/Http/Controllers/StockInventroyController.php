<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockInventroy;
use Carbon\Carbon;
use Illuminate\Http\Request;


class StockInventroyController extends Controller
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
    public function create($inventoryId)
    {

        //
        $inventoryProduct = Product::find($inventoryId);
        return view('backend.inventory.inventory_sell', compact('inventoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //
        if($request->inventory_product_sell_quantity <=0){
            return back()->withSuccess("Please Enter a positive value");
        }elseif($request->inventory_product_quantity < $request->inventory_product_sell_quantity){
            return back()->withSuccess("Product Quantity less than user quantity");
        }

        StockInventroy::insert([
            'inventory_product_invoice' => $request->inventory_product_invoice,
            'inventory_product_name' => $request->inventory_product_name,
            'inventory_brand_name' => $request->inventory_brand_name,
            'inventory_product_type' => $request->inventory_product_type,
            'inventory_product_price' => $request->inventory_product_price,
            'inventory_product_quantity' => $request->inventory_product_quantity,
            'inventory_product_sell_quantity' => $request->inventory_product_sell_quantity,
            'created_at' => Carbon::now(),
        ]);

     Product::where([
        'product_invoice' => $request->inventory_product_invoice
     ])->decrement('product_quantity', $request->inventory_product_sell_quantity);


        return back()->withSuccess("Stock Inventory added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(StockInventroy $stockInventroy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockInventroy $stockInventroy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StockInventroy $stockInventroy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockInventroy $stockInventroy)
    {
        //
    }
}
