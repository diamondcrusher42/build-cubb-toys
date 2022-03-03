const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('main-menu');

hamburger.addEventListener('click', function () {
  menu.classList.toggle('opened');
  this.classList.toggle('opened');
});
