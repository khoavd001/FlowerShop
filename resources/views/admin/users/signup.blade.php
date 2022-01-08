
<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.head')

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('../public/template/admin/signup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('../public/template/admin/signup/css/style.css')}}">

</head>
<body>

<div class="main">

    <section class="signup">

        <div class="container">
            <div class="signup-content">
                @include('admin.alert')
                <form action="#" method="POST" id="signup-form" class="signup-form">
                    <h2 class="form-title">Đăng ký tài khoản </h2>

                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Họ và tên" required/>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Nhập mật khẩu" required/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="tel" id="tel" placeholder="Nhập số điện thoại" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="address" id="address" placeholder="Nhập địa chỉ ( nhận hàng) " required/>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Đăng ký"/>
                    </div>

                    @csrf

                </form>
                <p class="loginhere">
                    Bạn đã có tài khoản ? <a href="../users/login" class="loginhere-link">Đăng nhập</a>
                </p>
            </div>
        </div>
    </section>

</div>

@include('admin.footer')
</body>
</html>
