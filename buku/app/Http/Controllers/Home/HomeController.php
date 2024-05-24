<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Loaisanpham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
        $loaisanphams = Loaisanpham::all();

        // Trả về view và truyền biến $loaisanphams sang view
        return view('Home.Menu', ['loaisanphams' => $loaisanphams]);

    }
}
