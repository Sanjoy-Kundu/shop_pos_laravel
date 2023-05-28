<?php

namespace App\Http\Controllers;

use App\Models\PagePrint;
use App\Models\Product;
use Illuminate\Http\Request;

class PagePrintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inventory_print($id)
    {
        $products = Product::find($id);
        return view('backend.print.invoice_print', compact('products'));

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
    public function show(PagePrint $pagePrint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagePrint $pagePrint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagePrint $pagePrint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagePrint $pagePrint)
    {
        //
    }
}
