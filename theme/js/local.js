function funOpenMenu() {
    $(".l-nav").addClass("l-visible");
    $("body").addClass("l-no-scroll");
}

function funCloseMenu() {
    $(".l-nav").removeClass("l-visible");
    $("body").removeClass("l-no-scroll");
}

function funOpenSubMenu(varElement) {
    $(varElement).parent("li").toggleClass("l-open");
}
$('#myCarousel').carousel({
    interval: 4000
});

$('.carousel .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {

        next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

    }
    else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

    }
});
$(document).ready(function () {
    $(".l-menu-btn a ").on("click", function () {
        funOpenMenu();
    });
    $(".l-nav .l-close a").on("click", function () {
        funCloseMenu();
    });

//    $(".l-nav .l-dropdown a").on("click", function () {
//        funOpenSubMenu(this);
//    });
    $(".l-nav .l-dropdown a").on("hover", function () {
        funOpenSubMenu(this);
    });


});

$(document).ready(function () {
    $("[datatype='num']").select().keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }

                var res = (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105);

                if (res == false)
                {
                    e.preventDefault();
                }

            });
});

$(document).ready(function () {
    $("[datatype='alpha']").select().keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                var res = (e.keyCode >= 65 && e.keyCode <= 90) || e.keyCode==32;

                if (res == false)
                {
                    e.preventDefault();
                }
            });
});

$(document).ready(function () {
    $("[datatype='alphanum']").select().keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }

                var res = (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode == 88 || (e.keyCode >= 65 && e.keyCode <= 90) || e.keyCode!=32;

                if (res == false)
                {
                    e.preventDefault();
                }

            });
});
//$(document).ready(function () {
// $(".example").smartmarquee({
//
//  // animate duration
//  duration: 1000,  
//  // auto loop
//  loop : true,     
//  // interval duration
//  interval : 2000,
//  // 'vertical' or 'horizontal'
//  axis : "vertical",
//  });
//});
