<div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block text-lg-right"> </div>
                
           
            <div class="col-lg-6 text-center text-lg-right">
                    <!-- Số điện thoại -->
                    <div class="d-inline-block align-middle">
                        <label class="label-se-bg mb-0">
                            <i class="fa fa-phone icon-se-bg"></i>
                            1800.270.27
                        </label>
                    </div>
                    <!-- Logo -->
                    <div class="d-inline-block align-middle ml-2">
                    <div class="col-lg-2 text-center text-lg-right">
                                <div class="d-flex" style="margin-top: 10px;">
                                    <img src="{{ asset('img/icon_avtar_comments.png') }}" width="25px" height="25px"/>
                                    <h6 style="color: #fff; padding-left: 10px; padding-top: 2px;">
                                        @if(Auth::check())
                                            {{ Auth::user()->name }}
                                        @else
                                            
                                        @endif
                                    </h6>
                                </div>
                            </div>
                    </div>
            </div>

        </div>
       
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-2">
                <a href="{{ route('Home') }}" class="text-decoration-none">
                    <img src="{{asset('img/logo.jpg')}}"  style="width: 158px; height: 79.81px;"/>
                </a>
            </div>
            <div class="col-lg-8 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control ip-search-text" placeholder="Tìm kiếm sản phẩm...">
                        <div class="input-group-append span-search-ic">
                            <span class="input-group-text bg-transparent text-white">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-6 text-left">
                <label class="label-cart-bg" style="margin-left: 42px; margin-top: 9px;font-weight: 600;">
                   <a href="{{ route('GioHang') }}"> <img  src="{{asset('img/cart.png')}}" width="28px" height="28px" style="margin-right: 10px;"/></a>
                    <a href="{{ route('GioHang') }}">Giỏ hàng</a>
                </label>
            </div>
        </div>
    </div>