<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thanh Toán</title>
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
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.html">Trang chủ</a>
                    <span class="breadcrumb-item active">Thanh toán</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="row px-xl-5">
    <div class="col-lg-5">
        <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-pay-no-acc">Thông tin người nhận</span></h2>
        <div class="mx-xl-5" style="border:1px solid #D9D9D9">
            <div style="padding:26px">
                <label>Họ tên:</label>
                <input type="text" class="form-pay-no-acc" value="{{ $user->name }}" />
                <label style="margin-top: 30px;">Địa chỉ:</label>
                <input type="text" class="form-pay-no-acc" value="{{ $user->address }}" />
                <label style="margin-top: 30px;">Số điện thoại:</label>
                <input type="text" class="form-pay-no-acc" value="{{ $user->phone_number }}" />
                <label style="margin-top: 30px;">Email:</label>
                <input type="text" class="form-pay-no-acc" value="{{ $user->email }}" />
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-5">
                        <button class="btn btn-sign">Sửa thông tin</button>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <h2 class="section-title text-uppercase mb-4"><span class="pr-3 title-pay-no-acc">Đơn hàng của bạn</span></h2>
        <div>
            <div class="row count-res">
                <div class="col-lg-8">
                    <strong>SẢN PHẨM</strong>
                </div>
                <div class="col-lg-2">
                    <strong style="float: right;">SỐ TIỀN</strong>
                </div>
            </div>
            <!-- Hiển thị các sản phẩm trong giỏ hàng -->
            @foreach($cartItems as $item)
                <div class="row count-res">
                    <div class="col-lg-2">
                        <img src="{{ asset('img/' . $item->product->hinh_anh) }}" alt="Product Image" style="width: 100px; height: auto;">
                    </div>
                    <div class="col-lg-6">
                        <p>{{ $item->product->ten_san_pham }}, SL: x{{ $item->quantity }}</p>
                    </div>
                    <div class="col-lg-2">
                        <p style="float: right;">{{ number_format($item->product->gia * $item->quantity, 0, ',', '.') }} VND</p>
                    </div>
                </div>
            @endforeach

            <div class="row pr-xl-5 count-res">
                <div class="col-lg-7"></div>
                <div class="col-lg-4">
                    <p style="border-bottom: 2px solid #D9D9D9"></p>
                </div>
            </div>
            <div class="row pr-xl-5 count-res">
                <div class="col-lg-8">
                    <strong>TỔNG TIỀN:</strong>
                </div>
                <div class="col-lg-3">
                    <p style="float: right; margin-right: 17px;">{{ number_format($totalPrice, 0, ',', '.') }} VND</p>
                </div>
            </div>
            <p style="margin-top:20px;margin-left: 10px;">Phương thức thanh toán:</p>
            <!-- Radio button -->
            <div style="margin-left: 10px;">
                <input type="radio" id="momo" class="form-radio" name="thanhtoan" value="momo">
                <label for="momo">Ví điện tử Momo</label><br>
                <input type="radio" id="the" name="thanhtoan" class="form-radio" value="the">
                <label for="the">Thanh toán qua thẻ ngân hàng</label><br>
                <input type="radio" id="nhanhang" class="form-radio" name="thanhtoan" value="nhanhang" checked>
                <label for="nhanhang">Thanh toán khi nhận hàng</label>
            </div>
            <!-- Checkbox -->
            <div style="margin-top:20px;margin-left: 10px;">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> Tôi đồng ý với các điều khoản của Catto</label><br>
            </div>
            <!-- Button -->
            <form action="{{ route('donhang.create') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <!-- Các trường dữ liệu khác của đơn hàng -->
    <button type="submit" class="btn btn-buy">Mua hàng</button>
    
</form>


            <div style="margin-top:25px;margin-left:10px">
                <p>Chúng tôi sẽ gọi điện lại để tư vấn và xác nhận đơn hàng của quý khách trước khi giao.</p>
                <p>Thông tin của quý khách sẽ được sử dụng để xử lý đơn hàng này theo chính sách riêng tư của Catto.</p>
            </div>
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>