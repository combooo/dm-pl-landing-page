(function () {
  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.menu__list-mobile');

  burger.addEventListener('click', () => {
    burger.classList.toggle('burger__active');
    menu.classList.toggle('menu__list-mobile-active');
  });
}());
