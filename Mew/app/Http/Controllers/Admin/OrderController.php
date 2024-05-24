<?php

namespace App\Http\Controllers\Admin;
use PDF;

use App\Http\Controllers\Controller;
use App\Models\Loaisanpham;
use App\Models\Product;
use App\Models\DonHang;
use App\Models\Cart;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DonHang::all(); 
        return view('admin.order.Order', ['orders' => $orders]);
    }
    public function create(Request $request)
    {
        // Lấy thông tin từ request
        $userId = $request->user_id;
        $ngayDatHang = now(); // Sử dụng ngày hiện tại

        // Lấy thông tin của giỏ hàng của người dùng
        $cartItems = Cart::where('user_id', $userId)->get();

        // Tính tổng giá trị của đơn hàng
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->product->gia * $cartItem->quantity;
        }

        // Tạo đơn hàng mới
        $order = DonHang::create([
            'user_id' => $userId,
            'tong_gia' => $totalPrice,
            'ngay_dat_hang' => $ngayDatHang,
            'trang_thai' => 'Chưa xử lý' // Có thể thay đổi trạng thái theo nhu cầu của bạn
        ]);

        // Thêm các sản phẩm từ giỏ hàng vào đơn hàng
        foreach ($cartItems as $cartItem) {
            OrderProduct::create([
                'order_id' => $order->order_id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->gia // Giá sản phẩm trong giỏ hàng
            ]);
        }

        // Xóa các mục trong giỏ hàng sau khi đã tạo đơn hàng
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('OrderSuss');
    // Chuyển hướng hoặc trả về phản hồi tuỳ thuộc vào logic của bạn
    }
    public function printInvoice($id) // in hoa don
    {
        $order = DonHang::findOrFail($id);
        $pdf = PDF::loadView('admin.order.InHoaDon  ', compact('order'));
        return $pdf->stream('invoice.pdf');
    }
    public function destroy($id)
    {
        $order = DonHang::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Đơn hàng đã được xóa thành công.');
    }
}
