<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chi tiết tất cả đơn hàng</title>
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
                    <h6 style="color: #fff">Ngô Quang Minh</h6>
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
                            <a href="Sales.html" class="nav-item nav-link active">QUẢN LÝ ĐƠN HÀNG</a>
                            <a href="news.html" class="nav-item nav-link">QUẢN LÝ DANH MỤC</a>
                            <a href="About.html" class="nav-item nav-link">QUẢN LÝ SẢN PHẨM</a>
                            <a href="contact.html" class="nav-item nav-link">QUẢN LÝ BÀI VIẾT</a>
                            <a href="contact.html" class="nav-item nav-link">PHÂN QUYỀN</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">THỐNG KÊ<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="checkout.html" class="dropdown-item">Thống kê bán hàng</a>
                                    <a href="cart.html" class="dropdown-item">Thống kê đơn hàng</a>
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
                    <a class="breadcrumb-item text-dark" href="ManagerOrder.html">Quản lý đơn hàng</a>
                    <a class="breadcrumb-item text-dark" href="#">Chờ xác nhận đơn hàng</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-7">
                <div class="col-lg-2"></div>
                <label class="mx-xl-5">Ngày tháng</label>
                <label><img src="../img/img_Date.png" width="250" height="40"></label>
            </div>
            <div class="col-lg-4" style="margin-left: 5rem !important">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control ip-search-text" placeholder="Tìm kiếm mã đơn hàng, sản phẩm...">
                        <div class="input-group-append span-search-ic">
                            <span class="input-group-text bg-transparent text-white">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="mb-0">
                    <thead>
                        <tr  style="font-weight: 700;background-color: #F27927;color: #fff">
                            <th class="border-table-left">ĐƠN HÀNG</th>
                            <th style="width: 20%;">TỔNG TIỀN</th>
                            <th>TRẠNG THÁI</th>
                            <th class="border-table-right">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr style="height: 20px;"></tr>
                        <tr style="background-color: #EAEAEA; padding-top: 10px;">

                            <td class="padding_table_left"> 
                                <div class="d-flex" style="margin-top:17px">
                                    <div>
                                        <img src="../img/avatar_H.png" width="24" height="24" />
                                    </div>
                                    <div style="margin-left: 10px;">
                                        <p class="title-reisgn">Ngô Quang Minh</p>
                                    </div>
                                </div>
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding-table-right">
                                <small>Mã đơn hàng: MD00006238</small>
                            </td>
                        </tr>
                        <tr style="border: 1px solid #D9D9D9;">
                            <td>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row" style="border-bottom: 1px solid #D9D9D9;">
                                            <div class="col-lg-10">
                                                <p >Snack bánh thưởng cho mèo CIAO Crab & Scallop vị </br>cua và sò biển 35</p>
                                            </div>
                                            <p>x2</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p>Thức ăn cho mèo con ROYAL CANIN Kitten</p>
                                               
                                            </div>
                                            <p>x1</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="margin-table-top-40">550.000</br><small>Thanh toán khi nhận hàng</small></p>
                            
                            </td>
                            <td>
                                <p style="margin-top: -50px;">Chờ xác nhận</p>
                            </td>
                            <td>
                                <div class="d-flex margin-table-top-50">
                                    <p class="title-reisgn">Xác nhận ngay</p>
                                    <small  style="margin-right: 5px;margin-left: 5px; margin-top: 4px;">hoặc</small>
                                    <p class="title-reisgn">Xem chi tiết</p>
                                </div>
                            </td>
                        </tr>
                        <!--2-->
                        <tr style="height: 20px;"></tr>
                        <tr style="background-color: #EAEAEA; padding-top: 10px;">

                            <td class="padding_table_left"> 
                                <div class="d-flex" style="margin-top:17px">
                                    <div>
                                        <img src="../img/avar_T.png" width="24" height="24" />
                                    </div>
                                    <div style="margin-left: 10px;">
                                        <p class="title-reisgn">Hoài Thu</p>
                                    </div>
                                </div>
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding-table-right">
                                <small>Mã đơn hàng: MD00006000</small>
                            </td>
                        </tr>
                        <tr style="border: 1px solid #D9D9D9;">
                            <td>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p >Snack bánh thưởng cho mèo CIAO Crab & Scallop vị </br> cua và sò biển 35</p>
                                            </div>
                                            <p>x2</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>70.000</br><small>Đã thanh toán qua Momo</small></p>
                            
                            </td>
                            <td>
                                <p style="margin-top: -20px;">Chờ xác nhận</p>
                            </td>
                            <td>
                                <div class="d-flex" style="margin-top: -19px;">
                                    <p class="title-reisgn">Xác nhận ngay</p>
                                    <small  style="margin-right: 5px;margin-left: 5px;margin-top:4px">hoặc</small>
                                    <p class="title-reisgn">Xem chi tiết</p>
                                </div>
                            </td>
                        </tr>
                         <!--3-->
                         <tr style="height: 20px;"></tr>
                         <tr style="background-color: #EAEAEA; padding-top: 10px;">
 
                             <td class="padding_table_left"> 
                                 <div class="d-flex" style="margin-top:17px">
                                     <div>
                                         <img src="../img/avatar_TH.png" width="24" height="24" />
                                     </div>
                                     <div style="margin-left: 10px;">
                                         <p class="title-reisgn">Thanh Hải</p>
                                     </div>
                                 </div>
                             </td>
                             <td class="padding_table">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             </td>
                             <td class="padding_table">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             </td>
                             <td class="padding-table-right">
                                 <small>Mã đơn hàng: MD00006000</small>
                             </td>
                         </tr>
                         <tr style="border: 1px solid #D9D9D9;">
                             <td>
                                 <div class="row">
                                     <div class="col-lg-10">
                                         <div class="row">
                                             <div class="col-lg-10">
                                                 <p >Catnip cho mèo dạng que BIOLINE Catnip Dental</br>Stick</p>
                                             </div>
                                             <p>x2</p>
                                         </div>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <p>100.000</br><small>Đã thanh toán qua thẻ ngân hàng</small></p>
                             
                             </td>
                             <td>
                                 <p style="margin-top: -20px;">Chờ xác nhận</p>
                             </td>
                             <td>
                                 <div class="d-flex" style="margin-top:-19px">
                                     <p class="title-reisgn">Xác nhận ngay</p>
                                     <small  style="margin-right: 5px;margin-left: 5px;margin-top:4px">hoặc</small>
                                     <p class="title-reisgn">Xem chi tiết</p>
                                 </div>
                             </td>
                         </tr>
                         <!--Row 2-->
                         <tr style="height: 20px;"></tr>
                        <tr style="background-color: #EAEAEA; padding-top: 10px;">

                            <td class="padding_table_left"> 
                                <div class="d-flex" style="margin-top:17px">
                                    <div>
                                        <img src="../img/avatar_H.png" width="24" height="24" />
                                    </div>
                                    <div style="margin-left: 10px;">
                                        <p class="title-reisgn">Ngô Quang Minh</p>
                                    </div>
                                </div>
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding-table-right">
                                <small>Mã đơn hàng: MD00006238</small>
                            </td>
                        </tr>
                        <tr style="border: 1px solid #D9D9D9;">
                            <td>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row" style="border-bottom: 1px solid #D9D9D9;">
                                            <div class="col-lg-10">
                                                <p >Snack bánh thưởng cho mèo CIAO Crab & Scallop vị </br>cua và sò biển 35</p>
                                            </div>
                                            <p>x2</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p>Thức ăn cho mèo con ROYAL CANIN Kitten</p>
                                               
                                            </div>
                                            <p>x1</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="margin-table-top-40">550.000</br><small>Thanh toán khi nhận hàng</small></p>
                            
                            </td>
                            <td>
                                <p style="margin-top: -50px;">Chờ xác nhận</p>
                            </td>
                            <td>
                                <div class="d-flex margin-table-top-50">
                                    <p class="title-reisgn">Xác nhận ngay</p>
                                    <small  style="margin-right: 5px;margin-left: 5px; margin-top: 4px;">hoặc</small>
                                    <p class="title-reisgn">Xem chi tiết</p>
                                </div>
                            </td>
                        </tr>
                        <!--2-->
                        <tr style="height: 20px;"></tr>
                        <tr style="background-color: #EAEAEA; padding-top: 10px;">

                            <td class="padding_table_left"> 
                                <div class="d-flex" style="margin-top:17px">
                                    <div>
                                        <img src="../img/avar_T.png" width="24" height="24" />
                                    </div>
                                    <div style="margin-left: 10px;">
                                        <p class="title-reisgn">Hoài Thu</p>
                                    </div>
                                </div>
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding_table">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td class="padding-table-right">
                                <small>Mã đơn hàng: MD00006000</small>
                            </td>
                        </tr>
                        <tr style="border: 1px solid #D9D9D9;">
                            <td>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p >Snack bánh thưởng cho mèo CIAO Crab & Scallop vị </br> cua và sò biển 35</p>
                                            </div>
                                            <p>x2</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>70.000</br><small>Đã thanh toán qua Momo</small></p>
                            
                            </td>
                            <td>
                                <p style="margin-top: -20px;">Chờ xác nhận</p>
                            </td>
                            <td>
                                <div class="d-flex" style="margin-top: -19px;">
                                    <p class="title-reisgn">Xác nhận ngay</p>
                                    <small  style="margin-right: 5px;margin-left: 5px;margin-top:4px">hoặc</small>
                                    <p class="title-reisgn">Xem chi tiết</p>
                                </div>
                            </td>
                        </tr>
                         <!--3-->
                         <tr style="height: 20px;"></tr>
                         <tr style="background-color: #EAEAEA; padding-top: 10px;">
 
                             <td class="padding_table_left"> 
                                 <div class="d-flex" style="margin-top:17px">
                                     <div>
                                         <img src="../img/avatar_TH.png" width="24" height="24" />
                                     </div>
                                     <div style="margin-left: 10px;">
                                         <p class="title-reisgn">Thanh Hải</p>
                                     </div>
                                 </div>
                             </td>
                             <td class="padding_table">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             </td>
                             <td class="padding_table">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             </td>
                             <td class="padding-table-right">
                                 <small>Mã đơn hàng: MD00006000</small>
                             </td>
                         </tr>
                         <tr style="border: 1px solid #D9D9D9;">
                             <td>
                                 <div class="row">
                                     <div class="col-lg-10">
                                         <div class="row">
                                             <div class="col-lg-10">
                                                 <p >Catnip cho mèo dạng que BIOLINE Catnip Dental</br>Stick</p>
                                             </div>
                                             <p>x2</p>
                                         </div>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <p>100.000</br><small>Đã thanh toán qua thẻ ngân hàng</small></p>
                             
                             </td>
                             <td>
                                 <p style="margin-top: -20px;">Chờ xác nhận</p>
                             </td>
                             <td>
                                 <div class="d-flex" style="margin-top:-19px">
                                     <p class="title-reisgn">Xác nhận ngay</p>
                                     <small  style="margin-right: 5px;margin-left: 5px;margin-top:4px">hoặc</small>
                                     <p class="title-reisgn">Xem chi tiết</p>
                                 </div>
                             </td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="paging" style="margin-right: 3rem;">
            <ul>
              <li>Trang</li>
              <li><a href="DetailAllOrder.html" class="active">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">></a></li>
            </ul>
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