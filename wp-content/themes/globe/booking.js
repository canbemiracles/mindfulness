var thisEvent;
var thisDate = false;
jQuery(function(){

		var locations = location.href;
		console.log(jQuery('.eventful').length);
if (jQuery('.eventful').length > 0) {
    jQuery('.eventful').each(function () {
        var child = jQuery(this).children('a');
        var url = child.attr('href');
        if (url.indexOf(locations) != -1) {
            thisDate = child.text() + ' ' + jQuery('.month_name').text();
            jQuery(this).addClass('c-active');
            return false;
        }
    });
} else {
    jQuery('.eventful-today').each(function () {
        var child = jQuery(this).children('a');
        var url = child.attr('href');
        if (url.indexOf(locations) != -1) {
            thisDate = child.text() + ' ' + jQuery('.month_name').text();
            jQuery(this).addClass('c-active');
            return false;
        }
    });
}
	jQuery('*').on('click', '.time-event', function(){
		jQuery('#main-calendar').fadeOut('slow', function() {
			jQuery('#main-form').fadeIn('slow');
		});
		thisEvent = jQuery(this).text();
	});
	jQuery(document).on('click', '#back-block', function(){
		jQuery('#main-form').fadeOut('slow', function() {
			jQuery('#main-calendar').fadeIn('slow');
		});
	});
	jQuery(document).on('click', '#next-block', function(){

		var error = false;

	jQuery('.input-block').each(function() {
		var val = jQuery(this).find('input').val();
		if (val.length == 0) {
			error = true;
			jQuery(this).addClass('required-input');
			jQuery(this).find('.required').show();
		}
	});		

		if (!error) jQuery('#main-form').fadeOut('slow', function() {
			jQuery('#confirm-form').fadeIn('slow');
		});
	});

jQuery(document).on('click', '#back-block-conf', function(){
		jQuery('#confirm-form').fadeOut('slow', function() {
			jQuery('#main-form').fadeIn('slow');
		});
	});


	jQuery('#calendar-front').html(jQuery('#calendar-front').children().html());
	

	jQuery.scrollify({
            section : ".section",
          });

jQuery('#ifr').height(jQuery('.section').height());
	jQuery('#ifr').width(jQuery('window').width());
	
});