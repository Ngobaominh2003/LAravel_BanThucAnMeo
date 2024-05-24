<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Catto Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description"> -->

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

    <!-- Slide Show Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative carousel-responsive active">
                            <img class="position-absolute w-100 h-100" src="img/slide_1.png" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item position-relative carousel-responsive">
                            <img class="position-absolute w-100 h-100" src="img/slide_2.png" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item position-relative carousel-responsive">
                            <img class="position-absolute w-100 h-100" src="img/slide_3.png" style="object-fit: cover;">
                        </div>
                    </div>

                    <ol class="carousel-indicators carouselIndicators-responsive">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    
                </div>
                
            </div>
        </div>
    </div>
       
    <!-- Slide Show  End -->

    <!-- Featured Start -->
    <div class="container-fluid">
        <div class="row px-xl-5 pb-3 ch-responsive">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="align-items-center bg-light mb-4 text" style="text-align: center;">
                    <h1 class="text-primary m-0 mr-3"><img  src="img/icon_tt.png" width="40px" height="40px"/></h1>
                    <h5 class="font-weight-semi-bold m-0 mt-2">Thanh toán khi nhận hàng</h5>
                </div>  
            </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="align-items-center bg-light mb-4 text" style="text-align: center;">
                <h1 class="text-primary m-0 mr-3"><img  src="img/icon_vc.png" width="40px" height="40px"/></h1>
                <h5 class="font-weight-semi-bold m-0 mt-2">Vận chuyển nhanh chóng</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="align-items-center bg-light mb-4 text" style="text-align: center;">
                <h1 class="text-primary m-0 mr-3"><img  src="img/icon_dt.png" width="40px" height="40px"/></h1>
                <h5 class="font-weight-semi-bold m-0 mt-2">Đổi trả hàng trong 7 ngày</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 text">
            <div class="align-items-center bg-light mb-4" style="text-align: center;">
                <h1 class="text-primary m-0 mr-3"><img  src="img/icon_khtt.png" width="40px" height="40px"/></h1>
                <h5 class="font-weight-semi-bold m-0 mt-2">Ưu đãi cho KH thân thiết</h5>
            </div>
        </div>
    </div>
    <!-- Featured End -->
