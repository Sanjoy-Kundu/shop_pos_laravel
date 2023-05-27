<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PdfmakingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInventoryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//backend Controller
Route::get('/dashboard',[BackendController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


//backend product  start
Route::get('brand/lists', [BrandController::class, 'index'])->name('brand.lists');
Route::get('brand/add', [BrandController::class, 'create'])->name('brand.add');
Route::post('brand/upload', [BrandController::class, 'store'])->name('brand.upload');
Route::get('brand/delete/{brand_id}', [BrandController::class, 'brand_delete'])->name('brand.delete');
Route::get('brand/restore/{brand_id}', [BrandController::class, 'brand_restore'])->name('brand.restore');
Route::get('brand/permanent/delete/{brand_id}', [BrandController::class, 'permanent_delete'])->name('brand.permanent.delete');
Route::get('brand/edit/{brand_id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('brand/update/{brand_id}', [BrandController::class, 'update'])->name('brand.update');




//product type section start
Route::get('product/type/lists', [ProductTypeController::class, 'index'])->name('product.type.lists');
Route::get('product/add/type', [ProductTypeController::class, 'create'])->name('product.add.type');
Route::post('product/type/upload', [ProductTypeController::class, 'store'])->name('product.type.upload');
Route::get('product/type/edit/{product_id}', [ProductTypeController::class, 'edit'])->name('product.type.edit');
Route::post('product/type/update/{product_id}', [ProductTypeController::class, 'update'])->name('product.type.update');
Route::get('product/type/delete/{product_id}', [ProductTypeController::class, 'delete'])->name('product.type.delete');
Route::get('product/type/restore/{product_id}', [ProductTypeController::class, 'restore'])->name('product.type.restore');
Route::get('product/type/permanent/delete/{product_id}',[ProductTypeController::class, 'permanent_delete'])->name('product.type.permanent.delete');
//product type section end



//product start
Route::get('product/list', [ProductController::class, 'index'])->name('product.list');
Route::get('product/add/product', [ProductController::class, 'create'])->name('product.add.product');
Route::post('product/upload', [ProductController::class, 'store'])->name('product.upload');
Route::get('product/edit/{product_id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update/{update_id}',[ProductController::class, 'update'])->name('product.update');
//product end



//product Inventory
Route::get('inventory/list', [ProductInventoryController::class, 'index'])->name('inventory.list');
Route::get('inventory/report/pdf/{inventory_pdf_id}', [ProductInventoryController::class, 'inventory_report_pdf'])->name('inventory.report.pdf');
Route::get('inventory/report/delete/{inventory_report_id}', [ProductInventoryController::class, 'inventory_report_delete'])->name('inventory.report.delete');
// Route::get('inventory/download/pdf/{inventory_download_id}', [ProductInventoryController::class, 'product_download'])->name('inventory.download.pdf');
Route::get('inventory/delete/list', [ProductInventoryController::class, 'inventory_delete_list'])->name('inventory.delete.list');
Route::get('inventory/restore/{restore_id}', [ProductInventoryController::class, 'inventory_restore'])->name('inventory.restore');
Route::get('inventory/permanent/delete/{permanent_delete_id}', [ProductInventoryController::class,'inventory_permanent_delete'])->name('inventory.permanent.delete');



//product sale start
Route::get('sale/form', [SaleController::class, 'create'])->name('sale.form');
Route::post('/get/product/details', [SaleController::class, 'get_product_details'])->name('get.product.details');
//product sale end



//Pdf part start
Route::get('inventory/pdf/{inventory_id}', [PdfmakingController::class, 'Inventory_pdf'])->name('inventory.pdf');
//Pdf part end



//backend product  end





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
