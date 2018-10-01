$(function() {
    $('.page-sidebar-menu .nav-item > a').each(function() {
    	var href = window.location.href.replace(/\?.*/g, "");
        if ($(this).attr('href') == href ||
            ((href.indexOf($(this).attr('href') + '/') > -1) && !$(this).parent().hasClass('start'))) {
            $(this).parent().addClass('open active');
            $(this).append('<span class="selected"></span>');
            $(this).parent().parents('.nav-item').addClass('open active');
        }

    });
});