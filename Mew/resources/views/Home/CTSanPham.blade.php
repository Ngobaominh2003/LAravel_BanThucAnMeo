<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chi tiết sản phẩm</title>
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
        <div class="row px-xl-5 cus-title-res-12">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('Home') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="Products.html">Sản phẩm</a>
                    <a class="breadcrumb-item text-dark" href="Detail_product.html">Thức ăn</a>
                    <span class="breadcrumb-item active">Thức ăn cho mèo trưởng thành ROYAL CANIN Indoor 27</span>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5 cus-title-res">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('Home') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="Products.html">Sản phẩm</a>
                    <a class="breadcrumb-item text-dark" href="Detail_product.html">Thức ăn</a>
                    <span class="breadcrumb-item active">Thức ăn cho mèo trưởng...</span>
                </nav>
            </div>
        </div>
    </div>
   
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
   
        <div class="row px-xl-5 cus-w-100">
        <div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Phần hiển thị hình ảnh sản phẩm -->
        <div class="row px-xl-5 cus-w-100">
            <div class="col-lg-6 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/' . $product->hinh_anh) }}" alt="Product Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/' . $product->hinh_anh) }}" alt="Image" class="w-100">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('img/' . $product->hinh_anh) }}" alt="Image" class="w-100" style="opacity: 0.3;">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('img/' . $product->hinh_anh) }}" alt="Image" class="w-100" style="opacity: 0.3;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Phần thông tin chi tiết sản phẩm -->
        <div class="col-lg-5">
            <div class="h-100 bg-light p-30">
                <h3 style="color:#F27927">{{ $product->ten_san_pham }}</h3>
                <strong style="margin-top: 14px;">Mã SP: {{ $product->product_id }}</strong>
                <!-- Đánh giá sao và số lượng đã bán -->
                <div class="d-flex mb-3" style="margin-bottom: 27px;">
                    <div class="text-primary mr-">
                        <small class="ml-2 fa fa-star" style="color: #F27927;"></small>
                        <!-- Đánh giá sao -->
                        <small class="fa fa-star" style="color: #F27927;"></small>
                        <!-- Số lượng đã bán -->
                        <small class="pt-1">{{ $product->so_luong }} đã bán</small>
                    </div>
                </div>
                <!-- Giá sản phẩm -->
                <div class="d-flex mt-2" style="margin-bottom: 15px;">
                    <h5 class="ml-2" style="color:#F27927">Gia Ban: {{ $product->gia }}</h5>
                    <!-- Giá giảm (nếu có) -->
                    @if($product->gia_giam)
                    <h6 class="ml-4 text-muted" style="margin-top: 3px;"><del>{{ $product->gia_goc }}</del></h6>
                    @endif
                </div>
                <!-- Phân loại sản phẩm -->
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-lg-2">
                        <p>Phân loại:</p>
                    </div>
                    <!-- Các tùy chọn phân loại sản phẩm -->
                    <div class="col-lg-4 d-flex">
                        <!-- Ví dụ: tùy chọn kích thước -->
                        <label>{{ $product->khoi_luong }}</label>
                        <!-- Các tùy chọn khác (nếu có) -->
                    </div>
                </div>
                <!-- Số lượng sản phẩm -->
                <div class="row">
                    <div class="col-lg-2">
                        <p style="margin-top: 7px;">Số lượng:</p>
                    </div>
                    <!-- Input để chọn số lượng sản phẩm -->
                    <div class="col-lg-3 d-flex">
                        <div class="input-group quantity" style="width: 100px;">
                            <!-- Button trừ -->
                            <div class="input-group-btn">
                                <button class="btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- Số lượng sản phẩm -->
                            <input type="text" class="form-control border-0 text-center" value="1">
                            <!-- Button cộng -->
                            <div class="input-group-btn">
                                <button class="btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button Mua ngay và Thêm vào giỏ hàng -->
                <div class="d-flex pt-2" style="margin-bottom: 32px;">
                    <div class="mb-1 mt-2">
                        <button class="btn btn-buy">Mua Ngay</button>
                        <button class="btn btn-cart">Giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chi tiết sản phẩm -->
    <div class="row">
        <div class="col">
            <div class="bg-light p-30">
                <h4 class="mb-3">CHI TIẾT SẢN PHẨM</h4>
                <!-- Mô tả chi tiết sản phẩm -->
                <p>{{ $product->mo_ta }}</p>
            </div>
        </div>
    </div>
