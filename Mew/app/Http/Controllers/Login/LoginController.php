<?php

namespace App\Http\Controllers\Login;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login.DangNhap');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Kiểm tra vai trò của người dùng và chuyển hướng tương ứng
            if ($user->role === 'admin') {
                return redirect()->route('admin.index'); // Chuyển hướng đến trang admin.index nếu là admin
            } elseif ($user->role === 'employee') {
                return redirect()->route('admin.index'); // Chuyển hướng đến trang admin.index nếu là nhân viên
            } elseif ($user->role === 'user') {
                return redirect()->route('Home'); // Chuyển hướng đến trang home nếu là user
            } else {
                // Xử lý trường hợp vai trò khác (nếu cần)
                return redirect()->route('Home');   
            }
        }

        // Xử lý trường hợp đăng nhập không thành công (nếu cần)
        return redirect()->back()->withErrors(['email' => 'Đăng nhập không thành công. Vui lòng kiểm tra email và mật khẩu.']);
    }


    public function index2()
    {
        return view('Login.DangKy');
    }

    public function store(Request $request)
    {
        // Validate input data from the form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'role' => 'nullable|in:user,employee,admin',
            'avatar' => 'nullable|image|max:2048',
        ]);
    
        // Mã hóa mật khẩu
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        // Store the avatar image in the public/img directory if exists
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('img', 'public');
            $validatedData['avatar'] = $avatarPath;
        }
    
        // Create a new user in the database
        User::create($validatedData);
    
        // Redirect after successful submission
        return redirect()->route('DangNhap')->with('success', 'Người dùng đã được thêm thành công.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
