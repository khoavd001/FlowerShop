

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);


// SLICK SLIDER
var $jq = jQuery.noConflict();
$jq(document).ready(function() {
    $jq('.container__flower-list-slick-slider.khuyenmai').slick({
        slidesToShow: 5,
        infinite: false,
        prevArrow: $jq('.prev'),
        nextArrow: $jq('.next'),
        responsive: [
            {
                breakpoint: 739,
                settings: {
                    slidesToShow: 1,
                    infinite: false,

                }
              }
        ]
    })
    $jq('.container__flower-list-slick-slider.hoatuoi').slick({
        slidesToShow: 5,
        infinite: false,
        prevArrow: $jq('.hoa-tuoi-prev'),
        nextArrow: $jq('.hoa-tuoi-next'),
        responsive: [
            {
                breakpoint: 739,
                settings: {
                    slidesToShow: 1,
                    infinite: false,
                }
              }
        ]
    }),
    $jq('.container__flower-list-slick-slider.hoagiangsinh').slick({
        slidesToShow: 5,
        infinite: false,
        prevArrow: $jq('.hoa-giang-sinh-prev'),
        nextArrow: $jq('.hoa-giang-sinh-next'),
        responsive: [
            {
                breakpoint: 739,
                settings: {
                    slidesToShow: 1,
                    infinite: false,

                }
              }
        ]
    }),
    $jq('.container__flower-list-slick-slider.hoatrian').slick({
        slidesToShow: 5,
        infinite: false,
        prevArrow: $jq('.hoa-tri-an-prev'),
        nextArrow: $jq('.hoa-tri-an-next'),
        responsive: [
            {
                breakpoint: 739,
                settings: {
                    slidesToShow: 1,
                    infinite: false,

                }
              }
        ]
    }),
    $jq('.container__flower-list-slick-slider.hoafriend').slick({
        slidesToShow: 5,
        infinite: false,
        prevArrow: $jq('.hoa-friend-prev'),
        nextArrow: $jq('.hoa-friend-next'),
        responsive: [
            {
                breakpoint: 739,
                settings: {
                    slidesToShow: 1,
                    infinite: false,

                }
              }
        ]
    })
})


const flowerListWrapperKhuyenMai = $$('.container__flower-list-wrapper.khuyenmai');
const flowerListWrapperHoaTuoi = $$('.container__flower-list-wrapper.hoatuoi');
const flowerListWrapperHoaGiangSinh = $$('.container__flower-list-wrapper.hoagiangsinh');
const flowerListWrapperHoaTriAn = $$('.container__flower-list-wrapper.hoatrian');
const flowerListWrapperHoaFriend = $$('.container__flower-list-wrapper.hoafriend');

const slickSlideKhuyenMai = $$('.flower-list-slider-img.khuyenmai');
const slickSlideHoaTuoi = $$('.flower-list-slider-img.hoatuoi');
const slickSlideHoaGiangSinh = $$('.flower-list-slider-img.hoagiangsinh');
const slickSlideHoaTriAn = $$('.flower-list-slider-img.hoatrian');
const slickSlideHoaFriend = $$('.flower-list-slider-img.hoafriend');

slickSlideKhuyenMai.forEach(function(item, index) {
    const flowerListWrapperKhuyenMaiIndex = flowerListWrapperKhuyenMai[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.khuyenmai.is-block').classList.remove('is-block');
        flowerListWrapperKhuyenMaiIndex.classList.add('is-block');
    }
    item.onmouseover = function() {
        this.style.transform = "scale(1.1)";
        this.style.transition = "all 0.3s";
    }
    item.onmouseout = function() {
        this.style.transform = "scale(1)";
        this.style.transition = "all 0.3s";
    }
})

