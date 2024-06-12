<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cập nhật thông tin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Thông báo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    
</head>

<body>
   <!-- Topbar Start -->
   @include('Home/Logo')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('Home/Menu')
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.html">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="#">Hồ sơ</a>
                    <a class="breadcrumb-item text-dark" href="#">Đổi mật khẩu</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
        <div class="col-lg-3" style="border-right: 2px solid #D9D9D9;">
        <div class="d-flex align-items-center">
            <!-- Hiển thị ảnh nếu có -->
            @if(Auth::check() && Auth::user()->avatar)
                <img src="{{ asset('img/' . Auth::user()->avatar) }}" width="50px" height="50px" style="border-radius: 50%;" />
            @else
                <img src="img/icon_avtar_comments.png" width="21" height="21" style="border-radius: 50%;" />
            @endif
            <!-- Hiển thị tên người dùng nếu đã đăng nhập -->
            @if(Auth::check())
                <h6 style="font-weight: 700;font-size: 40px;margin-left: 25px;">{{ Auth::user()->name }}</h6>
            @else
                <!-- Nếu chưa đăng nhập, bạn có thể hiển thị một tin nhắn khác -->
                <h6 style="font-weight: 700; font-size: 21; margin-left: 11;">Khách vãng lai</h6>
            @endif
            
        </div>
        <!-- Các mục thông tin khác -->
        <p style="margin-top: 30px; color: #F27927;">Thông tin tài khoản</p>
        <p>Đổi mật khẩu</p>
        <p>Đơn mua</p>
        <p>Liên hệ hỗ trợ</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-link" style="color: inherit; text-decoration: none; padding: 0; border: none; background: none;">Đăng xuất</button>
        </form>
        </div>


        <div class="col-lg-7">
            <div style="padding: 20px;">
                <!-- Thêm phần tử để hiển thị thông báo -->
                <div id="success-message" style="display:none; color: green; font-weight: bold; margin-bottom: 20px;">
                    Thông tin người dùng đã được cập nhật thành công.
                </div>
                
                <form id="user-update-form" action="{{ route('admin.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="text-center">
                    @if(Auth::check() && Auth::user()->avatar)
                        <img src="{{ asset('img/' . Auth::user()->avatar) }}" width="200px" height="200px" style="border-radius: 50%;" />
                    @else
                        <img src="img/icon_avtar_comments.png" width="21" height="21" style="border-radius: 50%;" />
                    @endif
                        <p style="margin-top:1px; font-weight: 400; color: #A0A0A0;">Sửa ảnh</p>
                        <input type="file" name="avatar" accept="image/*" style="margin-top:10px;">
                    </div>

                    <div style="margin-top:1px;">
                        <label for="name">Họ tên:</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" style="margin-left: 20px;" class="form-pay-no-change-pass" />
                    </div>

                    <div style="margin-top:1px;">
                        <label for="dc">Địa chỉ:</label>
                        <input type="text" name="address" value="{{ Auth::user()->address }}" class="form-pay-no-change-pass-w input-change-pass-w-49" />
                    </div>

                    <div style="margin-top:1px;">
                        <label for="sdt">Số điện thoại:</label>
                        <input type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" class="form-pay-no-change-pass-w input-change-pass-w-43" />
                    </div>

                    <div style="margin-top:1px;">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-pay-no-change-pass-w input-change-pass-w-50" />
                    </div>

                    <div style="margin-top: 31px;">
                        <button type="submit" class="btn btn-buy">Lưu</button>
                    </div>
                    

                </form>
            </div> 
        </div>
    </div>
</div>

    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5 text-black">
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
        <div class="row px-xl-5 pt-5 text-black">
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>