<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sửa/Sửa sản phẩm</title>
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
    <link href="{{ asset('css/styleAdmin.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('admin/Logo')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('admin/Logoo')
    <!-- Navbar End -->
       <!-- Breadcrumb Start -->
       <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light" style="margin-bottom: 15px;">
                    <a class="breadcrumb-item text-dark" href="#">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="#">Sản phẩm</a>
                    <a class="breadcrumb-item text-dark" href="#">Sửa sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
     <!-- Cart Start -->

    <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-7">
                <form method="POST" action="{{ route('admin.product.update', ['product_id' => $product->product_id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                        <div style="padding: 20px;">
                            <label for="name" style="margin-left: 46px;"><span class="required" style="color: red;">*</span>&nbsp;Tên sản phẩm:</label>
                            <input type="text" id="name" name="ten_san_pham" style="margin-left: 20px;width: 60%;height: 40px;" class="form-pay-no-change-pass" placeholder="Nhập tên sản phẩm..." value="{{ $product->ten_san_pham }}" /><br/>
                            <div class="d-flex">
                                <label for="category" style="margin-top:30px"> <span class="required" style="color: red;">*</span>&nbsp;Danh mục sản phẩm:</label>
                                <input type="text" id="category" name="loai_id" class="form-pay-no-change-pass-w input-change-pass-w-49" placeholder="Nhập danh mục sản phẩm..." value="{{ $product->loai_id }}" />
                            </div><br/>
                            <div class="d-flex">
                                <label for="price" style="margin-top:30px; margin-left: 120px;"> <span class="required" style="color: red;">*</span>&nbsp;Giá:</label>
                                <input type="text" id="price" name="gia" class="form-pay-no-change-pass-w input-change-pass-w-49" placeholder="Nhập giá sản phẩm..." value="{{ $product->gia }}" />
                            </div>
                            <div class="d-flex">
                                <label for="weight" style="margin-top:30px;margin-left: 60px;"> <span class="required" style="color: red;">*</span>&nbsp;Trọng lượng:</label>
                                <input type="text" id="weight" name="khoi_luong" class="form-pay-no-change-pass-w input-change-pass-w-49" placeholder="Nhập trọng lượng sản phẩm..." value="{{ $product->khoi_luong }}" />
                            </div>
                            <div class="d-flex">
                                <label for="quantity" style="margin-top:30px;margin-left: 80px;"> <span class="required" style="color: red;">*</span>&nbsp;Số lượng:</label>
                                <input type="text" id="quantity" name="so_luong" class="form-pay-no-change-pass-w input-change-pass-w-49" placeholder="Nhập số lượng sản phẩm..." value="{{ $product->so_luong }}" />
                            </div>
                            <div class="d-flex">
                                <label for="image" style="margin-top:30px;margin-left: 43px;"><span class="required" style="color: red;">*</span>&nbsp;Ảnh sản phẩm:</label>
                                <input type="file" id="image" name="hinh_anh" class="button-insert-img" accept="image/*" style="margin-left: 20px;">
                                
                                <p style="margin-left: 29px;margin-top: 45px;color: #D9D9D9;">Kích thước ảnh không quá 5MB, 250x120px.<br>Tối đa 10 ảnh</p>
                            </div>
                            <label for="description" style="margin-top:30px;margin-left: 102px;"><span class="required" style="color: red;">*</span>&nbsp;Mô tả:</label>
                            <textarea id="description" name="mo_ta" class="input-text-add-product" placeholder="Nhập mô tả sản phẩm..." style="margin-left: 20px;">{{ $product->mo_ta }}</textarea><br/>
                        </div> 
                        
                        <div class="row px-xl-5" style="float:right;margin-right: 7rem;">
                            <button type="submit" class="btn btn-buy-outline">Cập nhật sản phẩm</button>
                            <button type="submit" class="btn btn-buy" style="margin-left:10px">Lưu & Hiển thị</button>
                            <button type="button" class="btn btn-buy-outline" style="margin-left:10px">Hủy bỏ</button>
                        </div>
                    </form>
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
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

 
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>