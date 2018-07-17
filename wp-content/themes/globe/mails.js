jQuery(function(){

	jQuery('.input-block').change(checkInput);
jQuery('.input-block').keyup(checkInput);

    jQuery( document).on('click', '.submit', function() {
	if (jQuery('input[name="confirm"]:checked').length) {
		jQuery('#conf').hide();
        jQuery.ajax({
            url : send_mail.ajax_url,
            type : 'post',
            data : {
                action :'sendMail',
                form_name :    jQuery("#name").val(),
                form_company :    jQuery("#company").val(),
                form_email :    jQuery("#email").val(),
                form_phone :    jQuery("#phone").val(),
                form_location :    jQuery("#location").val(),
                form_NEEDS :    jQuery("#NEEDS").val(),
		form_date: thisDate,
		form_event: thisEvent
            },

            success : function( response ) {
		jQuery('#s-date').text(thisDate);
		jQuery('#s-time').text(thisEvent); 
thisEvent =  thisEvent.replace(/\s+/g, '');
		jQuery('#confirm-form').fadeOut('slow', function() {
			jQuery('#sucess-form').fadeIn('slow');
		});
            }
        });
        return false;
	} else {
	jQuery('#conf').show();
}
    });
       
    });

function checkInput(e) {
	var val = jQuery(e.target).val();
	var p = jQuery(e.target).parent('.input-block');
		if (val.length == 0) {
			jQuery(p).addClass('required-input');
			jQuery(p).find('.required').show();
		} else {
			jQuery(p).removeClass('required-input');
			jQuery(p).find('.required').hide();
		}
}