<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Khuyến mại</title>
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
                    <a class="breadcrumb-item text-dark" href="Sales.html">Khuyến mại</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-pay-no-acc">Khuyến mại hot</span></h2>
        <div class="row px-xl-5">
                <div class="col-lg-7">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <div class="carousel-news">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/tt_1.png" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>CHUYÊN MỤC: KHOE BOSS NHẬN QUÀ!</strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span class="span-sales">Chi tiết >></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-offer mb-5-px" style="height: 200px;">
                        <img class="img-fluid" src="img/Rectangle 36.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>THỨ 4 SĂN GIÁ TỐT CHO BOSS NGAY!
                            </strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span class="span-sales">Chi tiết >></span>
                        </div>
                    </div>
                    <div class="product-offer mb-5-px" style="height: 200px;">
                        <img class="img-fluid" src="img/Rectangle 37.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>COMBO ƯU ĐÃI GẤP ĐÔI!</strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span class="span-sales">Chi tiết >></span>
                        </div>
                    </div>
                </div>
        </div>
        <!---->
        <h2 style="margin-top:70px" class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 title-pay-no-acc">Ngày hội thành viên</span></h2>
        <div class="row px-xl-5">
                <div class="col-lg-7">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <div class="carousel-news">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/KM_5.png" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>GIẢM GIÁ 50%</strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span class="span-sales">Chi tiết >></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-offer mb-5-px" style="height: 200px;">
                        <img class="img-fluid" src="img/KM_6.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>MUA 1 TẶNG 1</strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span class="span-sales">Chi tiết >></span>
                        </div>
                    </div>
                    <div class="product-offer mb-5-px" style="height: 200px;">
                        <img class="img-fluid" src="img/KM_7.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <strong>MUA 1 TẶNG 1</strong></br>
                        </div>
                        <div class="col-lg-4">
                            <span style="float:right;color: #F27927;">Chi tiết >></span>
                        </div>
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