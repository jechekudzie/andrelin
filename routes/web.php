<?php

use App\Http\Controllers\OrganisationRolesController;
use App\Http\Controllers\OrganisationsController;
use App\Http\Controllers\OrganisationTypeController;
use App\Http\Controllers\OrganisationUsersController;
use App\Http\Controllers\ProfileController;
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

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

//Display all organisation types via API
Route::get('/admin/organisation-types', [OrganisationTypeController::class, 'index'])->name('admin.organisation-types.index');
//Create new organisation types directly
Route::post('/admin/organisation-types/store', [OrganisationTypeController::class, 'store'])->name('admin.organisation-types.store');
//add organisation type of organisation type
Route::post('/admin/organisation-types/{organisationType}', [OrganisationTypeController::class, 'organisationTypeOrganisation'])->name('admin.organisation-types.organisation-type');

//Display all organisations via API
Route::get('/admin/organisations', [OrganisationsController::class, 'index'])->name('admin.organisations.index');
Route::post('/admin/organisations/store', [OrganisationsController::class, 'store'])->name('admin.organisations.store');
Route::patch('/admin/organisations/{organisation}/update', [OrganisationsController::class, 'update'])->name('admin.organisations.update');
Route::delete('/admin/organisations/{organisation}', [OrganisationsController::class, 'destroy'])->name('admin.organisations.destroy');
Route::get('/admin/organisations/manage', [OrganisationsController::class, 'manageOrganisations'])->name('admin.organisations.manage');


//organisation roles routes pass organisation slug
Route::get('/admin/organisation-roles/{organisation}', [OrganisationRolesController::class, 'index'])->name('admin.organisation-roles.index');
Route::post('/admin/organisation-roles/{organisation}/store', [OrganisationRolesController::class, 'store'])->name('admin.organisation-roles.store');
Route::get('/admin/organisation-roles/{role}/edit', [OrganisationRolesController::class, 'edit'])->name('admin.organisation-roles.edit');
Route::patch('/admin/organisation-roles/{role}/update', [OrganisationRolesController::class, 'update'])->name('admin.organisation-roles.update');
Route::delete('/admin/organisation-roles/{role}', [OrganisationRolesController::class, 'destroy'])->name('admin.organisation-roles.destroy');

//routes for organisation users
Route::get('/admin/organisation-users/{organisation}', [OrganisationUsersController::class, 'index'])->name('admin.organisation-users.index');
Route::post('/admin/organisation-users/{organisation}/store', [OrganisationUsersController::class, 'store'])->name('admin.organisation-users.store');
Route::patch('/admin/organisation-users/{user}/update', [OrganisationUsersController::class, 'update'])->name('admin.organisation-users.update');
Route::delete('/admin/organisation-users/{user}/{organisation}', [OrganisationUsersController::class, 'destroy'])->name('admin.organisation-users.destroy');

//create permissions
Route::get('/admin/permissions', [\App\Http\Controllers\PermissionController::class, 'index'])->name('admin.permissions.index');
Route::post('/admin/permissions/store', [\App\Http\Controllers\PermissionController::class, 'store'])->name('admin.permissions.store');
Route::get('/admin/permissions/{permission}/edit', [\App\Http\Controllers\PermissionController::class, 'edit'])->name('admin.permissions.edit');
Route::patch('/admin/permissions/{permission}/update', [\App\Http\Controllers\PermissionController::class, 'update'])->name('admin.permissions.update');
Route::delete('/admin/permissions/{permission}', [\App\Http\Controllers\PermissionController::class, 'destroy'])->name('admin.permissions.destroy');

//assign permission to organisation roles
Route::get('/admin/permissions/{organisation}/{role}/assignPermission', [\App\Http\Controllers\PermissionController::class, 'assignPermission'])->name('admin.permissions.assign');
Route::post('/admin/permissions/{organisation}/{role}/assignPermissionToRole', [\App\Http\Controllers\PermissionController::class, 'assignPermissionToRole'])->name('admin.permissions.assign-permission-to-role');

//shop routes
Route::get('admin/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::post('admin/shop/store', [\App\Http\Controllers\ShopController::class, 'store'])->name('shop.store');
Route::get('admin/shop/{shop}/edit', [\App\Http\Controllers\ShopController::class, 'edit'])->name('shop.edit');
Route::patch('admin/shop/{shop}/update', [\App\Http\Controllers\ShopController::class, 'update'])->name('shop.update');
Route::delete('admin/shop/{shop}', [\App\Http\Controllers\ShopController::class, 'destroy'])->name('shop.destroy');

//product category routes
Route::get('admin/product-categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('product-categories.index');
Route::post('admin/product-categories/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('product-categories.store');
Route::get('admin/product-categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('product-categories.edit');
Route::patch('admin/product-categories/{category}/update', [\App\Http\Controllers\CategoryController::class, 'update'])->name('product-categories.update');
Route::delete('admin/product-categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('product-categories.destroy');


//product routes
Route::get('admin/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('admin/products/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('admin/products/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::patch('admin/products/{product}/update', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('admin/products/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
