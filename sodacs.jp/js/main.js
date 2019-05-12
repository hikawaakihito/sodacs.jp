$(function () {
    $(".trigger").click(function () {
        $(this).toggleClass("active");
        $("header nav").toggleClass("onAnimation");
    });

    $("header nav li").click(function () {
        $('.trigger').removeClass("active");
        $("header nav").removeClass("onAnimation");
    });

    $("section").click(function () {
        $('.trigger').removeClass("active");
        $("header nav").removeClass("onAnimation");
    });

    $("aside").click(function () {
        $('.trigger').removeClass("active");
        $("header nav").removeClass("onAnimation");
    });

    $("footer").click(function () {
        $('.trigger').removeClass("active");
        $("header nav").removeClass("onAnimation");
    });

});