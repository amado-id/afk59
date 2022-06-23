$(document).ready(function () {
    var width = $(window).width();
    if(width > 992)
    {
        $(".slides li").each(function () {
            var srcFull = $(this).data("full");
            $(this).css("background-image", "url("+srcFull+")");
        });
    }
    else if(width >= 768 && width < 991)
    {
        $(".slides li").each(function () {
            var src780 = $(this).data("780");
            $(this).css("background-image", "url("+src780+")");
        });
    }
    else if(width < 768)
    {
        $(".slides li").each(function () {
            var src320 = $(this).data("320");
            $(this).css("background-image", "url("+src320+")");
        });
    }
    $(".flexslider").flexslider();
});

$(window).resize(function () {
    var width = $(window).width();
    if(width > 992)
    {
        $(".slides li").each(function () {
            var srcFull = $(this).data("full");
            $(this).css("background-image", "url("+srcFull+")");
        });
    }
    else if(width >= 768 && width < 991)
    {
        $(".slides li").each(function () {
            var src780 = $(this).data("780");
            $(this).css("background-image", "url("+src780+")");
        });
    }
    else if(width < 768)
    {
        $(".slides li").each(function () {
            var src320 = $(this).data("320");
            $(this).css("background-image", "url("+src320+")");
        });
    }
    $(".flexslider").flexslider();
});