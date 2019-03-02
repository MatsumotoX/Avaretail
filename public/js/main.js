function submitForm() {
    var a = $("#name").val(),
        e = $("#email").val(),
        o = $("#msg_subject").val(),
        t = $("#message").val();
    $.ajax({
        type: "POST",
        url: "php/contact.php",
        data: "name=" + a + "&email=" + e + "&msg_subject=" + o + "&message=" + t,
        success: function (a) {
            "success" == a ? formSuccess() : (formError(), submitMSG(!1, a))
        }
    })
}

$("#mce-EMAIL, #mce-FNAME, #mce-LNAME, #mce-MMERGE4").on("keyup", function() {
    var email = document.getElementById('mce-EMAIL').value;
    var fname = document.getElementById('mce-FNAME').value;
    var lname = document.getElementById('mce-LNAME').value;
    var country = document.getElementById('mce-MMERGE4').value;
    if(email === "" || fname === "" || lname === "" || country === "") {
        var btn = document.getElementById('mc-embedded-subscribe');
        var att = document.createAttribute("disabled");
        att.value = "disabled"; 
        btn.setAttributeNode(att); 
    } else {
        document.getElementById('mc-embedded-subscribe').removeAttribute('disabled');
    }
  });

function formSuccess() {
    $("#contactForm")[0].reset(), submitMSG(!0, "Message Submitted!")
}

function formError() {
    $("#contactForm").removeClass().addClass("shake animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
        $(this).removeClass()
    })
}

function submitMSG(a, e) {
    if (a) var o = "h4 text-success";
    else o = "h4 text-danger";
    $("#msgSubmit").removeClass().addClass(o).text(e)
}

function scrollToID(a, e) {
    var o = $(a).offset().top - 69;
    $("html,body").animate({
        scrollTop: o
    }, e)
}

function triggerReveals() {
    sr.reveal(".scaleReveal", {
        origin: "top",
        scale: 1
    })
}
$("#thework").mixItUp({
    animation: {
        duration: 1e3
    }
}), $("#theworks").mixItUp({
    animation: {
        duration: 1e3
    }
}), $(".process-box").hover(function () {
    $(this).find(".process-intro").hide(), $(this).find(".process-content").fadeIn()
}, function () {
    $(this).find(".process-content").hide(), $(this).find(".process-intro").fadeIn()
}), $("#contactForm").validator().on("submit", function (a) {
    a.isDefaultPrevented() ? (formError(), submitMSG(!1, "Did you fill in the form properly?")) : (a.preventDefault(), submitForm())
}), $("#work").magnificPopup({
    delegate: "a.zoom",
    type: "image",
    fixedContentPos: !1,
    removalDelay: 300,
    mainClass: "mfp-fade",
    gallery: {
        enabled: !0,
        preload: [0, 2]
    }
}), $(".popup-img").magnificPopup({
    type: "image",
    removalDelay: 300,
    mainClass: "mfp-fade"
}), $(document).ready(function () {
    $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    })
}), $(document).ready(function () {
    $(".scroll-link").on("click", function (a) {
        a.preventDefault(), scrollToID("#" + $(this).attr("data-id"), 750)
    }), $(".scroll-top").on("click", function (a) {
        a.preventDefault(), $(window).scrollTop(0, 1200)
    })
}), "undefined" == typeof sr && (window.sr = ScrollReveal({
    duration: 800,
    delay: 25
})), Royal_Preloader.config({
    onComplete: function () {
        triggerReveals()
    }
}), sr.reveal(".bottomReveal", {
    origin: "bottom"
}).reveal(".leftReveal", {
    origin: "left"
}).reveal(".rightReveal", {
    origin: "right"
}).reveal(".topReveal", {
    origin: "top"
}), $(document).on("click", ".navbar-collapse.in", function (a) {
    $(a.target).is("a") && "dropdown-toggle" != $(a.target).attr("class") && $(this).collapse("hide")
});
var current = 1,
    height = jQuery(".ticker").height(),
    numberDivs = jQuery(".ticker").children().length,
    first = jQuery(".ticker h1:nth-child(1)");
setInterval(function () {
    var a = current * -height;
    first.css("margin-top", a + "px"), current === numberDivs ? (first.css("margin-top", "0px"), current = 1) : current++
}, 2500), $(window).scroll(function () {
    $(window).scrollTop() >= 5 ? ($(".navbar-default").css({
        background: "#fff",
        padding: "0"
    }), $(".navbar-default .navbar-nav>li>a").css("color", "#000"), $(".navbar-brand-mat>img").attr("src", "https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token.png"), $(".navbar-default .navbar-toggle .icon-bar").css("background-color", "#3498db"), $(".navbar-shadow").css("box-shadow", "3px 3px 3px 0 rgba(0, 0, 0, 0.05)")) : ($(".navbar-default, .navbar-default .navbar-nav>li>a").removeAttr("style"), $(".navbar-brand-mat>img").attr("src", "https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token3.png"), $(".navbar-default .navbar-toggle .icon-bar").css("background-color", "#fff"), $(".navbar-shadow").css("box-shadow", "none"))
}), $('button[data-target="#navbar-top-toggle"]').on("click", function () {
    $(".navbar.navbar-default").toggleClass("bg-navbar-toggle")
}), $("#myModal").on("shown.bs.modal", function () {
    $("#myInput").focus()
});