<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
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
    @include('admin/Logo')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('admin/Logoo')
    <!-- Navbar End -->
    
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row">
            <div class="col-lg-6" style="position:initial;">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Đơn hàng chờ xác nhận</span><span class="header-cart-admin">+9</span></h2>
            </div>
            <div class="col-lg-6">
                <span style="float:right;margin-right: 3rem !important;color: #F27927;"><a href="DetailAllOrder.html" style="color:#F27927">Xem tất cả >></a></span>
            </div>
        </div>
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
                                    <p class="title-reisgn"><a href="DetailsOrdersAdmin.html"style="color:#F27927">Xem chi tiết</a></p>
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
                                    <p class="title-reisgn"><a href="DetailsOrdersAdmin.html"style="color:#F27927">Xem chi tiết</a></p>
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
                                     <p class="title-reisgn"><a href="DetailsOrdersAdmin.html" style="color:#F27927">Xem chi tiết</a></p>
                                 </div>
                             </td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row px-xl-5">
            <div class="col-lg-6">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Thống kê bán hàng</span></h2>
                <div class="d-flex">
                    <label style="margin-left: 3rem !important;margin-top:8px;margin-right: 1rem !important;">Ngày tháng</label>
                    <label><img src="../img/img_Date.png" width="250" height="40"></label>
                </div>
                <div class="mx-xl-5">
                    <img src="../img/ThongKe.png" width="515" height="288"/>
                </div>
                
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-uppercase mx-xl-5 mb-4"><span class="pr-3" style="border-bottom: 2px solid #F27927;color: #F27927;">Thống kê đơn hàng</span></h2>
                <div class="d-flex">
                    <label style="margin-left: 3rem !important;margin-top:8px;margin-right: 1rem !important;">Ngày tháng</label>
                    <label><img src="../img/img_Date.png" width="250" height="40"></label>
                </div>
                <div class="mx-xl-5">
                    <img src="../img/ThongKe.png" width="515" height="288"/>
                </div>
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