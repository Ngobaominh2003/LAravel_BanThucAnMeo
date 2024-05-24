<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thống kê đơn hàng</title>
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
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block text-lg-right">
                
            </div>
            <div class="col-lg-4 text-center text-lg-right">
            </div>
            <div class="col-lg-2 text-center text-lg-right">
                <div class="d-flex" style="margin-top: 10px;">
                    <img src="../img/icon_avtar_comments.png" width="25px" height="25px"/>
                    <h6 style="color: #fff;padding-left: 10px; padding-top: 2px;">Ngô Quang Minh</h6>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-2">
                <a href="Admin.html" class="text-decoration-none">
                    <img src="../img/logo.jpg"  style="width: 158px; height: 79.81px;"/>
                </a>
            </div>
            <div class="col-lg-8 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control ip-search-text" placeholder="Tìm kiếm chức năng...">
                        <div class="input-group-append span-search-ic">
                            <span class="input-group-text bg-transparent text-white">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="../img/logo.jpg"  style="width: 158px; height: 79.81px;"/>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="ManagerOrder.html" class="nav-item nav-link">QUẢN LÝ ĐƠN HÀNG</a>
                            <a href="#" class="nav-item nav-link">QUẢN LÝ DANH MỤC</a>
                            <a href="ManagerProducts.html" class="nav-item nav-link">QUẢN LÝ SẢN PHẨM</a>
                            <a href="ManagerPosts.html" class="nav-item nav-link">QUẢN LÝ BÀI VIẾT</a>
                            <a href="ManagerDece.html" class="nav-item nav-link">PHÂN QUYỀN</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">THỐNG KÊ<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="StaticSales.html" class="dropdown-item">Thống kê bán hàng</a>
                                    <a href="StaticOrder.html" class="dropdown-item">Thống kê đơn hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
     <!-- Breadcrumb Start -->
     <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light" style="margin-bottom: 15px;">
                    <a class="breadcrumb-item text-dark" href="Admin.html">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="StaticOrder.html">Thống kê đơn hàng</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Chỉ số quan trọng</span></h2>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-2" style="border:1px solid #D9D9D9;border-radius: 23px;margin-left: 45px;">
                <p style="font-weight: 700;margin-top: 10px;" class="text-center">Tổng đơn hàng</p>
                <p class="text-center title-reisgn" style="font-size: 30px;">100</p>
                <small style="margin-left: 18px;">Cập nhật: 03-04-2023 00:00</small>
            </div>  
            <div class="col-lg-1"></div>     
            <div class="col-lg-2" style="border:1px solid #D9D9D9;border-radius: 23px">
                <p style="font-weight: 700;margin-top: 10px;" class="text-center">Chờ xác nhận</p>
                <p class="text-center title-reisgn" style="font-size: 30px;">12</p>
                <small style="margin-left: 18px;">Cập nhật: 03-04-2023 00:00</small>
            </div>  
            <div class="col-lg-1"></div>  
            <div class="col-lg-2" style="border:1px solid #D9D9D9;border-radius: 23px">
                <p style="font-weight: 700;margin-top: 10px;" class="text-center">Đã hủy</p>
                <p class="text-center title-reisgn" style="font-size: 30px;">10</p>
                <small style="margin-left: 18px;">Cập nhật: 03-04-2023 00:00</small>
            </div>  
            <div class="col-lg-1"></div>  
            <div class="col-lg-2" style="border:1px solid #D9D9D9;border-radius: 23px">
                <p style="font-weight: 700;margin-top: 10px;" class="text-center">Đã hoàn thành</p>
                <p class="text-center title-reisgn" style="font-size: 30px;">90</p>
                <small style="margin-left: 18px;">Cập nhật: 03-04-2023 00:00</small>
            </div>       
        </div>
        <div class="row">
            <div class="col-lg-6" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4" style="margin-top: 20px;"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Biểu đồ</span></h2>
                <label style="margin-top: 8px;margin-right: 1rem;margin-left: 3rem;">Ngày tháng</label>
                <label><img src="../img/img_Date.png" width="250" height="40"></label>
            </div>
        </div>
        <div class="row px-xl-5">
                <img src="../img/TK.png" width="1290" height="460"/>
        </div>
        <div class="row px-xl-5" style="margin-top: 15px;">
            <div class="col-lg-6">
                <h2 class="section-title text-uppercase mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">THỨ HẠNG SẢN PHẨM THEO DOANH SỐ</span></h2>
                <table class="mb-0">
                    <thead>
                        <tr  style="font-weight: 700;color: #000">
                            <th class="text-center">Thứ hạng</th>
                            <th>Tên danh mục sản phẩm</th>
                            <th style="text-align: right;">Tổng doanh thu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td><p>Snack bánh thưởng cho mèo CIAO Crab &</br>Scallop vị cua và sò biển 35</p></td>
                            <td style="text-align: right;">2.000.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td><p>Bánh thưởng cho mèo vị thập cẩm</br>JERHIGH Jinny Gourmet</p></td>
                            <td style="text-align: right;">1.000.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td><p>Pate cho mèo vị thịt trộn CATIDEA Variety Of</br>Meat 60</p></td>
                            <td style="text-align: right;">500.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td><p>Pate cho mèo vị cá mòi CAT SEA FISH Tuna</br>With Sardine</p></td>
                            <td style="text-align: right;">400.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td><p>Thức ăn cho mèo mọi lứa tuổi CATIDEA</br>Basic Meat Freeze Dried</p></td>
                            <td style="text-align: right;">300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-uppercase mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">THỨ HẠNG DANH MỤC SẢN PHẨM THEO DOANH SỐ</span></h2>
                <table class="mb-0" style="margin-top: 60px;">
                    <thead>
                        <tr  style="font-weight: 700;color: #000">
                            <th class="text-center">Thứ hạng</th>
                            <th>Tên danh mục sản phẩm</th>
                            <th style="text-align: right;">Tổng doanh thu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td><p>Thức ăn</p></td>
                            <td style="text-align: right;">2.000.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td><p>Cát vệ sinh</p></td>
                            <td style="text-align: right;">1.000.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td><p>Sản phẩm vệ sinh chăm sóc</p></td>
                            <td style="text-align: right;">500.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td><p>Chăm sóc y tế</p></td>
                            <td style="text-align: right;">400.000</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td><p>Vật dụng ăn uống</p></td>
                            <td style="text-align: right;">300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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