</div>

            <div class="row">
                <div class="col">
                    <div class="bg-light p-30">
                        <div class="tab-content">
                                <div class="col-md-12">
                                    <h4 class="mb-3">ĐÁNH GIÁ SẢN PHẨM</h4>
                                    <div class="media mb-4">
                                        <img src="{{ asset('img/icon_avtar')}}_comments.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <h6 style="margin-top: 3px;">Ngô Quang Minh</h6>
                                                <div class="text-primary ml-2 mb-2" >
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <small> 01-05-2022 | Phân loại: 1kg</small>
                                            
                                            <p>Thành Phần và Công Năng Tác Dụng:</p>
                                            <p>- Taurine: Axit amin thiết yếu cho hoạt động của mắt và cải thiện thị lực của mèo</p>
                                        </div>
                                    </div>
                                    <div class="media mb-4">
                                        <img src="{{ asset('img/icon_avtar')}}_comments.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <h6 style="margin-top: 3px;">Ngọc Huy</h6>
                                                <div class="text-primary ml-2 mb-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <small> 03-06-2022 | Phân loại: 2kg</small>
                                            <p>Sản phẩm chất lượng tốt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5 cus-w-5">
            <h3 style="color:#F27927;padding-left: 15px;">Thức ăn cho mèo trưởng thành ROYAL CANIN Indoor 27</h3>
            <strong style="margin-top: 14px;padding-left: 15px">Mã SP: PETPF45</strong>
            <div style="text-align: center;">
            <img width="341px" height="360px" src="{{ asset('img/food_1.png')}}" alt="Image">
            </div>
            <div class="row cus-pro-in">
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                    <img width="74px" height="76px"  src="{{ asset('img/food_1.png')}}" alt="Image">
                </div>
                <div class="col-lg-3">
                    <img width="74px" height="76px" aria-disabled="true" style="opacity: 0.3;" src="{{ asset('img/food_1.png')}}" alt="Image">
                </div>
                <div class="col-lg-3">
                    <img width="74px" height="76px" aria-disabled="true" style="opacity: 0.3;" src="{{ asset('img/food_1_3.p')}}ng" alt="Image">
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="d-flex" style="padding-top:20px;padding-left: 15px;">
                <h5 class="text-size" style="color:#F27927">120.000</h5>
                <h6 class="ml-4 text-black-0" style="margin-top: 5px;"><del>150.000</del></h6>
            </div>
            <div class="d-flex mb-3" style="margin-bottom: 27px;font-size: 20px;">
                <div class="text-primary mr-2" style="color:#F27927">
                    <small class="fa fa-star" style="color: #F27927;padding-left: 15px;"></small>
                    <small class="fa fa-star" style="color: #F27927;"></small>
                    <small class="fa fa-star" style="color: #F27927;"></small>
                    <small class="fa fa-star" style="color: #F27927;"></small>
                    <small class="fa fa-star" style="color: #F27927;"></small>
                </div>
                <small class="pt-1" style="padding-top:0.75rem !important;">100+ đã bán</small>
            </div>
            <div class="row d-flex type-res">
                <div class="col-lg-2">
                    <p>Phân loại:</p>
                </div>
                <div class="col-lg-4 d-flex">
                        <label style="border: 2px solid #F27927;width: 52px;height: 28px;text-align: center;">400gr</label>
                        <label style=" border: 2px solid #F5F5F5;color: #F5F5F5;width: 52px;height: 28px;margin-left: 5px;text-align: center;">1kg</label>
                        <label style="border: 2px solid #F5F5F5; width: 52px;height: 28px;margin-left: 5px;text-align: center;">2kg</label>
                </div>
            </div>
            <div class="row d-flex number-res">
                <div class="col-lg-2">
                    <p style="margin-top: 7px;">Số lượng:</p>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="input-group quantity" style="width: 100px; border: 2px solid #F5F5F5;">
                        <div class="input-group-btn">
                            <button class="btn-minus" style="border: none;background-color: #fff; margin-top: 7px;">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control border-0 text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn-plus" style="border: none;background-color: #fff;margin-top: 7px;">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex pt-2 button-res">
                <div class="mb-1 mt-2" style="width: 100%;">
                    <button class="btn btn-buy">Mua Ngay</button>
                    <button class="btn btn-cart">Giỏ hàng</button>
                </div>
            </div>
            <label class="label-se-bg" style="color: #F27927;margin-left: 145px;font-size: 20px;font-weight: 700;">
                <i class="fa fa-phone icon-se-bg" style="color: #F27927;">
                </i>
                1800.270.27
            </label>
            <div class="row nav-res-onner">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="align-items-center bg-light mb-4" style="text-align: center;">
                            <h1 class="text-primary m-0 mr-3"><img  src="{{ asset('img/icon_tt.pn')}}g" width="40px" height="40px"/></h1>
                            <h5 style="font-size: 12px;" class="font-weight-semi-bold m-0 mt-2">Thanh toán khi nhận hàng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="align-items-center bg-light mb-4" style="text-align: center;">
                        <h1 class="text-primary m-0 mr-3"><img  src="{{ asset('img/icon_vc.pn')}}g" width="40px" height="40px"/></h1>
                        <h5 style="font-size: 12px;" class="font-weight-semi-bold m-0 mt-2">Vận chuyển nhanh chóng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="align-items-center bg-light mb-4" style="text-align: center;">
                        <h1 class="text-primary m-0 mr-3"><img  src="{{ asset('img/icon_dt.pn')}}g" width="40px" height="40px"/></h1>
                        <h5 style="font-size: 12px;" class="font-weight-semi-bold m-0 mt-2">Đổi trả hàng trong 7 ngày</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="align-items-center bg-light mb-4" style="text-align: center;">
                        <h1 class="text-primary m-0 mr-3"><img  src="{{ asset('img/icon_khtt.')}}png" width="40px" height="40px"/></h1>
                        <h5 style="font-size: 12px;" class="font-weight-semi-bold m-0 mt-2">Ưu đãi cho KH thân thiết</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="bg-light" style="padding-top: 30px;padding-left: 15px;padding-right: 15px; color: #000;">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <strong class="mb-3" style="font-size: 14px;">CHI TIẾT SẢN PHẨM</strong>
                                <p style="font-size: 12px;margin-bottom: 0px;">Thức ăn cho mèo trưởng thành ROYAL CANIN Indoor 27 dành cho tất cả giống mèo sống trong nhà trên 12 tháng (Royal Canin Adult 1 tuổi).</p>
                                <strong style="font-size: 12px;">Lợi ích</strong>
                                <p style="font-size: 12px;">Thức ăn cho mèo trưởng thành ROYAL CANIN Indoor 27 với thành phần được nghiên cứu hoàn toàn phù hợp với thói quen ăn uống của mèo già. Thành phần hạt giảm sự hình thành mảng bám, giúp răng chắc khỏe. Kích thước hạt phù hợp cấu tạo khoang miệng của mèo, thông qua việc ma sát với răng giúp mèo tự làm sạch răng miệng.</p>
                                <p style="font-size: 12px;">Thành phần của sản phẩm có albumin và probiotic có trong thức ăn giúp nhuận tràng, tốt cho hệ tiêu hóa. Men tiêu hóa L.I.P hỗ trợ mèo hấp thu chất dinh dưỡng, cân bằng hệ vi sinh đường ruột, giảm bớt lượng phân và mùi nhẹ hơn. Probiotic giúp gia tăng số lượng lợi khuẩn, bảo vệ đường ruột khỏi vi khuẩn có hại.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="bg-light">
                        <div class="tab-content">
                                <div class="col-md-12">
                                    <strong style="font-size: 14px;">ĐÁNH GIÁ SẢN PHẨM</strong>
                                    <div class="media mb-4">
                                        <img src="{{ asset('img/avatar_NH.')}}png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 30px; height: 28px;">
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <h6 style="margin-top: 3px;font-size: 12px;">Ngô Quang Minh</h6>
                                                <div class="text-primary ml-2 mb-2" style="font-size: 12px;" >
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p style="font-size: 8px;color: #CACACA;margin-top: -6px;margin-bottom: 2px;"> 01-05-2022 | Phân loại: 1kg</p>
                                            <p style="font-size: 12px;margin-bottom: 0px;">Tác Dụng: Taurine: Axit amin thiết yếu cho hoạt động của mắt </p>
                                            <p style="font-size: 12px;margin-bottom: 0px;">và cải thiện thị lực của mèo</p>
                                        </div>
                                    </div>
                                    <div class="media mb-4">
                                        <img src="{{ asset('img/avatar_QH.')}}png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 30px; height: 28px;">
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <h6 style="margin-top: 3px;font-size: 12px;">Ngọc Huy</h6>
                                                <div class="text-primary ml-2 mb-2" style="font-size: 12px;">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <p style="font-size: 8px;color: #CACACA;margin-top: -6px;margin-bottom: 2px;"> 03-06-2022 | Phân loại: 2kg</p>
                                            <p style="font-size: 12px;">Sản phẩm chất lượng tốt, giá cả hợp lý</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
       
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Sản phẩm tương tự</span></h2>
            </div>
        </div>
        <div class="row px-xl-5 dm-res-es">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/food_5.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị</br>thịt trộn CATIDEA...</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị</br>thịt trộn CATIDEA...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                           <h5 class="ml-2" style="color:#F27927">60.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/food_6.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị</br>cá ngừ và cá trứng IRIS</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị</br>cá ngừ và cá trứng IRIS</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                           <h5 class="ml-2" style="color:#F27927">25.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/food_7.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị</br>cá mòi CAT SEA FISH</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị</br>cá mòi CAT SEA FISH</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h5 class="ml-2" style="color:#F27927">25.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/Rectangle ')}}70.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị cá ngừ sốt</br> xoài</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị cá ngừ sốt</br> xoài</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h5 class="ml-2" style="color:#F27927">25.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6 header-dm-res">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 header-dm-res-sp1" style="border-bottom: 2px solid #F27927;color: #F27927;">Sản phẩm đã xem</span></h2>
            </div>
        </div>
        <div class="row px-xl-5 dm-res-es">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/food_9.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị</br>cá ngừ IRIS Delicacy</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị</br>cá ngừ IRIS Delicacy</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h5 class="ml-2" style="color:#F27927">35.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid"  src="{{ asset('img/food_10.pn')}}g" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo mẹ và</br>mèo con CATIDEA</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo mẹ và</br>mèo con CATIDEA</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h5 class="ml-2" style="color:#F27927">30.000</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                        <div class="mb-1 mt-2">
                            <button class="btn btn-buy">Mua Ngay</button>
                            <button class="btn btn-cart">Giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <p class="mb-2 text-center">Được vận hành bởi FITHOU</p>
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


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>