slickSlideHoaTuoi.forEach(function(item, index) {
    const flowerListWrapperHoaTuoiIndex = flowerListWrapperHoaTuoi[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.hoatuoi.is-block').classList.remove('is-block');
        flowerListWrapperHoaTuoiIndex.classList.add('is-block');
    }
    item.onmouseover = function() {
        this.style.transform = "scale(1.1)";
        this.style.transition = "all 0.3s";
    }
    item.onmouseout = function() {
        this.style.transform = "scale(1)";
        this.style.transition = "all 0.3s";
    }
})

slickSlideHoaGiangSinh.forEach(function(item, index) {
    const flowerListWrapperHoaGiangSinhIndex = flowerListWrapperHoaGiangSinh[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.hoagiangsinh.is-block').classList.remove('is-block');
        flowerListWrapperHoaGiangSinhIndex.classList.add('is-block');
    }
    item.onmouseover = function() {
        this.style.transform = "scale(1.1)";
        this.style.transition = "all 0.3s";
    }
    item.onmouseout = function() {
        this.style.transform = "scale(1)";
        this.style.transition = "all 0.3s";
    }
})

slickSlideHoaTriAn.forEach(function(item, index) {
    const flowerListWrapperHoaTriAnIndex = flowerListWrapperHoaTriAn[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.hoatrian.is-block').classList.remove('is-block');
        flowerListWrapperHoaTriAnIndex.classList.add('is-block');
    }
    item.onmouseover = function() {
        this.style.transform = "scale(1.1)";
        this.style.transition = "all 0.3s";
    }
    item.onmouseout = function() {
        this.style.transform = "scale(1)";
        this.style.transition = "all 0.3s";
    }
})

slickSlideHoaFriend.forEach(function(item, index) {
    const flowerListWrapperHoaFriendIndex = flowerListWrapperHoaFriend[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.hoafriend.is-block').classList.remove('is-block');
        flowerListWrapperHoaFriendIndex.classList.add('is-block');
    }
    item.onmouseover = function() {
        this.style.transform = "scale(1.1)";
        this.style.transition = "all 0.3s";
    }
    item.onmouseout = function() {
        this.style.transform = "scale(1)";
        this.style.transition = "all 0.3s";
    }
})


// TÌNH TRẠNG MẶT HÀNG
const goodStatus = $$('.good-status');
const buyBtn = $$('.buy-btn');

goodStatus.forEach(function(item, index){
    const buyBtnIndex = buyBtn[index];
    if (item.getAttribute("data-check") === '1') {
        item.innerText = "Còn hàng";
        item.style.color = "#13DD64";
        item.style.fontWeight = "700";
    }
    else {
        item.innerText = "Hết hàng";
        item.style.color = "#DD1313";
        item.style.fontWeight = "700";
        buyBtnIndex.classList.add("is-disabled");
    }
})


// HEADER MAIN MENU

const headerMainMenu = $('.header__main-menu');
const headerMenuButton = $('.col-2.header__menu');
const mobileMenuButtons = $('.container__menu-buttons');

headerMenuButton.onclick = function(){
    headerMainMenu.classList.toggle("active");
}

mobileMenuButtons.onclick = function(e){
    e.stopPropagation();
}

// SET ACTIVE
function onActiveTag(){
    const param = new URLSearchParams(window.location.search);
    const key = param.get('type');
    const key_1 = param.get('flower');
    const key_2 = param.get('mean');
    switch(key){
        case 'loaihoa':
            $(`#${key}`).classList.add('active');
            $(`.${key}`).classList.add('active');
            $(`.${key_1}`).classList.add('activ');
        case 'ynghia':
            $(`#${key}`).classList.add('active');
            $(`.${key}`).classList.add('active');
            $(`.${key_2}`).classList.add('activ');
        case 'giohang':
            $(`#${key}`).classList.add('active');
            $(`.${key}`).classList.add('active');
            break;
        default :
            $(`#home`).classList.add('active');
            $(`.home`).classList.add('active');
            break;
    }

}
window.onload = onActiveTag();

