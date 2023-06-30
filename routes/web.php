<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\OperationProductController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\Admin\Users\LogoutController;
use App\Http\Controllers\Admin\Users\RegisterController;


use App\Http\Controllers\User\MainUserController;
use App\Http\Controllers\User\testController;
use App\Models\OperationProduct;
use Monolog\Registry;

Route::get('/',function(){
    return view('welcome');
});

//login
Route::get('/admin/login', [LoginController::class, 'index'])-> name('login');
Route::post('/admin/login/store', [LoginController::class, 'store']);
//register
Route::get('/admin/register',[RegisterController::class,'index']);
Route::post('/admin/register/store', [RegisterController::class, 'store']);

Route::get('/admin/maxacnhan', function(){
    return view('admin.pages.maxacnhan');
});
Route::post('/admin/maxacnhan/store',[RegisterController::class,'xacnhan']);

//logout
Route::get('/logout',[LogoutController::class,'logout']);


//  middleware có chức năng là chỉ khi đăng nhập mới có thể vào trang
// đăng nhâp vào admin --- ktra nếu chưa đăng nhập thì đưa vào http/middleware/Auth đưa đến trang login
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/admin/main',[MainController::class,'home']) -> name('admin');


    //trang admin
    Route::get('/admin/pages/home',[MainController::class,'home']);
    Route::get('/admin/pages/sanpham',[MainController::class,'sanpham']);

    //operation Product
        //add
    Route::post('/admin/pages/sanpham/store',[OperationProductController::class,'store']);
    //view sp
    Route::get('/admin/pages/sanpham',[OperationProductController::class,'viewproduct']);

    // UpdateProduct
    Route::get('/admin/pages/sanpham/edit/{idsp}',[OperationProductController::class, 'edit']);
    Route::PATCH('/admin/pages/sanpham/edit/{idsp}', [OperationProductController::class, 'update']);

    // delete
    Route::get('/admin/pages/sanpham/edit/{idsp}',[OperationProductController::class, 'edit']);
    Route::delete('/admin/pages/sanpham/delete/{idsp}', [OperationProductController::class, 'delete']);

});


// Users
Route::middleware(['auth'])->group(function(){
    Route::get('/user/main',[MainUserController::class,'home']);
    Route::get('/user/pages/home',[MainUserController::class,'home']);
    Route::get('/user/pages/sanpham',[MainUserController::class,'sanpham']);



    //view sp
    Route::get('/user/pages/sanpham',[UserProductController::class,'viewproduct']);

    //search
    Route::get('/user/pages/filter/sanpham',[UserProductController::class,'filter']);
    Route::get('/user/pages/search/sanpham',[UserProductController::class,'search']);

    // chitietsanpham
    Route::get('/user/pages/sanpham/chitietsanpham/{idsp}',[UserProductController::class,'chitietsanpham']);

    // Cart
    Route::post('/user/pages/sanpham/cart/{id}',[CartController::class,'cartview']);
    Route::get('/user/pages/sanpham/cart',[CartController::class,'viewProductCart']);

    // delete
    Route::delete('/user/pages/delete/{idproduct}',[CartController::class,'deletecart']);

    // Ma giam gia
    Route::post('/user/pages/sanpham/cart/store',[CartController::class,'magiamgiaa']);

    // Pay
    Route::get('/user/pages/sanpham/pay',[CartController::class,'viewPay']);
    Route::post('/user/pages/sanpham/payStore',[CartController::class,'Pay']);

    //History
    Route::post('/user/pages/history/store',[CartController::class,'store_history']);
    Route::get('/user/pages/history/{id_user}',[CartController::class,'view_history']);


    // bill
    Route::post('/user/pages/bill/store/{iduser}',[CartController::class,'billStore']);
    Route::get('/user/pages/bill/',[CartController::class,'bill']);

    // momo
    Route::post('/momopay',[CartController::class,'momopay']);



});



Route::get('/',[MainController::class,'welcome']);




///////////////////////////
Route::get('/test',[testController::class,'showtest']);


