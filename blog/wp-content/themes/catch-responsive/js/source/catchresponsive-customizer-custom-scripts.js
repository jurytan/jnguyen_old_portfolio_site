/**
 * Theme Customizer custom scripts
 * Control of show/hide events on feature slider type selection
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
    /*
     * For Featured Content on featured_content_type change event
     */
    $("#customize-control-catchresponsive_theme_options-featured_content_type label select").live( "change", function() {
        var value = $(this).val();

        if (value == 'demo-featured-content') {
            $('#customize-control-catchresponsive_theme_options-featured_content_number').hide();
            $('#customize-control-catchresponsive_theme_options-featured_content_headline').hide();
            $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').hide();
        } else {
            $('#customize-control-catchresponsive_theme_options-featured_content_number').show();
            $('#customize-control-catchresponsive_theme_options-featured_content_headline').show();
            $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').show();
        }

        if (value == 'featured-page-content') {
            $('[id*=customize-control-catchresponsive_featured_content_page]').show();
        } else {
            $('[id*=customize-control-catchresponsive_featured_content_page]').hide();
        }
    });

    /**
     * Control of show/hide events on feature content type selection on panel click if prevously value has been saved
     */
    $('#accordion-panel-catchresponsive_featured_content_options .accordion-section-title').live( "click", function() {
        var value = $("#customize-control-catchresponsive_theme_options-featured_content_type label select").val();
        if (value == 'demo-featured-content') {
            $('#customize-control-catchresponsive_theme_options-featured_content_number').hide();
            $('#customize-control-catchresponsive_theme_options-featured_content_headline').hide();
            $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').hide();
        } else {
            $('#customize-control-catchresponsive_theme_options-featured_content_number').show();
            $('#customize-control-catchresponsive_theme_options-featured_content_headline').show();
            $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').show();
        }

        if (value == 'featured-page-content') {
            $('[id*=customize-control-catchresponsive_featured_content_page]').show();
        } else {
            $('[id*=customize-control-catchresponsive_featured_content_page]').hide();
        }
    });

    /**
     * Control of show/hide events on feature content type selection on page load if prevously value has been saved
     * For WordPress versions less than 4.0
     */
    var catchresponsive_featured_content_layout_value = $("#customize-control-catchresponsive_theme_options-featured_content_type label select").val();

    if (catchresponsive_featured_content_layout_value == 'demo-content') {
        $('#customize-control-catchresponsive_theme_options-featured_content_number').hide();
        $('#customize-control-catchresponsive_theme_options-featured_content_headline').hide();
        $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').hide();
    } else {
        $('#customize-control-catchresponsive_theme_options-featured_content_number').show();
        $('#customize-control-catchresponsive_theme_options-featured_content_headline').show();
        $('#customize-control-catchresponsive_theme_options-featured_content_subheadline').show();
    }

    if (catchresponsive_featured_content_layout_value == 'featured-page-content') {
        $('[id*=customize-control-catchresponsive_featured_content_page]').show();
    } else {
        $('[id*=customize-control-catchresponsive_featured_content_page]').hide();
    }


    /*
     * For Feature Slider on featured_slider_type change event
     */

    $('#accordion-panel-catchresponsive_featured_slider .accordion-section-title').live( "click", function() {
        var value = $("#customize-control-catchresponsive_featured_slider_type label select").val();

        if (value == 'demo-featured-slider') {
            $('#customize-control-catchresponsive_featured_slide_number').hide();
        } else {
            $('#customize-control-catchresponsive_featured_slide_number').show();
        }

        if (value == 'featured-page-slider') {
            $('[id*=customize-control-catchresponsive_featured_slider_page]').show();
        } else {
            $('[id*=customize-control-catchresponsive_featured_slider_page]').hide();
        }
    });

    $("#customize-control-catchresponsive_featured_slider_type label select").live( "change", function() {
        var value = $(this).val();

        if (value == 'demo-featured-slider') {
            $('#customize-control-catchresponsive_featured_slide_number').hide();
        } else {
            $('#customize-control-catchresponsive_featured_slide_number').show();
        }

        if (value == 'featured-page-slider') {
            $('[id*=customize-control-catchresponsive_featured_slider_page]').show();
        } else {
            $('[id*=customize-control-catchresponsive_featured_slider_page]').hide();
        }
    });


    /**
     * Control of show/hide events on feature slider type selection on page load if prevously value has been saved
     * For WordPress versions less than 4.0
     */
    var catchresponsive_featured_slider_layout_value = $("#customize-control-catchresponsive_featured_slider_type label select").val();

    if (catchresponsive_featured_slider_layout_value == 'demo-featured-slider') {
        $('#customize-control-catchresponsive_featured_slide_number').hide();
    } else {
        $('#customize-control-catchresponsive_featured_slide_number').show();
    }

    if (catchresponsive_featured_slider_layout_value == 'featured-page-slider') {
        $('[id*=customize-control-catchresponsive_featured_slider_page]').show();
    } else {
        $('[id*=customize-control-catchresponsive_featured_slider_page]').hide();
    }

     $("#customize-control-catchresponsive_theme_options-color_scheme").live( "change", function() {
        //var name = $('#customize-control-catchresponsive_theme_options-color_scheme input').attr('name');
        var value = $('#customize-control-catchresponsive_theme_options-color_scheme input:checked').val();
        if ( 'dark' == value ){
            $('#customize-control-header_textcolor .color-picker-hex').iris('color', '#dddddd');

            $('#customize-control-background_color .color-picker-hex').iris('color', '#333333');
        
        }
        else {
            $('#customize-control-header_textcolor .color-picker-hex').iris('color', '#111111');

            $('#customize-control-background_color .color-picker-hex').iris('color', '#f9f9f9');
        }
    });
     
})(jQuery);