<!-- DM Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row">
        <div class="col-lg-6 header-dm-res" style="position:initial;">
            <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 header-dm-res-sp1" style="border-bottom: 2px solid #F27927;color: #F27927;">Danh mục sản phẩm</span></h2>
        </div>
        <div class="col-lg-6 header-dm-res">
            <span class="header-dm-res-sp2">Xem tất cả >></span>
        </div>
    </div>
    <div class="row px-xl-5 dm-res">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid"  src="img/dm_sp.png" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="Item.html">Thức ăn</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/dm_sp2.png" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Cát</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/dm_sp3.png" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Vệ sinh, chăm sóc</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/dm_sp4.png" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Chăm sóc y tế</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Products End -->
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6 header-dm-res" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 header-dm-res-sp1" style="border-bottom: 2px solid #F27927;color: #F27927;">Khuyến mại hot</span></h2>
            </div>
            <div class="col-lg-6 header-dm-res">
                <span class="header-dm-res-sp2">Xem tất cả >></span>
            </div>
        </div>
        <div class="row px-xl-5 tc-pd-res">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/KM_1.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Royal Canin - Mini Adult 800gr</a>
                            <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Royal Canin -</br> Mini Adult 800gr</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h6 class="text-muted"><del>161.000</del></h6><h5 class="ml-2" style="color:#F27927">153.000</h5>
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
                        <img class="img-fluid" src="img/KM_2.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Sanicat - Cát vệ sinh oải hương...</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Sanicat - Cát</br>vệ sinh oải hương...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h6 class="text-muted"><del>200.000</del></h6><h5 class="ml-2" style="color:#F27927">170.000</h5>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/KM_3.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Me-O - Cát vệ sinh cat litter 5L</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Me-O - Cát vệ</br>sinh cat litter 5L</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h6 class="text-muted"><del>130.000</del></h6><h5 class="ml-2" style="color:#F27927">99.000</h5>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/KM_4.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Royal Canin - Hair & Skin 200gr</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h6 class="text-muted"><del>120.000</del></h6><h5 class="ml-2" style="color:#F27927">90.000</h5>
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
    <!--Image shop start-->
    <div class="container-fluid pt-5 pt-5r pb-3">
        <div class="row px-xl-5">
            <div class="col-md-12">
                <div class="product-offer">
                    <img class="img-fluid product-offers img" src="img/img_102.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Image shop end-->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6 header-dm-res" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 header-dm-res-sp1" style="border-bottom: 2px solid #F27927;color: #F27927;">Bán chạy</span></h2>
            </div>
            <div class="col-lg-6 header-dm-res">
                <span class="header-dm-res-sp2">Xem tất cả >></span>
            </div>
        </div>
        <div class="row px-xl-5 tc-pd-res">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/BC_1.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Cát vệ sinh cho mèo siêu vón...</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Cát vệ sinh cho</br>mèo siêu vón...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h5 class="ml-2" style="color:#F27927">160.000</h5>
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
                        <img class="img-fluid" src="img/BC_2.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Cát vệ sinh cho mèo bột gỗ...</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Cát vệ sinh cho</br>mèo bột gỗ...</a>

                        <div class="d-flex align-items-center justify-content-center mt-2 text-res">
                            <h6 class="text-muted"><del>250.000</del></h6><h5 class="ml-2" style="color:#F27927">200.000</h5>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/BC_3.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate link-pd-res" href="">Pate cho mèo vị nước sốt cá...</a>
                        <a class="h6 text-decoration-none text-truncate link-pd-res-re" href="">Pate cho mèo vị</br>nước sốt cá...</a>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1 dm-img-sp3">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/BC_4.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Pate cho mèo vị trai biển Cat...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
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
    <!-- Offer End -->

    <!-- News Start -->
    <div class="container-fluid mb-3">
        <div class="row pb-3">
            <div class="col-lg-6 header-dm-res" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3 header-dm-res-sp1" style="border-bottom: 2px solid #F27927;color: #F27927;">Tin Tức</span></h2>
            </div>
            <div class="col-lg-6 header-dm-res">
                <span class="header-dm-res-sp2">Xem tất cả >></span>
            </div>
        </div>
        <div class="row px-xl-5 new-res pt-2">
            <div class="col-lg-6">
                <div class="product-offer mb-5-px" style="height: 105px;">
                    <img class="img-fluid" src="img/tt_res_1.png" alt="">
                </div>
                <div style="color:#000;font-size: 12px">
                    <strong>Chuyên mục: Khoe Boss</br>nhận quà</strong>
                </div>
                <div class="product-offer mb-5-px" style="height: 105px;">
                    <img class="img-fluid" src="img/tt_res_3.png" alt="">
                </div>
                <div style="color:#000;font-size: 12px">
                    <strong>Be mine Valentine</strong>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-offer mb-5-px" style="height: 105px;">
                    <img class="img-fluid" src="img/tt_res_2.png" alt="">
                </div>
                <div style="color:#000;font-size: 12px">
                    <strong>Tổng đài tư vấn chăm sóc thú</br>cưng</strong>
                </div>
                <div class="product-offer mb-5-px" style="height: 105px;">
                    <img class="img-fluid" src="img/tt_res_4.png" alt="">
                </div>
                <div style="color:#000;font-size: 12px">
                    <strong>Ưu đãi gấp đôi!!!</strong>
                </div>
            </div>
        </div>

        <div class="row px-xl-5 new-re">
            <div class="col-lg-6">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <div class="carousel-news">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/tt_1.png" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div style="color: #000;">
                    <strong>Dinh dưỡng cho thú cưng</strong></br>
                    <label style="margin-bottom: 0px;">Như chúng ta đã biết, Protein là một dưỡng chất thiết yếu có thể được</label></br>
                    <label>cung cấp từ...<strong>Xem thêm</strong></label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-offer mb-5-px" style="height: 200px;">
                    <img class="img-fluid" src="img/tt_2.png" alt="">
                </div>
                <div style="color:#000">
                    <strong>Dinh dưỡng cho thú cưng</strong>
                </div>
                <div class="product-offer mb-5-px" style="height: 200px;">
                    <img class="img-fluid" src="img/tt_3.png" alt="">
                </div>
                <div style="color:#000">
                    <strong>Dinh dưỡng cho thú cưng</strong>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-offer mb-5-px" style="height: 200px;">
                    <img class="img-fluid" src="img/tt_4.png" alt="">
                </div>
                <div style="color:#000">
                    <strong>Dinh dưỡng cho thú cưng</strong>
                </div>
                <div class="product-offer mb-5-px" style="height: 200px;">
                    <img class="img-fluid" src="img/tt_5.png" alt="">
                </div>
                <div style="color:#000">
                    <strong>Dinh dưỡng cho thú cưng</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" mb-4 text-uppercase"  style="font-size: 16px;">Liên hệ</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            <div class="col-lg-5 col-md-12 mb-5 pr-3 pr-xl-5 footer-res">
                <h5 class=" mb-4 text-uppercase" style="font-size: 16px;">Về Catto</h5>
                <p class="mb-2" style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2" style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2" style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
            
            <div class="col-lg-3 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" mb-4 text-uppercase" style="font-size: 16px;">Chính sách</h5>
                <p class="mb-2"  style="font-size: 12px;">Số điện thoại: 180027266</p>
                <p class="mb-2"  style="font-size: 12px;">Địa chỉ: · Số 9, Minh Khai, Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"  style="font-size: 12px;">Email: catto.support@gmail.com</p>
            </div>
        </div>
        <div class="row px-xl-5 pt-5" style="color: #000;">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            </div>
            <div class="col-lg-5 col-md-12 mb-5 pr-3 pr-xl-5 personal-re" style="border-top: 4px solid #D9D9D9;font-size: 14px;">
                <h5 class=" mb-4 text-uppercase"></h5>
                <p class="mb-2 text-center">Catto - cửa hàng bán sản phẩm dành cho mèo uy tín, chất lượng</p>
                <p class="mb-2 text-center">Được vận hành bởi NQD</p>
            </div>
            <div class="col-lg-5 col-md-12 mb-5 pr-3 pr-xl-5 personal-res" style="font-size: 14px;">
                <h5 class=" mb-4 text-uppercase"></h5>
                <p class="mb-2 text-center">Catto - cửa hàng bán sản phẩm dành cho mèo uy tín, chất lượng</p>
                <p class="mb-2 text-center">Được vận hành bởi NQD</p>
            </div>
            <div class="col-lg-3 col-md-12 mb-5 pr-3 pr-xl-5">
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