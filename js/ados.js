$(document).ready(function () {
    //Change color on scroll
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
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
});
//automatic typing
var string = "Welcome to Ados local store.";
var str = string.split("");
var el = document.getElementById('str');
(function animate() {
    str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
    var running = setTimeout(animate, 90);
})();