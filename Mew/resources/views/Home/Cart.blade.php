<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
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
                    <a class="breadcrumb-item text-dark" href="{{ route('Home') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Giỏ hàng</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-11 table-responsive mb-5">
            <table class="text-center mb-0">
                <thead style="font-weight: 700;">
                    <tr>
                        <th>SẢN PHẨM</th>
                        <th class="text-center">LOẠI</th>
                        <th class="text-center">ĐƠN GIÁ</th>
                        <th class="text-center">SỐ LƯỢNG</th>
                        <th class="text-center">SỐ TIỀN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($cartItems as $cartItem)
                        @php
                            $product = $cartItem->product;
                        @endphp

                        @if ($product)
                            <tr>
                                <td class="align-middle">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="{{ asset('img/' . $cartItem->product->hinh_anh) }}" alt="" style="width: 77px; height: 91px;">
                                        </div>
                                        <div class="col-lg-9">
                                            <p style="margin-top: 22px;">{{ $cartItem->product->ten_san_pham }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">{{ $cartItem->product->khoi_luong }}</td>
                                <td class="align-middle text-center">{{ $cartItem->product->gia }}</td>
                                <td class="align-middle">
                                    <div class="input-group quantity" style="width: 100px; border: 2px solid #F5F5F5;margin-left: 74px;">
                                        <div class="input-group-btn">
                                            <button class="btn-minus" style="border: none;background-color: #fff; margin-top: 7px;">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control border-0 text-center" value="{{ $cartItem->quantity }}">
                                        <div class="input-group-btn">
                                            <button class="btn-plus" style="border: none;background-color: #fff;margin-top: 7px;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center">{{ $cartItem->product->gia * $cartItem->quantity }}</td>
                                <td class="align-middle">
                                    <form action="{{ route('cart.destroy', ['id' => $cartItem->cart_id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none;">
                                            <img src="{{ asset('img/trash_icon.png') }}" width="24px" height="24px" alt="Xóa">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7"></div>
        <div class="col-lg-4" style="border-top: 4px solid #F5F5F5;padding-left: 0px; padding-right: 0px;">
            <div class="mt-3 d-flex">
                <h4 style="font-weight: 700;">TỔNG TIỀN:</h4>
                <h4 style="font-weight: 700;margin-left:116px"></h4>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-lg-7"><label class="label-se-bg" style="color: #F27927;margin-left: 107px;font-size: 30px;">
            <i class="fa fa-phone icon-se-bg" style="color: #F27927;">
            </i>
            1800.270.27
        </label></div>
        <div class="col-lg-3" style="padding-left: 0px; padding-right: 0px; font-weight: 700;">
                <div class="mt-3 d-flex">
                    <button class="btn btn-buy" style="width: 356px;"><a href="{{ route('ThanhToan')}}">TIẾN HÀNH THANH TOÁN </a></button>
                </div>
            </div>
        <div class="col-lg-2"></div>
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


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>