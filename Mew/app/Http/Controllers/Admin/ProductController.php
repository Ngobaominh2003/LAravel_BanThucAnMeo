<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loaisanpham;
use App\Models\Product;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all();
    //     return view('admin.product.sanpham', compact('products'));
    // }

        public function index(Request $request)
        {
            // Lấy thông tin về loại sản phẩm được chọn từ URL
            $loai_id = $request->query('loai_id');
        
            // Kiểm tra xem có loại sản phẩm được chọn hay không
            if ($loai_id) {
                // Lọc danh sách sản phẩm dựa trên loại sản phẩm được chọn
                $products = Product::where('loai_id', $loai_id)->get();
            } else {
                // Nếu không có loại sản phẩm được chọn, hiển thị tất cả sản phẩm
                $products = Product::all();
            }
        
            // Trả về view với danh sách sản phẩm đã lọc
            return view('admin.product.sanpham', compact('products'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create'); // Render the form for creating a new product
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'ten_san_pham' => 'required|string|max:255',
            'loai_id' => 'required|exists:loaisanpham,type_id',
            'mo_ta' => 'nullable|string',
            'gia' => 'nullable|numeric',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
            'khoi_luong' => 'nullable|string|max:255',
            'so_luong' => 'nullable|integer',
        ]);

        // Handle file upload
        if ($request->hasFile('hinh_anh')) {
            // Store image in public/img directory
            $imagePath = $request->file('hinh_anh')->store('img', 'public');
            $validatedData['hinh_anh'] = $imagePath; // Update image path in validated data
        }

        // Create new product using validated data
        $product = Product::create($validatedData);

        // Redirect to a success page or back to the form with a success message
        return redirect()->route('admin.product.store')->with('success', 'Product created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $product_id)
    {
        $product = Product::findOrFail($product_id); // Tìm sản phẩm với id tương ứng hoặc throw ra một exception nếu không tìm thấy
        return view('admin.product.CTSP', compact('product')); // Truyền dữ liệu sản phẩm vào view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {
        // Tìm sản phẩm để chỉnh sửa dựa trên ID
        $product = Product::findOrFail($product_id);
       
        // Trả về view để hiển thị biểu mẫu chỉnh sửa sản phẩm với dữ liệu sản phẩm được truyền vào
        return view('admin.product.update', compact('product'));
    }
    
    

    public function update(Request $request, $product_id)
    {
        // Tìm sản phẩm cần cập nhật
        $product = Product::findOrFail($product_id);

        // Cập nhật thông tin sản phẩm từ dữ liệu được gửi từ form
        $product->ten_san_pham = $request->input('ten_san_pham');
        $product->loai_id = $request->input('loai_id');
        $product->mo_ta = $request->input('mo_ta');
        $product->gia = $request->input('gia');
        $product->khoi_luong = $request->input('khoi_luong');
        $product->so_luong = $request->input('so_luong');

        // Kiểm tra xem người dùng có tải lên ảnh mới không
        if ($request->hasFile('hinh_anh')) {
            // Lưu ảnh mới vào thư mục public/img
            $imagePath = $request->file('hinh_anh')->store('img', 'public');
            // Cập nhật đường dẫn ảnh mới vào cơ sở dữ liệu
            $product->hinh_anh = $imagePath;
        }
        

        // Lưu các thay đổi vào cơ sở dữ liệu
        $product->save();

        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->route('admin.product');
    }

    
    

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::find($product_id);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
        }

        // Thực hiện xóa sản phẩm
        $product->delete();

        // Chuyển hướng người dùng về trang danh sách sản phẩm và hiển thị thông báo thành công
        return redirect()->route('admin.product')->with('success', 'Xóa sản phẩm thành công');
    }

    
}
