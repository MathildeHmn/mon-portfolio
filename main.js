// Animation "Navbar" (menu "Hamburger" à droite de la page)
$(document).ready(function () {
  $('.menu-toggler').on('click', function () {
    $(this).toggleClass('open');
    $('.top-nav').toggleClass('open');
  });

  $('.top-nav .nav-link').on('click', function () {
    $('.menu-toggler').removeClass('open');
    $('.top-nav').removeClass('open');
  });

  $('nav a[href*="#"]').on('click', function () {
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 100
    }, 1000);
  });

  $('#up').on('click', function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
  });

// Réglage de la durée de remontée de la page grâce au bouton bas dans le footer 
// + Initialisation avant utilisation dans index.php (vitesse d'apparition des éléments)
  AOS.init({
    easing: 'ease',
    duration: 700,
    once: true
  });
});
