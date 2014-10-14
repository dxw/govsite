jQuery(function ($) {
    'use strict';

    $(document).foundation();

    // Toggle navigation
    var $menu = $('#headermenu'),
    $menulink = $('.nav-toggle');

    $menulink.click(function() {
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        return false;
    });

});
