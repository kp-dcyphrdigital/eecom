// Header Javascript
    $(document).ready(function() {
    // Search Bar
    $(".header-container .search-header--popup").click(function(){
        $("#header-search--popup").show();
    });

    $("#header-search--popup .close").click(function(){
        $("#header-search--popup").hide();
    });
    // Menu Javascript
    function t() {
        $(".cd-nav-trigger").removeClass("nav-is-visible");
        $(".cd-main-header").removeClass("nav-is-visible");
        $(".cd-primary-nav").removeClass("nav-is-visible");
        $(".has-children ul").addClass("is-hidden");
        $(".has-children a").removeClass("selected");
        $(".moves-out").removeClass("moves-out");
        $(".cd-main-content").removeClass("nav-is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
            $("body").removeClass("overflow-hidden")
        })
    }
    function u() {
        var n = window,
            t = "inner";
        return "innerWidth" in window || (t = "client", n = document.documentElement || document.body), n[t + "Width"] >= f ? !0 : !1
    }
    function i() {
        var n = $(".cd-nav"),
            t = u();
        t ? (n.detach(), n.insertBefore(".cd-header-buttons")) : (n.detach(), n.insertAfter(".cd-main-content"))
    }
    function r() {
        $(".has-children, .top_level").removeClass("category-is-selected")
    }
    function n() {
        $(".cd-overlay").removeClass("is-visible")
    }
    var f = 767;
    i();
    $(window).on("resize", function() {
        window.requestAnimationFrame ? window.requestAnimationFrame(i) : setTimeout(i, 300)
    });
    $(".cd-nav-trigger").on("click", function(i) {
        if (i.preventDefault(), $(".cd-main-content").hasClass("nav-is-visible")) t(), n();
        else {
            $(this).addClass("nav-is-visible");
            $(".cd-primary-nav").addClass("nav-is-visible");
            $(".cd-main-header").addClass("nav-is-visible");
            $(".cd-main-content").addClass("nav-is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
                $("body").addClass("overflow-hidden")
            });
            $(".cd-overlay").addClass("is-visible")
        }
    });
    $(".cd-overlay").on("swiperight", function() {
        $(".cd-primary-nav").hasClass("nav-is-visible") && (t(), n())
    });
    $(".nav-on-left .cd-overlay").on("swipeleft", function() {
        $(".cd-primary-nav").hasClass("nav-is-visible") && (t(), n())
    });
    $(".cd-overlay").on("click", function() {
        t();
        n()
    });
    $(".cd-primary-nav").children(".has-children").children("a").on("click", function(n) {
        n.preventDefault()
    });
    $(".has-children").children("a").on("click", function(t) {
        u() || t.preventDefault();
        var i = $(this);
        i.next("ul").hasClass("is-hidden") ? (r(), i.parent(".has-children, .top_level").addClass("category-is-selected"), i.addClass("selected").next("ul").removeClass("is-hidden").end().parent(".has-children").parent("ul").addClass("moves-out"), i.parent(".has-children").siblings(".has-children").children("ul").addClass("is-hidden").end().children("a").removeClass("selected"), $(".cd-overlay").addClass("is-visible")) : (i.removeClass("selected").next("ul").addClass("is-hidden").end().parent(".has-children").parent("ul").removeClass("moves-out"), n(), r())
    });
    $(".cd-overlay, .hero_nav, .pre_nav").on("click", function() {
        t();
        n();
        r()
    });
    $(".go-back").on("click", function() {
        $(this).parent("ul").addClass("is-hidden").parent(".has-children").parent("ul").removeClass("moves-out")
    });
})


// Homepage Main Carousel Javascript
$(document).ready(function() {
  $("#homepage-carousel").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : true,
      rewindNav : false
  });
  $("#homepage-product1").owlCarousel({
    items : 7,
    itemsDesktop : [1199,6],
    itemsDesktopSmall : [979,5],
    itemsTablet : [768,4],
    itemsMobile : [479,2],
    navigation : true,
    navigationText : ["<",">"],
    stopOnHover : true,
    pagination : false,
    rewindNav : false
  });
  $("#homepage-product2").owlCarousel({
    items : 7,
    itemsDesktop : [1199,6],
    itemsDesktopSmall : [979,5],
    itemsTablet : [768,4],
    itemsMobile : [479,2],
    navigation : true,
    navigationText : ["<",">"],
    stopOnHover : true,
    pagination : false,
    rewindNav : false
  });
  $("#homepage-product3").owlCarousel({
    items : 7,
    itemsDesktop : [1199,6],
    itemsDesktopSmall : [979,5],
    itemsTablet : [768,4],
    itemsMobile : [479,2],
    navigation : true,
    navigationText : ["<",">"],
    stopOnHover : true,
    pagination : false,
    rewindNav : false
  });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});
