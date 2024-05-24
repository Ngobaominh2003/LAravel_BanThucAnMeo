<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thêm/Thêm người dùng</title>
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
    <link href="{{ asset('css/styleAdmin.css') }}" rel="stylesheet">

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
                <nav class="breadcrumb bg-light" style="margin-bottom: 15px;">
                    <a class="breadcrumb-item text-dark" href="#">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="#">Phân Quyền</a>
                    <a class="breadcrumb-item text-dark" href="#">Thêm người dùng</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
   <!-- Cart Start -->
        <div class="container-fluid">
                <div class="row px-xl-5">
                    <div class="col-lg-7">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div style="padding: 20px;">
                                <label for="name" style="margin-top:30px"><span class="required" style="color: red;">*</span>&nbsp;Tên tài khoản:</label>
                                <input type="text" name="name" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 50px;" placeholder="Nhập tên tài khoản..." required /><br>
                                <label for="email" style="margin-top:30px"><span class="required" style="color: red;">*</span>&nbsp;Email:</label>
                                <input type="email" name="email" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 100px;" placeholder="Nhập địa chỉ email..." required /><br>
                                <label for="password" style="margin-top:30px"><span class="required" style="color: red;">*</span>&nbsp;Mật khẩu:</label>
                                <input type="password" name="password" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 73px;" placeholder="Nhập mật khẩu..." required /><br>
                                <label for="phone_number" style="margin-top:30px">Số điện thoại:</label>
                                <input type="text" name="phone_number" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 55px;" placeholder="Nhập số điện thoại..." /><br>
                                <label for="address" style="margin-top:30px">Địa chỉ:</label>
                                <input type="text" name="address" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 95px;" placeholder="Nhập địa chỉ..." /><br>
                                <label for="role" style="margin-top:30px">Quyền:</label>
                                <select name="role" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 100px;">
                                    <option value="user">User</option>
                                    <option value="employee">Employee</option>
                                    <option value="admin">Admin</option>
                                </select><br>
                                <label for="avatar" style="margin-top:30px">Ảnh đại diện:</label>
                                <input type="file" name="avatar" class="form-pay-no-change-pass-w input-change-pass-w-49" style="margin-left: 60px;" /><br>
                            </div>
                            <div class="row px-xl-5" style="float:right;margin-right: 7rem;">
                                <button type="submit" class="btn btn-buy-outline">Thêm người dùng</button>
                                <button type="submit" class="btn btn-buy" name="show_users" value="1" style="margin-left:10px">Lưu & Hiển thị</button>
                                <button class="btn btn-buy-outline" style="margin-left:10px">Hủy bỏ</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
            




    

    <!-- Cart End -->
   
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