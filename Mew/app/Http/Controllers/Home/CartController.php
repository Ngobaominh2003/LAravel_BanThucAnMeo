<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Loaisanpham;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    
    
    
     public function index()
    {
        // Giả sử bạn đã có người dùng đã xác thực
        $user = Auth::user();

        // Lấy các mặt hàng trong giỏ hàng cho người dùng đã xác thực
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        // Lấy danh sách các loại sản phẩm
        $loaisanphams = Loaisanpham::all();

        // Chuyển các mặt hàng trong giỏ hàng và danh sách loại sản phẩm tới view
        return view('Home.Cart', compact('cartItems', 'loaisanphams'));
    }
        

    
    
    public function create(Request $request, $productId)
    {
        // Lấy thông tin số lượng từ yêu cầu
        $quantity = $request->input('quantity', 1);

        // Lấy user_id từ người dùng hiện tại
        $userId = Auth::id();

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng hiện tại chưa
        $existingCartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
        if ($existingCartItem) {
            $existingCartItem->quantity += $quantity;
            $existingCartItem->save();
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, tạo một mục mới
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        // Chuyển hướng người dùng đến trang giỏ hàng
        return redirect()->route('GioHang');
    }
        
 
    /**
     * Show the form for creating a new resource.
     */
    
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Tìm và xóa mục khỏi giỏ hàng dựa trên ID
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('GioHang')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
        } else {
            return redirect()->route('GioHang')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng.');
        }
    }

}
