<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCRUDController;
use App\Http\Controllers\AdminForUserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// user login
Route::get('/login', function () {
    return view('login');
});
// user logout
// Route::get('/logout', function () {
//     Session::forget('user');
//     return redirect('/');
// });
// Route::get('/logout', function () {
//     if(session()->has('user'))
//     {
//         Session::forget('user');
//         return redirect('/');
//     }
//     return redirect('/login');
// });

Route::get('/logout' , [UserController::class, 'userLogout']);



// check if user already loged in
Route::get('/login', [UserController::class , 'ifUserLogin']);
Route::view("/register", 'register');
Route::post('/login', [UserController::class , 'login']);
Route::post('/register', [UserController::class , 'register']);

//product section
Route::get('/', [ProductController::class , 'index']);
Route::get("detail/{id}", [ProductController::class , 'detail']);
Route::get("/search", [ProductController::class , 'search']);
Route::post("add_to_cart", [ProductController::class , 'addToCart']);
Route::get("cart_list", [ProductController::class , 'cartList']);
Route::get("emptycart", [ProductController::class , 'emptyCart']);
Route::get("noorder", [ProductController::class , 'noOrder']);
Route::get("full_cart", [ProductController::class , 'cartFull']);
Route::get("remove_cart/{id}", [ProductController::class , 'removeCart']);
Route::get("buy_now", [ProductController::class , 'buyNow']);
Route::post("orderplace", [ProductController::class , 'orderPlace']);
Route::get("myorders", [ProductController::class , 'myOrders']);

Route::post("update-cart", [ProductController::class , 'updateCart']);


// admin section
Route::view('/admin_login', 'admin_login');
Route::post("admin_login" , [AdminController::class, 'adminLogin']);
Route::view("add_products" , 'add_products');
// Route::post("add_products", [AdminController::class , 'add_products']);
Route::get("admin_login", [AdminController::class , 'adminLogin']);
Route::view("admin/admin" , 'admin/admin');
Route::get('/admin/admin_logout' , [AdminController::class, 'adminLogout']);
Route::get('/admin_login', [AdminController::class , 'ifAdminLogin']);

Route::get('/admin/admin_profile', [AdminController::class , 'adminProfile']);
Route::get('/admin/admin_settings', [AdminController::class , 'adminSettings']);

// product crud ny admin
Route::get('/admin/products_list', [AdminController::class , 'productsList']);
Route::view("/admin/products_add" , '/admin/products_add');
Route::post('/admin/products_add', [AdminController::class , 'productsAdd']);
Route::get('admin/product_delete/{id}', [AdminController::class , 'deleteProduct']);
Route::get("admin/product_update/{id}", [AdminController::class , 'fecthProductForUpdate']);
Route::post("admin/product_update", [AdminController::class , 'productDataUpdate']);


Route::view('/admin/check','/admin/check');

// admin crud
Route::view('admin/add_admin','admin/add_admin');
Route::post("/admin/add_admin", [AdminCRUDController::class , 'add_admin']);
Route::get("admin/delete_admin/{id}", [AdminCRUDController::class , 'adminDelete']);
Route::get("admin/update_admin/{id}", [AdminCRUDController::class , 'fecthAdminForUpdate']);
Route::post("admin/update_admin", [AdminCRUDController::class , 'adminDataUpdate']);
Route::get("admin/admin_list", [AdminCRUDController::class , 'adminList']);

// user crud which is perform by admin
Route::get("admin/users_list", [AdminForUserController::class , 'usersList']);
Route::get("admin/users_manage", [AdminForUserController::class , 'usersManage']);
Route::get("admin/delete_user/{id}", [AdminForUserController::class , 'userDelete']);
Route::get("admin/update_user/{id}", [AdminForUserController::class , 'fecthUserForUpdate']);
Route::post("admin/update_user", [AdminForUserController::class , 'userDataUpdate']);







