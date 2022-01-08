$('.owl-carousel').owlCarousel({
  stagePadding: 50,
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
const home = {
  init: () => {
    home.closeLogin('.close', '.modal');
  },
  closeLogin: (btn, info) => {
    const button = document.querySelector(btn);
    const infoWrap = document.querySelector(info);
    if (!button || !infoWrap) return;
    button.addEventListener('click', () => {
      infoWrap.classList.add('active');
    });
  },
};

home.init();

