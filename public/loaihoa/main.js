const a = document.querySelector.bind(document);
const b = document.querySelectorAll.bind(document);

var $jq = jQuery.noConflict();
$jq(document).ready(function(){
    $jq('.container__flower-list-slick-slider.bohoa').slick({
        slidesToShow: 4,
        infinite: false,
        prevArrow: $jq('.prev-LH'),
        nextArrow: $jq('.next-LH'),
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

    $jq('.container__flower-list-slick-slider.giohoa').slick({
        slidesToShow: 4,
        infinite: false,
        prevArrow: $jq('.prev-HHGH'),
        nextArrow: $jq('.next-HHGH'),
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
    $jq('.container__flower-list-slick-slider.hophoa').slick({
        slidesToShow: 4,
        infinite: false,
        prevArrow: $jq('.hophoa-prev'),
        nextArrow: $jq('.hophoa-next'),
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
    $jq('.container__flower-list-slick-slider.chucmung').slick({
        slidesToShow: 4,
        infinite: false,
        prevArrow: $jq('.chucmung-prev'),
        nextArrow: $jq('.chucmung-next'),
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

const flowerListWrapperBoHoa = $$('.container__flower-list-wrapper.bohoa');
const slickSlideBoHoa = $$('.flower-list-slider-img.bohoa');
const flowerListWrapperGioHoa = $$('.container__flower-list-wrapper.giohoa');
const slickSlideGioHoa = $$('.flower-list-slider-img.giohoa');
const flowerListWrapperHopHoa = $$('.container__flower-list-wrapper.hophoa');
const slickSlideHopHoa = $$('.flower-list-slider-img.hophoa');
const flowerListWrapperChucMung = $$('.container__flower-list-wrapper.chucmung');
const slickSlideChucMung = $$('.flower-list-slider-img.chucmung');

slickSlideBoHoa.forEach(function(item, index) {
    const flowerListWrapperBoHoaIndex = flowerListWrapperBoHoa[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.bohoa.is-block').classList.remove('is-block');
        flowerListWrapperBoHoaIndex.classList.add('is-block');
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
slickSlideGioHoa.forEach(function(item, index) {
    const flowerListWrapperGioHoaIndex = flowerListWrapperGioHoa[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.giohoa.is-block').classList.remove('is-block');
        flowerListWrapperGioHoaIndex.classList.add('is-block');
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
slickSlideHopHoa.forEach(function(item, index) {
    const flowerListWrapperHopHoaIndex = flowerListWrapperHopHoa[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.hophoa.is-block').classList.remove('is-block');
        flowerListWrapperHopHoaIndex.classList.add('is-block');
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
slickSlideChucMung.forEach(function(item, index) {
    const flowerListWrapperChucMungIndex = flowerListWrapperChucMung[index];
    item.onclick = function() {
        $('.container__flower-list-wrapper.giohoa.is-block').classList.remove('is-block');
        flowerListWrapperChucMungIndex.classList.add('is-block');
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
