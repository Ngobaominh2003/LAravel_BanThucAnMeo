<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sửa phân quyền</title>
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
                        <img src="img/logo.jpg"  style="width: 158px; height: 79.81px;"/>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                          <a href="contact.html" class="nav-item nav-link">QUẢN LÝ ĐƠN HÀNG</a>
                            <a href="news.html" class="nav-item nav-link">QUẢN LÝ DANH MỤC SẢN PHẨM</a>
                            <a href="About.html" class="nav-item nav-link">QUẢN LÝ SẢN PHẨM</a>
                            <a href="contact.html" class="nav-item nav-link">QUẢN LÝ BÀI VIẾT</a>
                            <a href="Sales.html" class="nav-item nav-link active">PHÂN QUYỀN</a>
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
                    <a class="breadcrumb-item text-dark" href="ManagerDece.html">Phân quyền</a>
                    <a class="breadcrumb-item text-dark" href="#">Chỉnh sửa phân quyền</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="px-xl-5" style="padding-bottom: 2rem;">
            <p><strong>Tên tài khoản:</strong>&nbsp;&nbsp;huyenluong@gmail.com</p>
        </div>
       <div class="row px-xl-5">
        <table border="1">
            <tr>
              <th>STT</th>
              <th>Chức năng</th>
              <th>Truy cập</th>
              <th>Thêm</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Phân quyền</td>
              <td>
                <input type="checkbox"/>
              </td>
              <td>
                <input type="checkbox"/>
              </td>
              <td>
                <input type="checkbox"/>
              </td>
              <td>
                <input type="checkbox"/>
              </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Quản lý sản phẩm</td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Quản lý bài viết</td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Xác nhận đơn hàng</td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Thống kê bán hàng</td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Thống kê đơn hàng</td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
                <td>
                  <input type="checkbox"/>
                </td>
              </tr>
          </table>
       </div>
       <div class="row px-xl-5" style="float:right;padding-top: 1rem;">
        <button class="btn btn-buy">Cập nhật</button>
        <button class="btn btn-buy-outline" style="margin-left:10px">Hủy bỏ</button>
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