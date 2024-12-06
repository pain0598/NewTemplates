$(function () {
    "use strict";


    $(".sidebar-nav-link").on("click", function (e) {
        var subMenu = $(this).next();

        $(this).parent().siblings().find(".sidebar-nav-sub").slideUp();
        $(".sub-with-sub ul").slideUp();

        if (subMenu.length) {
            e.preventDefault();
            subMenu.slideToggle();
        }
    });


    $(".sub-with-sub .nav-sub-link").on("click", function (e) {
        e.preventDefault();
        $(this).parent().siblings().find("ul").slideUp();
        $(this).next().slideDown();
    });

    $("#slimSidebarMenu").on("click", function (e) {
        e.preventDefault();
        if (window.matchMedia("(min-width: 1200px)").matches) {
            $("body").toggleClass("hide-sidebar");
        } else {
            $("body").toggleClass("show-sidebar");
        }
    });

    if ($.fn.perfectScrollbar) {
        $(".slim-sidebar").perfectScrollbar({
            suppressScrollX: true,
        });
    }

    /////////////////// START: TEMPLATE SETTINGS /////////////////////
    var loc = window.location.pathname;
    var path = loc.split("/");
    var newloc = "";

    // inject additional link tag for header skin
    $("head").append('<link id="headerSkin" rel="stylesheet" href="">');

    // inject template options content
    // $.get("../settings.html", function (data) {
    //     $("body").append(data);

    //     if ($.fn.perfectScrollbar) {
    //         $(".template-options-inner").perfectScrollbar({
    //             suppressScrollX: true,
    //         });
    //     }

    //     // set direction value in settings
    //     if (isRtl) {
    //         $('.slim-direction[value="rtl"]').prop("checked", true);
    //     } else {
    //         $('.slim-direction[value="ltr"]').prop("checked", true);
    //     }

    //     if (isSidebar) {
    //         $('.nav-layout[value="vertical"]').prop("checked", true);
    //     } else {
    //         $('.nav-layout[value="horizontal"]').prop("checked", true);
    //     }

    //     //check if header set to sticky
    //     if ($.cookie("sticky-header")) {
    //         $("body").addClass("slim-sticky-header");
    //         $('.sticky-header[value="yes"]').prop("checked", true);
    //     } else {
    //         $('.sticky-header[value="no"]').prop("checked", true);
    //     }

    //     //check if header have skin
    //     if ($.cookie("header-skin")) {
    //         var sk = $.cookie("header-skin");
    //         $("body").addClass(sk);
    //         $("#headerSkin").attr("href", "../css/slim." + sk + ".css");
    //         $('.header-skin[value="' + sk + '"]').prop("checked", true);
    //     } else {
    //         $('.header-skin[value="default"]').prop("checked", true);
    //     }

    //     //check if page set to wide
    //     if ($.cookie("full-width")) {
    //         $("body").addClass("slim-full-width");
    //         $('.full-width[value="yes"]').prop("checked", true);
    //     } else {
    //         $('.full-width[value="no"]').prop("checked", true);
    //     }

    //     //check if sidebar set to sticky
    //     if ($.cookie("sticky-sidebar") && $(".slim-sidebar").length) {
    //         $("body").addClass("slim-sticky-sidebar");
    //         $('.sticky-sidebar[value="yes"]').prop("checked", true);
    //     } else {
    //         $('.sticky-sidebar[value="no"]').prop("checked", true);
    //     }
    // });

    // show/hide template options panel
    $("body").on("click", ".template-options-btn", function (e) {
        e.preventDefault();
        $(".template-options-wrapper").toggleClass("show");
    });


    // toggles header to sticky
    $("body").on("click", ".sticky-header", function () {
        var val = $(this).val();
        if (val === "yes") {
            $.cookie("sticky-header", "true");
            $("body").addClass("slim-sticky-header");
        } else {
            $.removeCookie("sticky-header");
            $("body").removeClass("slim-sticky-header");
        }
    });

    // toggles sidebar to sticky
    $("body").on("click", ".sticky-sidebar", function () {
        if ($(".slim-sidebar").length) {
            var val = $(this).val();
            if (val === "yes") {
                $.cookie("sticky-sidebar", "true");
                $("body").addClass("slim-sticky-sidebar");
            } else {
                $.removeCookie("sticky-sidebar");
                $("body").removeClass("slim-sticky-sidebar");
            }
        } else {
            alert("Can only be used when navigation is set to vertical");
            $('.sticky-sidebar[value="no"]').prop("checked", true);
        }
    });

    // set skin to header
    $("body").on("click", ".header-skin", function () {
        var val = $(this).val();
        if (val !== "default") {
            $.cookie("header-skin", val);
            $("#headerSkin").attr("href", "../css/slim." + val + ".css");
        } else {
            $.removeCookie("header-skin");
            $("#headerSkin").attr("href", "");
        }
    });

    // set page to wide
    $("body").on("click", ".full-width", function () {
        var val = $(this).val();
        if (val === "yes") {
            $.cookie("full-width", "true");
            $("body").addClass("slim-full-width");
        } else {
            $.removeCookie("full-width");
            $("body").removeClass("slim-full-width");
        }
    });

    /////////////////// END: TEMPLATE SETTINGS /////////////////////
});
