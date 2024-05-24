<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giới thiệu</title>
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
                    <span class="breadcrumb-item active">Giới thiệu</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h4 class="mb-3">CỬA HÀNG BÁN LẺ CATTO</h4>
                <p>Chào mừng đến với Catto - cửa hàng trực tuyến chuyên cung cấp các sản phẩm dành cho mèo. Tại Catto, chúng tôi cam kết mang đến cho bạn và mèo của bạn những sản phẩm chất lượng với giá cả hợp lý nhất. Chúng tôi có đầy đủ các sản phẩm như thức ăn, đồ chơi, phụ kiện và nhiều sản phẩm khác để bạn có thể chăm sóc và nuôi dưỡng mèo của mình một cách tốt nhất.</p>
                <p>Tại Catto, chúng tôi đặt chất lượng sản phẩm và dịch vụ khách hàng lên hàng đầu. Chúng tôi luôn cập nhật và đổi mới sản phẩm để đáp ứng nhu cầu của khách hàng ngày càng cao. Bên cạnh đó, chúng tôi cũng có đội ngũ nhân viên chăm sóc khách hàng nhiệt tình và chuyên nghiệp, luôn sẵn sàng hỗ trợ và giải đáp các thắc mắc của bạn về sản phẩm.</p>
                <p>Với Catto, bạn có thể hoàn toàn yên tâm khi mua sắm sản phẩm cho mèo của mình. Chúng tôi cam kết bán hàng chính hãng và vận chuyển hàng nhanh chóng đến tận tay bạn. Hơn nữa, chúng tôi cũng có chính sách đổi trả hàng trong vòng 7 ngày nếu sản phẩm không đúng với yêu cầu của bạn.</p>
                <p>Hãy đến với Catto để tìm kiếm những sản phẩm tốt nhất cho mèo của bạn. Chúng tôi sẽ mang đến cho bạn trải nghiệm mua sắm trực tuyến an toàn, tiện lợi và thoải mái nhất!</p>
            </div>
            <div class="col-lg-4">
                <img src="img/About_1.png" width="402px" height="205px" alt=""/>
                <img src="img/About_2.png" width="402px" height="205px" alt=""/>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>