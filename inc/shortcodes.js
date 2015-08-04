jQuery(document).ready(function(){

	/* Toggle */
	jQuery('.wpvkp-shortcode-toggle-active').each(function() {
		jQuery(this).find('.toggle-content').show();
	});
	jQuery('.toggle-heading').click(function() {
		var toggle = jQuery(this).parent('.wpvkp-shortcode-toggle');
		if(jQuery(this).parent('.wpvkp-shortcode-toggle').parent('div').hasClass('wpvkp-shortcode-accordion')) {
			toggle.parent('div').find('.wpvkp-shortcode-toggle').find('.toggle-content:visible').slideUp();
			toggle.parent('div').find('.toggle-active').removeClass('toggle-active');
			toggle.toggleClass('toggle-active');
			toggle.find('.toggle-content').slideToggle(400);
		} else {
			toggle.toggleClass('toggle-active');
			toggle.find('.toggle-content').slideToggle(400);
		}
	});

	/* Tabs */
	jQuery('.wpvkp-shortcode-tabs').each(function() {

		jQuery(this).prepend('<div class="wpvkp-shortcode-tab-buttons"></div>');
		jQuery(this).find('.wpvkp-shortcode-tabpane').each(function() {

			jQuery(this).parent('.wpvkp-shortcode-tabs').find('.wpvkp-shortcode-tab-buttons').append('<a href="#">'+jQuery(this).find('.wpvkp-shortcode-tab-label').text()+'</a>');
			jQuery(this).find('.wpvkp-shortcode-tab-label').remove();

		});

		jQuery(this).find('.wpvkp-shortcode-tab-buttons').find('a:first').addClass('active');
		jQuery(this).find('.wpvkp-shortcode-tabpane').hide();
		jQuery(this).find('.wpvkp-shortcode-tabpane:first').show();

	});

	var tab_to_show = 0;
	jQuery('.wpvkp-shortcode-tab-buttons a').live("click", function() {
		tab_to_show = jQuery(this).parent('.wpvkp-shortcode-tab-buttons').find('a').index(jQuery(this));
		jQuery(this).parent('.wpvkp-shortcode-tab-buttons').parent('.wpvkp-shortcode-tabs').find('.wpvkp-shortcode-tabpane').hide();
		jQuery(this).parent('.wpvkp-shortcode-tab-buttons').parent('.wpvkp-shortcode-tabs').find('.wpvkp-shortcode-tabpane').eq(tab_to_show).show();
		jQuery(this).parent('.wpvkp-shortcode-tab-buttons').find('a').removeClass('active');
		jQuery(this).parent('.wpvkp-shortcode-tab-buttons').find('a').eq(tab_to_show).addClass('active');
		return false;
	});
});
