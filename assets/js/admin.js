jQuery(function ($) {
    'use strict';

    $('input[name="logo-setting"]').after(
        '<button id="logo-select-button">Select Image</button>'
    )

    $('#logo-select-button').click(function (event) {
        event.preventDefault()
    })
})
