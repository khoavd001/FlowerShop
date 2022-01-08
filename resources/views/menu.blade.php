<div class="container__menu-left sticky">
    <ul class="container__menu-buttons">
        <li id = 'home' class="container__menu-button-item ">
            <a href="{{asset('../public/page/Home')}}" class="home menu-button "><i class="menu-button-icon fal fa-home"></i>Trang chủ</a>
        </li>
        <li id = 'loaihoa' class="container__menu-button-item">
            <a href="{{asset('../public/page/loaihoa/HoaHong?type=loaihoa&flower=hoahong')}}" class="loaihoa menu-button"><i class="menu-button-icon fal fa-flower"></i>Loại hoa</a>
        </li>
        <li id = 'ynghia' class="container__menu-button-item">
            <a href="{{asset('../public/page/ynghiahoa/HoaDongTien?type=ynghia&mean=hoacuc')}}" class="ynghia menu-button"><i class="menu-button-icon fal fa-question-circle"></i>Ý nghĩa hoa</a>
        </li>
        <li id = 'giohang' class="container__menu-button-item">
            <a href="{{asset('../public/page/GioHang?type=giohang')}}" class="giohang menu-button"><i class="menu-button-icon fal fa-shopping-cart"></i>Giỏ hàng</a>
        </li>
    </ul>
    <ul class="container__menu-ads">
        <li class="container__menu-ad-item">
            <form action="{{asset('../public/page/tuvan')}}" method="post">
                <h6 class="menu-advisory-title">Đăng ký tư vấn miễn phí</h6>
                <div class="menu-advisory-name-wrapper">
                    <label class="menu-advisory-name">Tên:</label>
                    <input type="text" name="name" class="ad-name" required>
                </div>
                <p class="menu-advisory-title-child">Hình thức tư vấn:</p>
                <div class="menu-advisory-type-wrapper">
                    <div class="menu-advisory-type-name-wrapper">
                        <span class="menu-advisory-type-name">Tel</span>
                        <input type="radio" name="type" class="ad-type" value="1">
                    </div>
                    <div class="menu-advisory-type-name-wrapper">
                        <span class="menu-advisory-type-name">Facebook</span>
                        <input type="radio" name="type" class="ad-type" value="2">
                    </div>
                    <div class="menu-advisory-type-name-wrapper">
                        <span class="menu-advisory-type-name">Zalo</span>
                        <input type="radio" name="type" class="ad-type" value="3">
                    </div>
                    <div class="menu-advisory-type-name-wrapper">
                        <span class="menu-advisory-type-name">Mail</span>
                        <input type="radio" name="type" class="ad-type" value="4">
                    </div>
                </div>
                <p class="menu-advisory-title-child">Thông tin liên lạc:</p>
                <textarea name="contact" class="menu-advisory-contact-form" rows="2" placeholder=" Số điện thoại hoặc link" required></textarea>
                <p class="menu-advisory-title-child">Ghi chú:</p>
                <textarea name="note" rows="3" class="menu-advisory-note-form" required placeholder="Nội dung cần được tư vấn"></textarea>
                <div align="center" class="mt-2"> <input type="submit" class="advisory-submit-button btn-sm " onclick="alert('Thông tin của bạn đã được cập nhật. Flower Shop sẽ sớm liên hệ tư vấn đến bạn. Cảm ơn bạn đã đăng ký !')" style="width: 100px; text-align: center" value="Gửi"></div>
                @csrf
            </form>
        </li>
        <li class="container__menu-ad-item">
            <img src="{{asset('../public/img/QC.png')}}" alt="QC2" class="ad-img">
        </li>
    </ul>
</div>
