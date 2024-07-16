/*-----------------------------------------------------------------------------------

    Template Name: Ibadah - Islamic Center & Mosque HTML Template

    Note: This is Custom Js file
  
-----------------------------------------------------------------------------------*/

function animateElements() {
    $(".progressbar").each(function() {
        var e = $(this).offset().top,
            t = $(window).scrollTop(),
            n = $(this).find(".circle").attr("data-percent");
        parseInt(n, 10), parseInt(100, 10);
        var a = $(this).data("animate");
        e < t + $(window).height() - 10 && !a && ($(this).data("animate", !0), $(this).find(".circle").circleProgress({
            startAngle: -Math.PI / 2,
            value: n / 100,
            size: 140,
            thickness: 8,
            emptyFill: "rgba(255,255,255, 0)",
            fill: {
                color: "#fbc50b"
            }
        }).on("circle-animation-progress", function(e, t, n) {
            $(this).find("div").text((100 * n).toFixed() + "%")
        }).stop())
    })
}

function inVisible(e) {
    var t = $(window).scrollTop(),
        n = t + $(window).height(),
        a = e.offset().top;
    a + e.height() <= n && a >= t && animate(e)
}

function animate(e) {
    if (!e.hasClass("ms-animated")) {
        var t = e.data("max"),
            n = e.html();
        e.addClass("ms-animated"), $({
            countNum: e.html()
        }).animate({
            countNum: t
        }, {
            duration: 5e3,
            easing: "linear",
            step: function() {
                e.html(Math.floor(this.countNum) + n)
            },
            complete: function() {
                e.html(this.countNum + n)
            }
        })
    }
}

function inVisible(e) {
    var t = $(window).scrollTop(),
        n = t + $(window).height(),
        a = e.offset().top;
    a + e.height() <= n && a >= t && animate(e)
}

function animate(e) {
    if (!e.hasClass("ms-animated")) {
        var t = e.data("max"),
            n = e.html();
        e.addClass("ms-animated"), $({
            countNum: e.html()
        }).animate({
            countNum: t
        }, {
            duration: 5e3,
            easing: "linear",
            step: function() {
                e.html(Math.floor(this.countNum) + n)
            },
            complete: function() {
                e.html(this.countNum + n)
            }
        })
    }
}
jQuery(document).ready(function(e) {
    e.isFunction(e.fn.owlCarousel) && (e(".slider-home-1").owlCarousel({
        loop: !0,
        arrows: !1,
        autoplay: !0,
        autoplayTimeout: 4e3,
        items: 1
    }), e(".slider-ayat").owlCarousel({
        loop: !0,
        arrows: !1,
        autoplay: !0,
        autoplayTimeout: 4e3,
        items: 1
    }), e(".pdf-slider").owlCarousel({
        loop: !0,
        dot: !0,
        nav: !1,
        autoplay: !0,
        autoplayTimeout: 3e3,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    }), e(".audio-ayat").owlCarousel({
        loop: !0,
        nav: !0,
        autoplay: !0,
        navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    })), jQuery(".mobile-nav .menu-item-has-children").on("click", function(e) {
        jQuery(this).hasClass("active") ? jQuery(this).removeClass("active") : (jQuery(".mobile-nav .menu-item-has-children").removeClass("active"), jQuery(this).addClass("active"))
    }), jQuery("#nav-icon4").click(function(e) {
        jQuery("#mobile-nav").toggleClass("open")
    }), jQuery("#res-cross").click(function(e) {
        jQuery("#mobile-nav").removeClass("open")
    }), jQuery(".bar-menu").click(function(e) {
        jQuery("#mobile-nav").toggleClass("open"), jQuery("#mobile-nav").toggleClass("hmburger-menu"), jQuery("#mobile-nav").show()
    }), jQuery("#res-cross").click(function(e) {
        jQuery("#mobile-nav").removeClass("open")
    })
}), jQuery(".search-box-outer").length && (jQuery(".search-box-outer").on("click", function() {
    jQuery("body").addClass("search-active")
}), jQuery(".close-search").on("click", function() {
    jQuery("body").removeClass("search-active")
})), animateElements(), $(window).scroll(animateElements), $(function() {
    $(window).scroll(function() {
        $("h2[data-max]").each(function() {
            inVisible($(this))
        })
    })
}), jQuery("#days").length && function() {
    let e = 36e5,
        t = 24 * e,
        n = new Date,
        a = String(n.getDate()).padStart(2, "0"),
        o = String(n.getMonth() + 1).padStart(2, "0"),
        i = n.getFullYear(),
        l = "7/21/",
        s = l + i;
    (n = o + "/" + a + "/" + i) > s && (s = l + (i + 1));
    let c = new Date(s).getTime(),
        r = setInterval(function() {
            let n = new Date().getTime(),
                a = c - n;
            document.getElementById("days").innerText = Math.floor(a / t), document.getElementById("hours").innerText = Math.floor(a % t / e), document.getElementById("minutes").innerText = Math.floor(a % e / 6e4), document.getElementById("seconds").innerText = Math.floor(a % 6e4 / 1e3), a < 0 && (document.getElementById("headline").innerText = "event", document.getElementById("countdown").style.display = "none", document.getElementById("content").style.display = "block", clearInterval(r))
        }, 0)
}(), jQuery(".accordion-item .heading").on("click", function(e) {
    e.preventDefault(), jQuery(this).closest(".accordion-item").hasClass("active") ? jQuery(".accordion-item").removeClass("active") : (jQuery(".accordion-item").removeClass("active"), jQuery(this).closest(".accordion-item").addClass("active"));
    var t = $(this).next();
    t.slideToggle(600), jQuery(".accordion-item .content").not(t).slideUp("fast")
}), $(function() {
    $(window).scroll(function() {
        $("h2[data-max]").each(function() {
            inVisible($(this))
        })
    })
});
let calcScrollValue = () => {
    let e = document.getElementById("progress");
    document.getElementById("progress-value");
    let t = document.documentElement.scrollTop,
        n = Math.round(100 * t / (document.documentElement.scrollHeight - document.documentElement.clientHeight));
    t > 100 ? e.style.display = "grid" : e.style.display = "none", e.addEventListener("click", () => {
        document.documentElement.scrollTop = 0
    }), e.style.background = `conic-gradient(#007d3a ${n}%, #fff ${n}%)`
};
window.onscroll = calcScrollValue, window.onload = calcScrollValue;