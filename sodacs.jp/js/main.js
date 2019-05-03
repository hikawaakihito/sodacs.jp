$(function () {
    $(".trigger").click(function () {
        $(this).toggleClass("active");
        $("header nav").toggleClass("onAnimation");
    });

    $("header nav li").click(function () {
        $('.trigger').removeClass("active");
        $("header nav").toggleClass("onAnimation");
    });

});