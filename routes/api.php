<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ProductsController;
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




Route::get('/admin/organisation-types', [ApiController::class, 'fetchTemplate']);
//organisations
Route::get('/admin/organisations', [ApiController::class, 'fetchOrganisationInstances']);
//organisation
Route::get('/admin/organisations/{organisation}/edit', [ApiController::class, 'fetchOrganisation']);



//shop routes to get products and filter products
Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products/{product}


Route::middleware('auth:sanctum')->get(' / user', function (Request $request) {
    return $request->user();
});
