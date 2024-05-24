<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\Loaisanpham;
use App\Models\Product;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        public function Menu()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Menu', ['loaisanphams' => $loaisanphams]);
            
        }

        public function Item($loai_id) {
            // Lấy danh sách sản phẩm thuộc loại sản phẩm có loai_id tương ứng
            $products = Product::where('loai_id', $loai_id)->get();
            
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();
        
            // Trả về view và truyền cả hai biến sang view
            return view('Home.Item', compact('loaisanphams', 'products'));
        }
        
        

        public function LogIn()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.LogIn', ['loaisanphams' => $loaisanphams]);
            
        }
        public function Logo()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Logo', ['loaisanphams' => $loaisanphams]);
            
        }
        public function Logo2()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Logo', ['loaisanphams' => $loaisanphams]);
            
        }
        public function index()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Index', ['loaisanphams' => $loaisanphams]);
            
        }

        public function Sales()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Sales', ['loaisanphams' => $loaisanphams]);
            
        }

        public function About()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.About', ['loaisanphams' => $loaisanphams]);
            
        }

        

        
        
        

        
        public function CTSanPham(string $product_id)
        {
            $loaisanphams = Loaisanpham::all();
            $product = Product::findOrFail($product_id); // Tìm sản phẩm với id tương ứng hoặc throw ra một exception nếu không tìm thấy
            return view('Home.CTSanPham', compact('product','loaisanphams')); // Truyền dữ liệu sản phẩm vào view
        }
        
        
        

        

        public function News()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.News', ['loaisanphams' => $loaisanphams]);
            
        }

        public function OrderSuss()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.OrderSuss', ['loaisanphams' => $loaisanphams]);
            
        }

        public function ThanhToan()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.ThanhToan', ['loaisanphams' => $loaisanphams]);
            
        }
        

        public function Products()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Products', ['loaisanphams' => $loaisanphams]);
            
        }

        public function QRBank()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.QRBank', ['loaisanphams' => $loaisanphams]);
            
        }

        public function QRMomo()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.QRMomo', ['loaisanphams' => $loaisanphams]);
            
        }

        public function Register()
        {
            // Lấy danh sách loại sản phẩm từ cơ sở dữ liệu
            $loaisanphams = Loaisanpham::all();

            // Trả về view và truyền biến $loaisanphams sang view
            return view('Home.Register', ['loaisanphams' => $loaisanphams]);
            
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
    public function show(Loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loaisanpham $loaisanpham)
    {
        //
    }
}
