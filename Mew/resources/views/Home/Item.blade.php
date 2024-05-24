<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Catto Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description"> -->

    <!-- Favicon -->
    <link href="{{ asset('css/style.css') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                    <a class="breadcrumb-item text-dark" href="Products.html">Sản phẩm</a>
                    <span class="breadcrumb-item active">Thức ăn</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!--nav menu-->
    <div class="row nav-me-res">
        <div class="col-lg-6">
            <a href="">Thức ăn khô</a></br>
            <a href="">Thức ăn ướt</a></br>
            <a href="">Paste</a></br>
        </div>
        <div class="col-lg-6">
            <a href="">Thức ăn dặm</a></br>
            <a href="">Thức ăn tươi sống</a></br>
            <a href="">Snack & bánh</a></br>
        </div>
    </div>
    <!-- Products Start -->
   
    <div class="row px-xl-5 cus-res-9">
        <div class="col-lg-9">
            <div class="container-fluid pt-5 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Thức ăn</span></h2>
                    </div>

                </div>
                <!-- item1 -->
                <div class="row px-xl-5">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <a href="{{ route('CTSanPham', ['product_id' => $product->product_id]) }}">
                                        <img class="img-fluid product-img" src="{{ asset('img/' . $product->hinh_anh) }}" alt="{{ $product->ten_san_pham }}">
                                    </a>
                                </div>

                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="Detail_product.html">{{ $product->ten_san_pham }}</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h6 class="text-muted"><del>{{ $product->gia }}</del></h6>
                                            <h5 class="ml-2" style="color:#F27927">{{ $product->gia }}</h5>
                                        </div>
                                        <div class="mb-1 mt-2">
                                            <button class="btn btn-buy">Mua Ngay</button>
                                            <form action="{{ route('cart.create', ['product_id' => $product->product_id]) }}" method="POST" style="display: inline;">

                                                @csrf
                                                <input type="hidden" name="quantity" value="1"> <!-- Đặt số lượng mặc định là 1 -->
                                                <button type="submit" class="btn btn-cart">Thêm vào giỏ hàng</button>
                                            </form>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                
                
            </div>
            <div class="paging">
                <ul>
                  <li>Trang</li>
                  <li><a href="DetailProductByItem1.html" class="active">1</a></li>
                  <li><a href="DetailProductByItem2.html">2</a></li>
                  <li><a href="#">></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3" style="color:#000">
            <div style="display: flex; margin-left: 15px; box-sizing: border-box">
                <div style="width: 150px;">
                    <p  style="font-size: 20px;">BỘ LỌC</p>
                </div>
                <div style="width: 150px; float: right;">
                    <img src="{{asset('img/icon-filter.png')}}" style="float: right;" height="30px" width="30px" alt="">
                </div>
            </div>
            <!--Sắp xếp-->
            <div style="display: flex; margin-left: 15px; margin-bottom: 10px; box-sizing: border-box;">
                <strong>Sắp xếp</strong>
            </div>
            <input type="checkbox" id="hangmoive" style="margin-left:15px" name="hangmoive" value="hangmoive">
            <label for="hangmoive"> Hàng mới về</label><br>
            <input type="checkbox" id="giamgia" style="margin-left:15px" name="giamgia" value="giamgia">
            <label for="giamgia"> Giảm giá</label><br>
            <input type="checkbox" id="giatangdan" style="margin-left:15px" name="giatangdan" value="giatangdan">
            <label for="giatangdan"> Giá tăng dần</label><br>
            <input type="checkbox" id="giagiamdan" style="margin-left:15px" name="giagiamdan" value="giagiamdan">
            <label for="giagiamdan"> Giá giảm dần</label><br>
            <input type="checkbox" id="az" style="margin-left:15px" name="az" value="az">
            <label for="az"> A - Z</label><br>
            <input type="checkbox" id="za" style="margin-left:15px" name="za" value="za">
            <label for="za"> Z - A</label><br>
            <!--Danh mục-->
            <div style="display: flex; margin-left: 15px;margin-top:25px;margin-bottom: 15px; box-sizing: border-box;">
                <strong>Danh mục sản phẩm</strong>
            </div>
            <input type="checkbox" id="thucan" style="margin-left:15px" name="thucan" value="thucan">
            <label for="thucan"> Thức ăn</label><br>
            <input type="checkbox" id="catvesinh" style="margin-left:15px" name="catvesinh" value="catvesinh">
            <label for="catvesinh"> Cát vệ sinh</label><br>
            <input type="checkbox" id="sanphamvesinh" style="margin-left:15px" name="sanphamvesinh" value="sanphamvesinh">
            <label for="sanphamvesinh"> Sản phẩm vệ sinh, chăm sóc</label><br>
            <input type="checkbox" id="chamsocyte" style="margin-left:15px" name="chamsocyte" value="chamsocyte">
            <label for="chamsocyte"> Chăm sóc y tế</label><br>
            <input type="checkbox" id="vatdunganuong" style="margin-left:15px" name="vatdunganuong" value="vatdunganuong">
            <label for="vatdunganuong"> Vật dụng ăn uống</label><br>
            <input type="checkbox" id="dungcuvesinh" style="margin-left:15px" name="dungcuvesinh" value="dungcuvesinh">
            <label for="dungcuvesinh"> Dụng cụ vệ sinh</label><br>
            <input type="checkbox" id="chuong" style="margin-left:15px" name="chuong" value="chuong">
            <label for="chuong"> Chuồng, giường, nhà</label><br>
            <input type="checkbox" id="vongco" style="margin-left:15px" name="vongco" value="vongco">
            <label for="vongco"> Vòng cổ, dây dắt, rọ mõm</label><br>
            <input type="checkbox" id="quanao" style="margin-left:15px" name="quanao" value="quanao">
            <label for="quanao"> Quần áo, đồ chơi</label><br>
            <input type="checkbox" id="dochoi" style="margin-left:15px" name="dochoi" value="dochoi">
            <label for="dochoi"> Đồ chơi</label><br>
            <!--Khoảng giá-->
            <div style="display: flex; margin-left: 15px;margin-top:25px;margin-bottom: 15px; box-sizing: border-box;">
                <strong>Khoảng giá</strong>
            </div>
            <input type="checkbox" id="duoi50" style="margin-left:15px" name="duoi50" value="duoi50">
            <label for="duoi50"> Dưới 50.000</label><br>
            <input type="checkbox" id="tu50" style="margin-left:15px" name="tu50" value="tu50">
            <label for="tu50"> Từ 50.000 - 100.000</label><br>
            <input type="checkbox" id="tu100" style="margin-left:15px" name="tu100" value="tu100">
            <label for="tu100"> Từ 100.000 - 200.000</label><br>
            <input type="checkbox" id="tu200" style="margin-left:15px" name="tu200" value="tu200">
            <label for="tu200"> Từ 200.000 - 300.000</label><br>
            <input type="checkbox" id="tu300" style="margin-left:15px" name="tu300" value="tu300">
            <label for="tu300"> Từ 300.000 - 500.000</label><br>
            <input type="checkbox" id="tu500" style="margin-left:15px" name="tu500" value="tu500">
            <label for="tu500"> Từ 500.000 - 700.000</label><br>
            <input type="checkbox" id="tu700" style="margin-left:15px" name="tu700" value="tu700">
            <label for="tu700"> Từ 700.000 - 1.000.000</label><br>
            <input type="checkbox" id="tren100" style="margin-left:15px" name="tren100" value="tren100">
            <label for="tren100"> Trên 1 triệu</label><br>
            <!--Thương hiệu-->
            <div style="display: flex; margin-left: 15px;margin-top:25px;margin-bottom: 15px; box-sizing: border-box;">
                <strong>Thương hiệu</strong>
            </div>
            <input type="checkbox" id="Rubber" style="margin-left:15px" name="Rubber" value="Rubber">
            <label for="Rubber"> Rubber T</label><br>
            <input type="checkbox" id="5plus" style="margin-left:15px" name="5plus" value="5plus">
            <label for="5plus"> 5plus</label><br>
            <input type="checkbox" id="abc" style="margin-left:15px" name="abc" value="abc">
            <label for="abc"> ABC</label><br>
            <input type="checkbox" id="Bayer" style="margin-left:15px" name="Bayer" value="Bayer">
            <label for="Bayer"> Bayer</label><br>
            <input type="checkbox" id="ACropet" style="margin-left:15px" name="ACropet" value="ACropet">
            <label for="ACropet"> ACropet (Hàn Quốc)</label><br>
            <input type="checkbox" id="Catsan" style="margin-left:15px" name="Catsan" value="Catsan">
            <label for="vehicle3"> Catsan</label><br>
            <input type="checkbox" id="CTC" style="margin-left:15px" name="CTC" value="CTC">
            <label for="CTC"> CTC Bio (Hàn Quốc)</label><br>
            <input type="checkbox" id="Davis" style="margin-left:15px" name="Davis" value="Davis">
            <label for="Davis"> Davis</label><br>
        </div>
    </div>
   
    <!-- Products End -->
    
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