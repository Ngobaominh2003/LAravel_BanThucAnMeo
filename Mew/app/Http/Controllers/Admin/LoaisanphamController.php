<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loaisanpham;
use App\Models\Product;
use Illuminate\Http\Request;

class LoaisanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loaisanphams = Loaisanpham::all();
        return view('admin.loaiSP.danhmuc', compact('loaisanphams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loaiSP.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'ten_loai_san_pham' => 'required|string',
            'anh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Giả sử bạn đang tải lên một hình ảnh
        ]);

        // Xử lý tải lên tệp
        if ($request->hasFile('anh')) {
            $image = $request->file('anh');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img'), $imageName);
        } else {
            $imageName = ''; // Đặt một tên hình ảnh mặc định nếu không có hình ảnh được tải lên
        }

        // Tạo một thể hiện loại sản phẩm mới
        Loaisanpham::create([
            'ten_loai_san_pham' => $request->ten_loai_san_pham,
            'anh' => $imageName,
        ]);

        return redirect()->route('loaisanpham.index')->with('success', 'Loại sản phẩm đã được tạo thành công.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($type_id)
    {
        // Tìm loại sản phẩm cần chỉnh sửa dựa trên type_id
        $loaisanpham = Loaisanpham::findOrFail($type_id);
        
        return view('admin.loaiSP.update', compact('loaisanpham'));
    }

    public function update(Request $request, $type_id)
    {
        // Tìm loại sản phẩm cần cập nhật dựa trên type_id
        $loaisanpham = Loaisanpham::findOrFail($type_id);

        // Xác thực dữ liệu đầu vào
        $request->validate([
            'ten_loai_san_pham' => 'required|string',
            'anh' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Nếu bạn muốn cho phép không cần phải tải ảnh lên
        ]);

        // Xử lý tải lên tệp
        if ($request->hasFile('anh')) {
            $image = $request->file('anh');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img'), $imageName);
        } else {
            $imageName = $loaisanpham->anh; // Sử dụng ảnh cũ nếu không có ảnh mới được tải lên
        }

        // Cập nhật thông tin loại sản phẩm
        $loaisanpham->update([
            'ten_loai_san_pham' => $request->ten_loai_san_pham,
            'anh' => $imageName,
        ]);

        return redirect()->route('loaisanpham.index')->with('success', 'Loại sản phẩm đã được cập nhật thành công.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loaisanpham $loaisanpham)
    {
        $loaisanpham->delete();
        return redirect()->route('loaisanpham.index')->with('success', 'Product type deleted successfully.');
    }
}
