<?php

use App\Http\Controllers\OrganisationRolesController;
use App\Http\Controllers\OrganisationsController;
use App\Http\Controllers\OrganisationTypeController;
use App\Http\Controllers\OrganisationUsersController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
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

Route::get('/shop', function () {
    $categories = Category::all();
    $shops = Shop::all();

    //set up price ranges
    // Retrieve min and max prices from the database
    $minPrice = Product::min('customer_price');
    $maxPrice = Product::max('customer_price');

    // Round min price down to nearest 10
    $roundedMinPrice = floor($minPrice / 10) * 10;

    // Round max price up to nearest 10
    $roundedMaxPrice = ceil($maxPrice / 10) * 10;

    // Generate price ranges
    $priceRanges = [];
    for ($i = $roundedMinPrice; $i <= $roundedMaxPrice; $i += 100) {
        $rangeStart = $i + 1;
        $rangeEnd = $i + 1 + 99;
        $priceRanges[] = "$$rangeStart - $$rangeEnd";
    }

    return view('shop')
        ->with('shops', $shops)
        ->with('priceRanges', $priceRanges)
        ->with('categories', $categories);
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);

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

//suppliers routes
Route::get('admin/suppliers', [\App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers.index');
Route::post('admin/suppliers/store', [\App\Http\Controllers\SupplierController::class, 'store'])->name('suppliers.store');
Route::get('admin/suppliers/{supplier}/edit', [\App\Http\Controllers\SupplierController::class, 'edit'])->name('suppliers.edit');
Route::patch('admin/suppliers/{supplier}/update', [\App\Http\Controllers\SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('admin/suppliers/{supplier}', [\App\Http\Controllers\SupplierController::class, 'destroy'])->name('suppliers.destroy');

//supplier product lines routes
Route::get('admin/suppliers/{supplier}/product-lines', [\App\Http\Controllers\SupplierProductLineController::class, 'index'])->name('suppliers.product-lines.index');
Route::post('admin/suppliers/{supplier}/product-lines/store', [\App\Http\Controllers\SupplierProductLineController::class, 'store'])->name('suppliers.product-lines.store');
Route::get('admin/suppliers/{supplier}/product-lines/{supplierProductLine}/edit', [\App\Http\Controllers\SupplierProductLineController::class, 'edit'])->name('suppliers.product-lines.edit');
Route::patch('admin/suppliers/{supplier}/product-lines/{supplierProductLine}/update', [\App\Http\Controllers\SupplierProductLineController::class, 'update'])->name('suppliers.product-lines.update');
Route::delete('admin/suppliers/{supplier}/product-lines/{supplierProductLine}', [\App\Http\Controllers\SupplierProductLineController::class, 'destroy'])->name('suppliers.product-lines.destroy');


//stock routes
Route::get('admin/stock', [\App\Http\Controllers\InventoryBatchController::class, 'index'])->name('stock.index');
Route::get('admin/stock/{product}/create', [\App\Http\Controllers\InventoryBatchController::class, 'create'])->name('stock.create');
Route::post('admin/stock/{product}/store', [\App\Http\Controllers\InventoryBatchController::class, 'store'])->name('stock.store');
Route::get('admin/stock/{stock}/edit', [\App\Http\Controllers\InventoryBatchController::class, 'edit'])->name('stock.edit');
Route::patch('admin/stock/{stock}/update', [\App\Http\Controllers\InventoryBatchController::class, 'update'])->name('stock.update');
Route::delete('admin/stock/{stock}', [\App\Http\Controllers\InventoryBatchController::class, 'destroy'])->name('stock.destroy');

//stock tracking routes for a product
Route::get('admin/stock/{product}/track', [\App\Http\Controllers\StockTrackingController::class, 'index'])->name('stock.track.index');
Route::post('admin/stock/{product}/track/store', [\App\Http\Controllers\StockTrackingController::class, 'store'])->name('stock.track.store');
Route::patch('admin/stock/{product}/track/update', [\App\Http\Controllers\StockTrackingController::class, 'update'])->name('stock.track.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
