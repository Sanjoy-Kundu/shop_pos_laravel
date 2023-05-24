<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::latest()->get();
        return view('backend.inventory.inventory_list', compact('products'));
    }


    /*
    pdf genretor
    */
public function inventory_report_pdf($inventory_pdf_id){
   // return $inventory_pdf_id;

    $all_products = Product::find($inventory_pdf_id);
   //$productType = ProductType::find($inventory_pdf_id);
    // $productBrand = Brand::find($inventory_pdf_id);
   return view('backend.inventory.inventory_report_pdf', compact('all_products'));
}
// die();
// $pdf = Pdf::loadView('backend.inventory.inventory_report_pdf', compact('all_products', 'productType', 'productBrand'));
// return $pdf->download('invoice.pdf');


public function product_download($inventory_id){
 return $inventory_id;
//     $pdf = Pdf::loadView('backend.inventory.inventory_report_pdf');
//     return $pdf->download('product_invoice.pdf');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ProductInventory $productInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductInventory $productInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductInventory $productInventory)
    {
        //
    }

    /**
     * Product inventory delete.
     */
    public function inventory_report_delete($delete_id)
    {
        Product::find($delete_id)->delete();
        return back()->withSuccess("Your Product list deleted Successfully");
    }

/*
* delete product inventory
*/
public function inventory_delete_list(){
  $all_delete_inventories =  Product::onlyTrashed()->get();
  return view('backend.inventory.inventory_delete_lists', compact('all_delete_inventories'));
}

/**
 * Restore product Inventory
 */
public function inventory_restore($restore_id){
Product::onlyTrashed()->find($restore_id)->restore();
return back()->withSuccess("Inventory restore successfully");
}

/**
 * Product Inventory permanent delete
 */
public function inventory_permanent_delete($permanent_delete_id){

    return $permanent_delete_id;
}

}
