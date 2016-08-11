$(document).foundation();
// $('#primary-menu').addClass('menu');

 /*START animacja hamburger-menu*/
 $('.hamburger').on('click', function() {
   if ( $(this).hasClass('open') ) {
     $(this).removeClass('open');
     $('#primary-menu').slideUp();
   }
   else {
     $(this).addClass('open');
     $('#primary-menu').slideDown();
   }
 });
  /*END animacja hamburger-menu*/


 /*START Smooth scrolling after anchor clicked*/
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
/*END Smooth scrolling after anchor clicked*/

/* START wierd paralax flooating elemnt animation */

  $(document).on('mousemove', function(e){
		$('.with-elements').each(function(){
			var divPos = {};
			var offset = $(this).offset();

			var from_left = e.pageX - offset.left;
			var from_top = e.pageY - offset.top;
			var from_left_percent = from_left / $(this).width() * -1;
			var from_top_percent = from_top / $(this).height() * -1;

			$('.element', $(this)).each(function() {
				$(this).css({
					'transform': 'translate3d(' + (from_left_percent + 0.5) * 30 * $(this).data('depth') + 'px, ' + (from_top_percent + 0.5) * 30 * $(this).data('depth') + 'px, 0px) rotate(' + ((from_left_percent * -5) + (from_top_percent * -5)) * $(this).data('depth') + 'deg)',
					'transform-style': 'preserve-3d',
					'backface-visibility': 'hidden'
				});
			});
		});
	});
/* END wierd paralax flooating elemnt animation */
