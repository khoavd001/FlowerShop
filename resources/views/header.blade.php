<header id="header" >
    <div class="header__grid ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 header__logo">
                    <img src="{{asset('../public/img/lOGO.png')}}" alt="logo" class="logo" />
                    <span class="logo-name">Flower Shop</span>
                </div>
                <div class="col-4 header__slogan">
                    <marquee><h1 id="slogan"><i>Trao gửi yêu thương !</i></h1></marquee>
                </div>
                <div class="col-4 header__user">
                    <div class="header__search">
                        <i class="header__icon far fa-search"></i>
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                    </div>
                    <div class="header__account">
                        <a href="{{asset('../public/admin/users/login')}}"><button class="header__button">Đăng nhập</button></a>
                        <a href="{{asset('../public/admin/users/signup')}}"><button class="header__button">Đăng ký</button></a>
                    </div>
                </div>
                <div class="col-2 header__menu">
                    <i class="header__menu-button far fa-bars"></i>
                    <div class="header__main-menu">
                        <ul class="container__menu-buttons">
                            <li class="container__menu-button-item">
                                <a href="#" class="main-menu-button">Trang chủ</a>
                            </li>
                            <li class="container__menu-button-item">
                                <a href="#" class="main-menu-button">Loại hoa</a>
                            </li>
                            <li class="container__menu-button-item">
                                <a href="#" class="main-menu-button">Ý nghĩa hoa</a>
                            </li>
                            <li class="container__menu-button-item">
                                <a href="#" class="main-menu-button">Giỏ hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
