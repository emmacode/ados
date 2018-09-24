$(document).ready(function () {
    //Change color on scroll
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() >= 500);
    });

    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
    //tabs script
    $(".tabbed-content").each(function () {
        $(this).append(
            '<ul class="content"></ul>')
    }),
        $(".tabs li").each(function () {
            var a = $(this), b = ""; a.is
                (".tabs>li:first-child") &&
                (b = ' class="active"');
            var c = a.find
                (".tab-content").detach()
                .wrap("<li" + b + "></li>")
                .parent(); a.closest
                    (".tabbed-content").find
                    (".content").append(c)
        }),
        $(".tabs li").click(function () {
            $(this).closest(".tabs").find
                ("li").removeClass("active"),
                $(this).addClass("active");
            var a = $(this).index() + 1;
            $(this).closest
                (".tabbed-content").find
                (".content>li").removeClass
                ("active"), $(this).closest
                    (".tabbed-content").find
                    (".content>li:nth-of-type(" + a + ")").addClass("active")
        })
    $(".checkbox-option").on("click", function () {
        $(this).toggleClass("checked");
        var a = $(this).find("input");
        a.prop("checked") === !1 ?
            a.prop("checked", !0) : a.prop
                ("checked", !1)
    });

    $(".radio-option").click(function () {
        var a = $(this).hasClass
            ("checked"), b = $(this).find
                ("input").attr("name"); a || (
                    $('input[name="' + b + '"]')
                        .parent().removeClass
                        ("checked"),
                    $(this).addClass("checked"),
                    $(this).find("input").prop
                        ("checked", !0))
    });
});
//change logo image on scroll
$(document).scroll(function () {
    if ($(this).scrollTop() >= 500) {
        $('.navbar-brand').html(
            "<img src='images/Ados-e 3.png'>")
    } else {
        $('.navbar-brand').html(
            "<img src='images/Ados-e 4.png'>");
    }
});