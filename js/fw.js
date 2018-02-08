//Custom js that works after unyson fw load

jQuery(document).on('change', '.homepage_version', function () {
    jQuery(this).val()=='slide' ? jQuery('.slide_delay_box').removeClass('hidden') :  jQuery('.slide_delay_box').addClass('hidden');
    jQuery(this).val()=='video' ? jQuery('.video_options_box').removeClass('hidden') : jQuery('.video_options_box').addClass('hidden');
})
