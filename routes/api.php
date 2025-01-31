<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CategoryController::class)->group(function () {
    Route::post('addcategory', 'addCategory');
    Route::get('activecategories', 'getCategories');
    Route::get('inactivecategories', 'getInactiveCategories');
    Route::delete('archivecategory/{id}', 'archiveCategory');
    Route::delete('activecategory/{id}', 'inArchiveCategory');
    
});

