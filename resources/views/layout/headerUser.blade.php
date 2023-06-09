<div class="row header shadow-sm">

    <!--Logo-->
    <div class="col-sm-3 pl-0 text-center header-logo">
        <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
            <h3 class="logo"><a href="{{route('homeUs')}}" class="text-secondary logo">
{{--                                        <i class="fa fa-rocket"></i>--}}
                    Người dùng<span class="small"></span></a></h3>
        </div>
    </div>
    <!--Logo-->

    <!--Header Menu-->
    <div class="col-sm-9 header-menu pt-2 pb-0">
        <div class="row">

            <!--Menu Icons-->
            <div class="col-sm-4 col-8 pl-0">
                <!--Toggle sidebar-->
                <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                <!--Toggle sidebar-->
            </div>
            <!--Menu Icons-->

            <!--Search box and avatar-->
            <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
{{--                <div class="search-rounded mr-3">--}}
{{--                    <input type="text" class="form-control search-box" placeholder="Enter keywords.." />--}}
{{--                </div>--}}
                <div class="mr-4" style="margin-top: -6px">
                    <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                        <!--(Đăng nhập)  Bước 1.6.9 Nếu entity user có là admin (role = 2) thì hệ thống hiển thị trong phần header sẽ hiển thị button cho phép truy cập vào trang quản lý (Web quản lý) -->
                        @if(Session::get('User')->role_id==2)
                        <a class="dropdown-item" href="{{route('adLogin')}}"><i class="fas fa-user-tie pr-2"></i> Web quản lý</a>
                        <div class="dropdown-divider"></div>
                        @endif
                        <a class="dropdown-item" href="{{route('userProfile')}}"><i class="fa fa-user pr-2"></i> Thông tin cá nhân</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('userChangePass')}}"><i class="fa fa-lock pr-2"></i> Đổi mật khẩu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('getUsLogout')}}"><i class="fa fa-power-off pr-2"></i> Đăng xuất</a>
                    </div>
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/img/icon_nam.png') }}" alt="Adam" class="rounded-circle" style="width:40px; height:40px; margin-bottom: -2px">
                        <p style="font-size: 13px; color: #6c757d; margin-bottom: 0px"> {{Session::get('User')->name}}</p>
                    </a>
                </div>
            </div>
            <!--Search box and avatar-->
        </div>
    </div>
    <!--Header Menu-->
</div>
