$(document).ready(function() {


      // nav menu push to right
	$('#section__nav--icon-bars').click(function() {
		$('.js-sliding-nav').toggleClass('push-to-left');
	});




	// // equal height
 //      $('.equal-height').each(function() {
 //            var self = $(this);
 //            self.imagesLoaded(function() {
 //                  equalHeight(self);
 //            });
 //      });

      // slideshow
      $('#section__first--main').cycle({
        autoHeight : false,
        slides : '> .section__first--slide',
        pauseOnHover : false,
        pager : '#section__first--slide-pagination',
        pagerActiveClass : 'active',
        pagerTemplate : ''
    });

      // testimonial
      $('.testimonial-slideshow').cycle({
        slides : '> .testimonial-slide',
        pauseOnHover : false,
        timeout: 5000
    });

      $('.section__first--slide').stellar();

    // client carousel
    if ($('#client-carousel').length > 0) {
        $('#client-carousel').imagesLoaded(function() {
            $('#client-carousel').cycle({
                fx : 'carousel',
                slides : '> li',
                timeout : 2000
            });
        });
    }
});
