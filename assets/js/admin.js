jQuery(function ($) {
    'use strict';

    $('input[name="logo-setting"]').after(
        '<button id="logo-select-button">Select Image</button>'
    )

    // $('#logo-select-button').click(function (event) {
    //     event.preventDefault()
    // })

    // Logo
    // http://wordpress.stackexchange.com/questions/172383/how-to-get-an-image-url-from-media-library/172384

    var frame

    // Build the choose from library frame.
    $(document).on("click", "#logo-select-button", function(event) {
        event.preventDefault()

        var id = $(this).attr('id')

        if ( frame ) {
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
            attachment = frame.state().get('selection').first().toJSON()
            $('[name="logo-setting"]').val(attachment.url)
        })

        frame.open()
    })

})
