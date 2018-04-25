$(document).ready(function(){
  $('.modal').modal();
  $('.parallax').parallax();
  $(".button-collapse").sideNav();
});


$(window).scroll(function() {
 if ($(document).scrollTop() > 35) {
   //cuando se hace el scroll down
   $('#prueba').addClass('hide');
   $('#menulogo').addClass('hide');
   $('#menupe').removeClass('hide');
   $('#menuinicio').removeClass('lh84');
   $('#menuproductos').removeClass('lh84');
   $('#menublog').removeClass('lh84');
   $('#menucursos').removeClass('lh84');
   $('#menucontacto').removeClass('lh84');
   $('#menuinicio').addClass('lh60');
   $('#menuproductos').addClass('lh60');
   $('#menublog').addClass('lh60');
   $('#menucursos').addClass('lh60');
   $('#menucontacto').addClass('lh60');
   $('#undernav').css('height','60px');
 } else {
   //cuado se esta hasta arriba
   $('#prueba').removeClass('hide');
   $('#menulogo').removeClass('hide');
   $('#menupe').addClass('hide');
   $('#menuinicio').addClass('lh84');
   $('#menuproductos').addClass('lh84');
   $('#menublog').addClass('lh84');
   $('#menucursos').addClass('lh84');
   $('#menucontacto').addClass('lh84');
   $('#menuinicio').removeClass('lh60');
   $('#menuproductos').removeClass('lh60');
   $('#menublog').removeClass('lh60');
   $('#menucursos').removeClass('lh60');
   $('#menucontacto').removeClass('lh60');
   $('nav#undernav').css('height','84px');
 }
});

$(document).on('click', 'a.menu-link', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	});

function toTop(){
  event.preventDefault();
  $('html, body').animate({
      scrollTop: 0
  }, 500);

}
