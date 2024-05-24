<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Loaisanpham;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DonHangController extends Controller
{
    
    public function index()
    {
        // Giả sử bạn đã có người dùng đã xác thực
        $user = Auth::user();

        // Lấy các mặt hàng trong giỏ hàng cho người dùng đã xác thực
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        // Tính tổng giá trị đơn hàng
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item->product->gia * $item->quantity;
        }

        // Lấy danh sách các loại sản phẩm
        $loaisanphams = Loaisanpham::all();

        // Chuyển các mặt hàng trong giỏ hàng, danh sách loại sản phẩm, tổng giá trị và thông tin người dùng tới view
        return view('Home.ThanhToan', compact('cartItems', 'loaisanphams', 'totalPrice', 'user'));
    }
}