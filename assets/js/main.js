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

    // Search
    var $searchicon = $('.header-search .icon-search'),
    $searchfield = $('.header-search input');

    $searchfield.blur(function(){
        $searchicon.removeClass('focus');
    });
    $searchfield.focus(function() {        
        $searchicon.addClass('focus');
    });

});
