<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
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
        <div class="row px-xl-5 cus-w-150">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('Home') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="Register.html">Đăng ký</a>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5 cus-500">
            <div class="col-12" style="font-size: 12px;">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.html">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="Register.html">Đăng ký</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid cus-w-150">
        <div class="row px-xl-5">
           <div class="col-lg-5">
            <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-reisgn">Đơn hàng của bạn</span></h2>
            <div class="mx-xl-5">
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/Re_1.png" style="margin-top: 10px;" width="25px" height="25px" />
                    </div>
                    <div class="col-lg-10">
                        <p>Để được trải nghiệm những tiện ích mua sắm, chế</br> độ chăm sóc khách hàng VIP</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/Re_2.png" width="25px" height="25px" />
                    </div>
                    <div class="col-lg-10">
                        <p>Chương trình hấp dẫn chỉ áp dụng cho thành viên</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/Re_3.png" width="25px" height="25px" />
                    </div>
                    <div class="col-lg-10">
                        <p>Tích luỹ điểm để nhận thưởng ngay</p>
                    </div>
                </div>
           </div>
        </div>
        <div class="col-lg-7">
            <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-reisgn">Thông tin người nhận</span></h2>
           <div class="mx-xl-5" style="border:1px solid #D9D9D9">
                <div style="padding:26px">
                    <label>Họ tên:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Địa chỉ:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Số điện thoại:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Email:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <div class="row" style="margin-top:20px">
                        <div class="col-lg-6">
                            <label>Nhập mật khẩu:</label>
                            <input type="text" class="form-pay-no-acc" />
                        </div>
                        <div class="col-lg-6">
                            <label>Nhập lại mật khẩu:</label>
                            <input type="text" class="form-pay-no-acc" />
                        </div>
                    </div>
                     <!--checkbox-->
                <div style="margin-top:35px;margin-left: 10px;">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Tôi đã đọc và chấp nhận với <p style="display: inline;">quy định</p> của tài khoản thành viên Catto</label><br>
                </div>
                    <div style="text-align: center;margin-top:35px">
                        <button class="btn btn-buy">Đăng ký</button>
                    </div>
                </div>
           </div>
        </div>
        </div>
        
    </div>
    <div class="container-fluid cus-500">
        <div class="row px-xl-5">
        <div class="col-lg-12">
            <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-reisgn">Thông tin người nhận</span></h2>
           <div class="mx-xl-5">
                <div style="font-size: 12px;">
                    <label>Họ tên:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Địa chỉ:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Số điện thoại:</label>
                    <input type="text" class="form-pay-no-acc" />
                    <label style="margin-top: 20px;">Email:</label>
                    <input type="text" class="form-pay-no-acc" />
                            <label style="margin-top: 20px;">Nhập mật khẩu:</label>
                            <input type="text" class="form-pay-no-acc" />
                            <label style="margin-top: 20px;">Nhập lại mật khẩu:</label>
                            <input type="text" class="form-pay-no-acc" />
                    </div>
                     <!--checkbox-->
                <div style="margin-top:35px;margin-left: 10px; font-size: 12px;">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Tôi đã đọc và chấp nhận với <p style="display: inline;">quy định</p> của tài khoản thành viên Catto</label><br>
                </div>
                    <div style="text-align: center;margin-top:35px">
                        <button class="btn btn-buy">Đăng ký</button>
                    </div>
                </div>
           </div>
        </div>
        </div>
        
    </div>
    <!-- Cart End -->


 
       <!-- Footer Start -->
       <div class="container-fluid bg-footer text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-12 pr-3 pr-xl-5">
                <h5 class="text-uppercase"  style="font-size: 16px;font-weight: 700;">Liên hệ</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            <div class="col-lg-5 col-md-12 pr-3 pr-xl-5 footer-res">
                <h5 class="text-uppercase" style="font-size: 16px;font-weight: 700;">Về Catto</h5>
                <p class="mb-2" style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2" style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2" style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            
            <div class="col-lg-3 col-md-12 pr-3 pr-xl-5">
                <h5 class="text-uppercase" style="font-size: 16px;font-weight: 700;">Chính sách</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
        </div>
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-1 pr-3 pr-xl-5">
            </div>
            <div class="col-lg-5 col-md-12 pr-3 pr-xl-5 personal-re" style="border-top: 4px solid #D9D9D9;font-size: 14px;">
                <h5 class=" mb-4 text-uppercase"></h5>
                <p class="mb-2 text-center">Catto - cửa hàng bán sản phẩm dành cho mèo uy tín, chất lượng</p>
                <p class="mb-2 text-center">Được vận hành bởi NQD</p>
            </div>
            <div class="col-lg-5 col-md-12 pr-3 pr-xl-5 personal-res" style="font-size: 12px;">
                <h5 class=" mb-4 text-uppercase"></h5>
                <p class="mb-2 text-center">Catto - cửa hàng bán sản phẩm dành cho mèo uy tín, chất lượng</p>
                <p class="mb-2 text-center">Được vận hành bởi NQD</p>
            </div>
            <div class="col-lg-3 col-md-12 pr-3 pr-xl-5">
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