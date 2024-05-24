<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phân quyền</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description"> -->

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/styleAdmin.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('admin/Logo')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('admin/Logoo')
    <!-- Navbar End -->
     <!-- Breadcrumb Start -->
     <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Admin.html">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="ManagerDece.html">Phân quyền</a>
                </nav>
            </div>
       </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="px-xl-5" style="padding-bottom: 2rem;">
           
                 <button class="btn-round" style="margin-right: 1rem;"><img src="../img/plus.png" width="29" height="30"/> </button>
                 <a href="{{ route('admin.create') }}" style="color: #000;">Thêm người dùng</a>
        </div>
       <div class="row px-xl-5">
       <table border="1">
    <tr>
        <th style="text-align: center;"><input type="checkbox"/></th>
        <th style="text-align: center;">STT</th>
        <!-- <th>ID</th> -->
        <th style="text-align: center;">Tên tài khoản</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Mật khẩu</th>
        <th style="text-align: center;">Loại TK</th>
        <th style="text-align: center;">Avatar</th>
        <th style="text-align: center; width: 15%;" colspan="3">Hành động</th>

    </tr>
    @foreach($users as $user)
    <tr>
        <td>
            <input type="checkbox"/>
        </td>
        <td>{{ $loop->iteration }}</td>
        <!-- <td>{{ $user->id }}</td> -->
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->role }}</td>
        <td style="width: 100px; height: 100px;"> <!-- Adjust the width and height as needed -->
            <img src="{{ asset('img/' . $user->avatar) }}" alt="Avatar" style="width: 100%; height: 100%;">
        </td>

        <td><a href="{{ route('admin.show', $user->id) }}" ><img src="{{ asset('img/icon/ctsp.png') }}" alt="Icon" style="width: 50px; height: auto;"></a></td>
        <td><a href="{{ route('admin.edit', $user->id) }}" ><img src="{{ asset('img/icon/sua.png') }}" alt="Icon" style="width: 50px; height: auto;"></a></td>
        <!-- Form để xóa người dùng -->
        <td>
            <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="user_id" value="{{ $user->id }}"> <!-- Thêm trường ẩn chứa ID người dùng -->
                <a type="submit" class="delete-btn"><img src="{{ asset('img/icon/xoa.png') }}" alt="Icon" style="width: 50px; height: auto;"></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-btn').click(function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của form

            if (confirm('Bạn có chắc chắn muốn xóa?')) {
                var form = $(this).closest('form'); // Tìm form gần nhất
                var userId = form.find('input[name="user_id"]').val(); // Lấy ID của người dùng từ trường ẩn

                $.ajax({
                    url: form.attr('action'), // Lấy URL của form
                    type: form.attr('method'), // Lấy phương thức của form
                    data: form.serialize(), // Lấy dữ liệu từ form
                    success: function(response) {
                        if (response.success) {
                            // Xóa hàng trên giao diện
                            form.closest('tr').remove();
                            alert(response.message); // Thông báo xóa thành công
                        } else {
                            alert(response.message); // Thông báo lỗi
                        }
                    },
                    error: function(err) {
                        console.error('Lỗi khi xóa:', err);
                    }
                });
            }
        });
    });
</script>




       </div>
          <div class="row px-xl-5" style="float:right;padding-top: 1rem;">
       
            <button class="btn btn-buy">Cập nhật </button>
            <button class="btn btn-buy-outline" style="margin-left:10px">Hủy bỏ</button>
            
          </div>
          
        </div>
    <!-- Products End -->
   
    <!-- Footer Start -->
    <div class="container-fluid bg-footer text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" mb-4 text-uppercase"  style="font-size: 16px;">Liên hệ</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" mb-4 text-uppercase" style="font-size: 16px;">Về Catto</h5>
                <p class="mb-2" style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2" style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2" style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" mb-4 text-uppercase" style="font-size: 16px;">Chính sách</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
        </div>
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            </div>
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5" style="border-top: 4px solid #D9D9D9;font-size: 14px;">
                <h5 class=" mb-4 text-uppercase"></h5>
                <p class="mb-2 text-center">Catto - cửa hàng bán sản phẩm dành cho mèo uy tín, chất lượng</p>
                <p class="mb-2 text-center">Được vận hành bởi NQD</p>
            </div>
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>