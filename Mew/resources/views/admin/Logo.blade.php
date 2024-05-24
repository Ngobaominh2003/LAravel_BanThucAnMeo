<div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block text-lg-right">
                
            </div>
            <div class="col-lg-4 text-center text-lg-right">
            </div>
            <div class="col-lg-2 text-center text-lg-right">
                <div class="d-flex" style="margin-top: 10px;">
                    <img src="{{ asset('img/icon_avtar_comments.png') }}" width="25px" height="25px"/>
                    <h6 style="color: #fff; padding-left: 10px; padding-top: 2px;">
                        @if(Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            Ngô Quang Minh
                        @endif
                    </h6>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-2">
                <a href="{{ route('admin.index') }}" class="text-decoration-none">
                    <img src="{{asset('img/logo.jpg')}}"  style="width: 158px; height: 79.81px;"/>
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