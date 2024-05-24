
<div class="container-fluid bg-dark mb-30">
    
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                         <i class="fa fa-bars" ></i>
                    </button>
                    <a href="{{ route('Home') }}" class="text-decoration-none d-block d-lg-none">
                        <img src="{{ asset('img/logo.jpg') }}" style="width: 158px; height: 79.81px;">

                    </a>
                        <label class="label-cart-bg display-cart" style="margin-left: 42px; margin-top: 9px;font-weight: 600;">
                            <a href=""><img  src="img/cart.png" width="28px" height="28px" style="margin-right: 10px;"/></a>
                        </label>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('KhuyenMai') }}" class="nav-item nav-link">KHUYẾN MẠI</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SẢN PHẨM <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    @foreach ($loaisanphams as $loaisanpham)
                                        <a href="{{ route('Item', ['loai_id' => $loaisanpham->type_id]) }}" class="dropdown-item">{{ $loaisanpham->ten_loai_san_pham }}</a>
                                    @endforeach
                                </div>

                            </div>

                            <a href="{{ route('News') }}" class="nav-item nav-link">TIN TỨC</a>
                            <a href="{{ route('About') }}" class="nav-item nav-link">GIỚI THIỆU</a>
                            <a href="#" class="nav-item nav-link">CHÍNH SÁCH BÁN HÀNG</a>
                            <a href="#" class="nav-item nav-link">LIÊN HỆ</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row px-xl-5 search-res">
            <div class="input-group">
                <input type="text" class="form-control ip-search-text" placeholder="Tìm kiếm sản phẩm...">
                <div class="input-group-append span-search-ic">
                    <span class="input-group-text bg-transparent text-white">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>