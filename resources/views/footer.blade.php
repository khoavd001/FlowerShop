<footer>
    <div class="footer">
        <div class="footer__column-4">
            <h5 class="footer__title">Liên hệ với chúng tôi</h5>
            <div class="footer__logo">
                <img src="{{asset('../public/img/lOGO.png')}}" alt="logo" class="logo" />
                <span class="logo-name">Flower Shop</span>
            </div>
            <p class="footer__contact">Mạng xã hội</p>
            <ul class="footer__contact-social-network-wrapper">
                <li class="footer__contact-item">
                    <i class="fab fa-facebook-square"></i>
                </li>
                <li class="footer__contact-item">
                    <i class="fab fa-instagram"></i>
                </li>
                <li class="footer__contact-item">
                    <i class="fab fa-twitter-square"></i>
                </li>
            </ul>
            <p class="footer__contact">Điện thoại, Email</p>
            <ul class="footer__contact-phone-email-wrapper">
                <li class="footer__contact-phone-email-item">
                    <a href="mailto:flowershop@gmail.com" class="footer__contact-email">flowershop@gmail.com</a>
                </li>
                <li class="footer__contact-phone-email-item">
                    <a class="footer__contact-phone" href="tel:+0788466450">0788 466 450</a>
                </li>
            </ul>
        </div>
        <div class="footer__column-4">
            <h5 class="footer__title">Trang web nội bộ</h5>
            <ul class="internal-link-web-wrapper">
                <li class="internal-link-web-item">
                    <a href="#" class="internal-link-web">Trang chủ</a>
                </li>
                <li class="internal-link-web-item">
                    <a href="#" class="internal-link-web">Loại hoa</a>
                </li>
                <li class="internal-link-web-item">
                    <a href="#" class="internal-link-web">Ý nghĩa hoa</a>
                </li>
                <li class="internal-link-web-item">
                    <a href="#" class="internal-link-web">Giỏ hàng</a>
                </li>
            </ul>
        </div>
        <div class="footer__column-4">
            <h5 class="footer__title">Bảo mật giao dịch của bạn</h5>
            <div class="footer__secure-logo-wrapper">
                <img src="{{asset('../public/img/master.png')}}" alt="mastercard" class="footer__secure-logo">
                <img src="{{asset('../public/img/maes.png')}}" alt="visa" class="footer__secure-logo">
                <img src="{{asset('../public/img/visa.png')}}" alt="maestro" class="footer__secure-logo">
            </div>
        </div>
        <div class="footer__column-4">
            <h5 class="footer__title">Bản đồ địa chỉ cửa hàng</h5>
            <iframe class="web-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.
                    2311711962225!2d106.8008654152607!3d10.870014160430562!2m3!1f0!2f0!3f0!3m2!1i1024!2
                    i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqh
                    aSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v16390
                    59644885!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
    <a class="footer__contact-phone" href="tel:+0788466450">
        <div class="coc-coc-alo-circle"></div>
        <div class="coc-coc-alo-phone"></div>
    </a>
</footer>
<div class="footer__license">
    <p class="footer__licence-content">
        © 2021 Flower Shop. Bản quyền thuộc về Công ty TNHH Tropicana Flower. Mọi hành vi sao chép đều là phạm pháp nếu không có sự cho phép bằng văn bản của chúng tôi.
    </p>
    <p class="footer__licence-content">
        Địa chỉ: Bên cạnh trường Đại học Công Nghệ Thông Tin - Đại học quốc gia thành phố Hồ Chí Minh, khu phố 4, phường Linh Trung, quận Thủ Đức
    </p>
    <p class="footer__licence-content"></p>
</div>

<script src="{{asset('../public/js/main.js')}}"></script>

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js')}} " integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js')}} " integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
@yield('footer')
