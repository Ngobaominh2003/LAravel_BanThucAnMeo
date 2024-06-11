<div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="{{asset('img/logo.jpg')}}"  style="width: 158px; height: 79.81px;"/>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('DonHang') }}" class="nav-item nav-link">QUẢN LÝ ĐƠN HÀNG</a>
                            <a href="{{ route('loaisanpham.index') }}" class="nav-item nav-link">QUẢN LÝ DANH MỤC</a>
                            <a href="{{ route('admin.product') }}" class="nav-item nav-link">QUẢN LÝ SẢN PHẨM</a>
                            <a href="ManagerPosts.html" class="nav-item nav-link">QUẢN LÝ BÀI VIẾT</a>
                            <a href="{{ route('admin.index') }}" class="nav-item nav-link">PHÂN QUYỀN</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">THỐNG KÊ<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ route('ThongKe') }}" class="dropdown-item">Thống kê bán hàng</a>
                                    <a href="StaticOrder.html" class="dropdown-item">Thống kê đơn hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>