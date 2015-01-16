jQuery(function ($) {
    'use strict';

    // Logo

    var logoSetting = $('input[name="logo-setting"]')
        
    logoSetting.after('<button id="logo-select-button">Select Image</button>')

    logoSetting.addClass('hidden')

    // http://wordpress.stackexchange.com/questions/172383/how-to-get-an-image-url-from-media-library/172384

    var frame

    // Build the choose from library frame.
    $(document).on("click", "#logo-select-button", function(event) {
        event.preventDefault()

        var id = $(this).attr('id')

        if (frame) {
            frame.open()
            return
        }

        // Create the media frame.
        frame = wp.media.frames.meta_image_frame = wp.media({
            // Tell the modal to show only images.
            library: {
                type: 'image'
            },
        })

        // When an image is selected, run a callback.
        frame.on( 'select', function() {
            // Grab the selected attachment.
            var attachment = frame.state().get('selection').first().toJSON()
            logoSetting.val(attachment.url)
        })

        frame.open()
    })

})
