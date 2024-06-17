<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


Route::get('/', function () {
    return view('welcome');
});



// Route::get('/Menu', function () {
//     // Hien Thi trang Khuyen mai
//     return view('Home/Menu');
// })->name('Menu'); 

Route::get('/check-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Kết nối đến cơ sở dữ liệu MySQL thành công.";
    } catch (\Exception $e) {
        die("Không thể kết nối đến cơ sở dữ liệu MySQL: " . $e->getMessage());
    }
});

use App\Http\Controllers\Admin\UserController;
//Dshboard Admin
Route::prefix('/admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.index');
    Route::get('/create', [UserController::class, 'create'])->name('admin.create');
    Route::post('/store', [UserController::class, 'store'])->name('admin.store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('admin.edit'); // Sửa route edit để truyền user vào
    Route::put('/update/{user}', [UserController::class, 'update'])->name('admin.update'); // Thay đổi phương thức PUT
    Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('admin.destroy'); // Thêm user vào route destroy
    Route::get('/show/{user}', [UserController::class, 'show'])->name('admin.show'); // Thêm user vào route show
});

use App\Http\Controllers\Admin\LoaisanphamController;
Route::get('/loaisanpham', [LoaisanphamController::class, 'index'])->name('loaisanpham.index');
Route::delete('/loaisanpham/{loaisanpham}', [LoaisanphamController::class, 'destroy'])->name('loaisanpham.destroy');
Route::get('/loaisanpham/create', [LoaisanphamController::class, 'create'])->name('loaisanpham.create');
Route::post('/loaisanpham', [LoaisanphamController::class, 'store'])->name('loaisanpham.store');
Route::get('/loaisanpham/{type_id}/edit', [LoaisanphamController::class, 'edit'])->name('loaisanpham.edit');
Route::put('/loaisanpham/{type_id}', [LoaisanphamController::class, 'update'])->name('loaisanpham.update');



use App\Http\Controllers\Admin\ProductController;


Route::prefix('/admin')->group(function () {
    
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create'); // Route for rendering the create form
    Route::post('/product', [ProductController::class, 'store'])->name('admin.product.store'); // Route for storing new products
    Route::post('/getProductByType', [ProductController::class, 'getProductByType'])->name('getProductByType');
    Route::get('/product/{product_id}', [ProductController::class, 'show'])->name('admin.product.show');
    Route::get('/product/{product_id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/product/{product_id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/product/{product_id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});


use App\Http\Controllers\Admin\OrderController;
Route::get('/DonHang', [OrderController::class, 'index'])->name('DonHang');
Route::post('/donhang/create', [OrderController::class, 'create'])->name('donhang.create');
Route::delete('/donhang/{id}', [OrderController::class, 'destroy'])->name('donhang.destroy');
Route::get('/print-invoice/{id}', [OrderController::class, 'printInvoice'])->name('print.invoice');

use App\Http\Controllers\Admin\ThongKeController;
Route::get('/ThongKe', [ThongKeController::class, 'index'])->name('ThongKe');





use App\Http\Controllers\Home\HomeController;

Route::get('/Home', [HomeController::class, 'index'])->name('Home');
Route::get('/KhuyenMai', [HomeController::class, 'Sales'])->name('KhuyenMai');
Route::get('/GioiThieu', [HomeController::class, 'About'])->name('About');
Route::get('/CTSanPham/{product_id}',[HomeController::class, 'CTSanPham'])->name('CTSanPham');
Route::get('/DSSanPham/{loai_id}', [HomeController::class, 'Item'])->name('Item');
Route::get('/New', [HomeController::class, 'News'])->name('News');
Route::get('/DatHangThanhCong', [HomeController::class, 'OrderSuss'])->name('OrderSuss');
Route::get('/SanPham', [HomeController::class, 'Products'])->name('Products');
Route::get('/QRBank', [HomeController::class, 'QRBank'])->name('QRBank');
Route::get('/QRMomo', [HomeController::class, 'QRMomo'])->name('QRMomo');
Route::get('/DangKi', [HomeController::class, 'DangKi'])->name('DangKi');
Route::get('/acc', [HomeController::class, 'Acc'])->name('Acc');

use App\Http\Controllers\Home\CartController;

Route::get('/GioHang', [CartController::class, 'index'])->name('GioHang');
Route::post('/cart/create/{product_id}', [CartController::class, 'create'])->name('cart.create');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

use App\Http\Controllers\Home\DonHangController;

Route::get('/ThanhToan', [DonHangController::class, 'index'])->name('ThanhToan');



use App\Http\Controllers\Login\LoginController;

Route::get('/DangNhap', [LoginController::class, 'index'])->name('DangNhap');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/DangKy', [LoginController::class, 'index2'])->name('DangKy');
Route::post('/register', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



















