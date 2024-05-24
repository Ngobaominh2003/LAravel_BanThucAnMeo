<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    public function index2()
    {
        $users = User::all();
        return view('admin.Logo', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.users.create');
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
        return redirect()->route('admin.index')->with('success', 'Người dùng đã được thêm thành công.');
    }

    



    public function edit(User $user)
    {
        return view('admin.users.update', compact('user'));
    }

    public function update(Request $request, $id)
{
    // Tìm người dùng theo ID
    $user = User::findOrFail($id);

    // Validate dữ liệu đầu vào từ form
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:6',
        'phone_number' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'role' => 'nullable|in:user,employee,admin',
        'avatar' => 'nullable|image|max:2048',
    ]);

    // Nếu mật khẩu được cung cấp, mã hóa mật khẩu mới bằng Bcrypt
    if ($request->filled('password')) {
        $validatedData['password'] = Hash::make($validatedData['password']);
    }

    // Nếu người dùng tải lên ảnh mới
    if ($request->hasFile('avatar')) {
        // Xóa ảnh cũ nếu tồn tại
        

        // Lưu ảnh mới vào thư mục public/img
        $avatarPath = $request->file('avatar')->store('img', 'public');

        // Cập nhật đường dẫn ảnh mới vào dữ liệu người dùng
        $validatedData['avatar'] = $avatarPath;
    }

    // Cập nhật thông tin người dùng trong cơ sở dữ liệu
    $user->update($validatedData);

    // Redirect sau khi cập nhật thành công
    return redirect()->route('admin.index')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
}

    public function show(User $user)
    {
        return view('admin.users.CTUser', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['success' => true, 'message' => 'Xóa thành công'], 200);
    }
}
