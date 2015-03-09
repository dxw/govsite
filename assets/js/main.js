jQuery(function ($) {
    'use strict';

    $(document).foundation({
        topbar : {
        custom_back_text: false,
        mobile_show_parent_link: false
        }
    });

    // Make placeholder appear on IE
    $(function() {
        var input = document.createElement("input");
        if(('placeholder' in input) === false) {
          $('[placeholder]').focus(function() {
            var i = $(this);
            if(i.val() == i.attr('placeholder')) {
                i.val('').removeClass('placeholder');
                if(i.hasClass('password')) {
                    i.removeClass('password');
                    this.type='password';
                }
            }
          }).blur(function() {
            var i = $(this);
            if(i.val() === '' || i.val() == i.attr('placeholder')) {
                if(this.type=='password') {
                    i.addClass('password');
                    this.type='text';
                }
                i.addClass('placeholder').val(i.attr('placeholder'));
            }
          }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var i = $(this);
                if(i.val() == i.attr('placeholder')) {
                    i.val('');
                }
            });
          });
        }
    });

    // Toggle navigation
    var $menu = $('.top-bar'),
    $menulink = $('.nav-toggle');

    $menulink.click(function() {
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        return false;
    });

    // Search
    var $searchicon = $('.header-search .icon-search'),
    $searchfield = $('.header-search input');

    $searchfield.blur(function() {
        $searchicon.removeClass('focus');
    });
    $searchfield.focus(function() {        
        $searchicon.addClass('focus');
    });

    var $headersearch = $('#top-bar .button-search'),
    $searchbanner = $('.header-search');

    $headersearch.click(function() {
        $searchbanner.slideToggle('fast');
        $headersearch.toggleClass('opened');
    });

    // Scroll to commnets
    $('.comment-scroll').click(function(){
        $('html, body').animate({
            scrollTop: $("#comment-form").offset().top
        }, 1000);
    });

});
