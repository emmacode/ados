$(document).ready(function () {
    //Change color on scroll
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() >= 100);
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
    //CHECKBOX SCRIPT
    $(".checkbox-option").on("click", function () {
        $(this).toggleClass("checked");
        var a = $(this).find("input");
        a.prop("checked") === !1 ?
            a.prop("checked", !0) : a.prop
                ("checked", !1)
    });
    //RADIO BUTTON SCRIPT
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

    //ORDER VALIDATION
    $('.submit').click(function (event) {
        var name = $('.name').val();
        var phone = $('.phone').val();
        var link = $('.link').val();
        var message = $('.message').val();
        var statusElm = $('.status')
        statusElm.empty()
        if (name == "") {
            event.preventDefault()
            statusElm.append('<li>Name: Please input your name.</li>');
        }
        if (phone == "") {
            event.preventDefault()
            statusElm.append('<li>Phone: Please input your phone number.</li>');
        } else if (phone.length < 11) {
            event.preventDefault()
            statusElm.append('<li>Phone: Phone is not valid.</li>');
        }
        if (link == "") {
            event.preventDefault()
            statusElm.append('<li>Link: Please get the link to the item you want to order.</li>');
        }
        if (message == "") {
            event.preventDefault()
            statusElm.append('<li>Message: Please fill the message box.</li>');
        }
        else if (message.length < 20) {
            event.preventDefault()
            statusElm.append('<li>Message: Minimum character is 20.Enter enough details to reach you.</li>');
        }
    })

});
//change logo image on scroll
// $(document).scroll(function () {
//     if ($(this).scrollTop() >= 100) {
//         $('.navbar-brand').html(
//             "<img src='images/Ados-e 3.png'>")
//     } else {
//         $('.navbar-brand').html(
//             "<img src='images/Ados-e-4.png'>");
//     }
// });

//Contact-Us form validation
//get input value
var username = document.forms["vform"]["username"];
var phone = document.forms["vform"]["phone"];
var email = document.forms["vform"]["email"];
var message = document.forms["vform"]["message"];
//get error display value
var name_error = document.getElementById('name_error');
var phone_error = document.getElementById('phone_error');
var email_error = document.getElementById('email_error');
var message_error = document.getElementById('message_error');
//setting all event listeners
username.addEventListener('blur', nameVerify, true);
phone.addEventListener('blur', phoneVerify, true);
email.addEventListener('blur', emailVerify, true);
message.addEventListener('blur', messageVerify, true);
//validation function
function Validate() {
    //name validation
    if (username.value == "") {
        username.style.border = "1px solid red";
        name_error.textContent = "Name is required";
        username.focus();
        return false;
    }
    //phone validation
    if (phone.value == "") {
        phone.style.border = "1px solid red";
        phone_error.textContent = "Phone not valid";
        phone.focus();
        return false;
    }
    //email validation
    if (email.value == "") {
        email.style.border = "1px solid red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
    }
    //message validation
    if (message.value == "") {
        message.style.border = "1px solid red";
        message_error.textContent = "Please write your complain";
        message.focus();
        return false;
    }
}
//event handler
function nameVerify() {
    if (username.value != "") {
        username.style.border = "1px solid #5E6E66;";
        name_error.innerHTML = "";
        return true;
    }
}
function phoneVerify() {
    if (phone.value != "") {
        phone.style.border = "1px solid #5E6E66;";
        phone_error.innerHTML = "";
        return true;
    }
}
function emailVerify() {
    if (email.value != "") {
        email.style.border = "1px solid #5E6E66;";
        email_error.innerHTML = "";
        return true;
    }
}
function messageVerify() {
    if (message.value != "") {
        message.style.border = "1px solid #5E6E66;";
        message_error.innerHTML = "";
        return true;
    }
}
