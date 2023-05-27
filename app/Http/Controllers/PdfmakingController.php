<?php

namespace App\Http\Controllers;

use App\Models\Pdfmaking;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfmakingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //inventory download pdf
    public function Inventory_pdf($inventory_pdf_id){
        $products = Product::find($inventory_pdf_id);
       $pdf = Pdf::loadView('backend.invoices.inventory_pdf', compact('products'));
        return $pdf->download('download.pdf');
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
    public function show(Pdfmaking $pdfmaking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdfmaking $pdfmaking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdfmaking $pdfmaking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdfmaking $pdfmaking)
    {
        //
    }
}
