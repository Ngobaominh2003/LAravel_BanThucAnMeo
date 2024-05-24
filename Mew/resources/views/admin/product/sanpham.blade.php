<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quản lý sản phẩm</title>
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
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Admin.html">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="ManagerProducts.html">Sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="px-xl-5" style="padding-bottom: 2rem;">
            
                    <button class="btn-round" style="margin-right: 1rem;"><img src="../img/plus.png" width="29" height="30"/> </button>
                    <a href="{{ route('admin.product.create') }}" style="color: #000;">Thêm sản phẩm</a>
        </div>

    <div id="productTable" class="row px-xl-5">
        <table border="1">
            <tr>
                <th style="text-align: center;">Tên sản phẩm</th>
                <th style="text-align: center;">Hình ảnh</th>
                <th style="text-align: center;">Mô tả</th>
                <th style="text-align: center; width: 15%;" colspan="3">Hành động</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->ten_san_pham }}</td>
                    
                    <td style="width: 100px; height: 100px;"> <!-- Adjust the width and height as needed -->
                        <img src="{{ asset('img/' . $product->hinh_anh) }}" alt="Product Image" style="width: 100%; height: 100%;">
                    </td>
                    <td>{{ $product->mo_ta }}</td>
                    <td>
                        <a href="{{ route('admin.product.show', ['product_id' => $product->product_id]) }}">
                            <img src="{{ asset('img/icon/ctsp.png') }}" alt="Icon" style="width: 50px; height: auto;">
                        </a>
                    </td>


                    <td>
                        <a href="{{ route('admin.product.edit', ['product_id' => $product->product_id]) }}">
                            <img src="{{ asset('img/icon/sua.png') }}" alt="Icon" style="width: 50px; height: auto;">
                        </a>
                    </td>

                    <td>
                        <form id="deleteForm{{ $product->product_id }}" action="{{ route('admin.product.destroy', $product->product_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="border: none; background: none; color: black;">
                                <img src="{{ asset('img/icon/xoa.png') }}" alt="Xóa" style="width: 50px; height: auto;">
                            </button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </table>
    </div>
</div>

  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function confirmDelete(productId) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            var form = document.getElementById('deleteForm' + productId);
            form.submit();
        }
    }
</script>




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