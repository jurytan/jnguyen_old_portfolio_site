/**
 * Theme Customizer custom scripts
 * Control of show/hide events for Customizer
 */
(function($) {

    //Message if WordPress version is less tham 4.0
    if (parseInt(catchresponsive_misc_links.WP_version) < 4) {
        $('.preview-notice').prepend('<span style="font-weight:bold;">' + catchresponsive_misc_links.old_version_message + '</span>');
        jQuery('#customize-info .btn-upgrade, .misc_links').click(function(event) {
            event.stopPropagation();
        });
    }

    //Add Upgrade Button,Theme instruction, Support Forum, Changelog, Donate link, Review, Facebook, Twitter, Google+, Pinterest links
    $('.preview-notice').prepend('<span id="catchresponsive_upgrade"><a target="_blank" class="button btn-upgrade" href="' + catchresponsive_misc_links.upgrade_link + '">' + catchresponsive_misc_links.upgrade_text + '</a></span>');
    jQuery('#customize-info .btn-upgrade, .misc_links').click(function(event) {
        event.stopPropagation();
    });
})(jQuery);


/**
 * Add a listener to the Color Scheme control to update other color controls to new values/defaults.
 */
( function( api ) {
    api.controlConstructor.radio = api.Control.extend( {
        ready: function() {
            if ( 'catchresponsive_theme_options[color_scheme]' === this.id ) {
                this.setting.bind( 'change', function( color_scheme ) {
                    jQuery.each( catchresponsive_misc_links.color_list, function( index, value ) {
                        if ( 'light' == color_scheme ) {
                            api( index ).set( value.light );
                            api.control( index ).container.find( '.color-picker-hex' )
                            .data( 'data-default-color', value.light )
                            .wpColorPicker( 'defaultColor', value.light );
                        }
                        else if ( 'dark' == color_scheme ) {
                            api( index ).set( value.dark );
                            api.control( index ).container.find( '.color-picker-hex' )
                            .data( 'data-default-color', value.dark )
                            .wpColorPicker( 'defaultColor', value.dark );
                        }
                    });

                    //Change value of Mobile Menu Color Scheme on change of color Scneme
                    jQuery('input[name="_customize-radio-catchresponsive_theme_options[mobile_menu_color_scheme]"][value="' + color_scheme + '"]').prop('checked', true);
                });
            }
        }
    });
} )( wp.customize );
