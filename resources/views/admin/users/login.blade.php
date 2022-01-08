
<!doctype html>
<html lang="en">
<head>
    @include('admin.head')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../public/template/admin/login/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('../public/template/admin/login/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../public/template/admin/login/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('../public/template/admin/login/css/style.css')}}">

</head>
<body>

    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('{{URL::to('../public/template/admin/login/images/bg_1.jpg')}}');"></div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">

                        <div class="form-block mx-auto">

                            <div class="text-center mb-5">
                                <h3 class="text-uppercase"><strong>Đăng nhập</strong></h3>
                            </div>

                            @include('admin.alert')

                            <form action="{{asset('/admin/users/login/store')}}" method="post">
                                <div class="form-group first">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email" required>
                                </div>
                                <div class="form-group last mb-3">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" placeholder="Mật khẩu của bạn " id="password" name = "password" required>
                                </div>

                                <div class="d-sm-flex mb-3 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Lưu mật khẩu</span>
                                        <input type="checkbox" checked="checked"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <div class="d-sm-flex mb-4 align-items-center">
                                    <span class="ml-lg-1">Bạn chưa có tài khoản ? <a href="../users/signup" class="forgot-pass">Đăng ký</a> </span>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu </a></span>
                                </div>

                                <input type="submit" value="Đăng nhập" class="btn btn-block py-2 btn-primary">

                                <span class="text-center my-3 d-block">_ _ _ or _ _ _</span>


                                <div class="">
                                    <a href="#" class="btn btn-block py-2 btn-facebook">
                                        <span class="icon-facebook mr-3"></span> Đăng nhập bằng facebook
                                    </a>
                                    <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span> Đăng nhập bằng Google</a>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('admin.footer')

</body>
</html>
