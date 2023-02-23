var $ = jQuery;
var windowWidth = $(window).width();

$(document).ready(function () {
  var moonclass = $(".moon");
  moonclass.css("top", -100);

  function animateFrom(elem, direction) {
    direction = direction || 1;

    var x = 0,
      y = direction * 100;

    if (elem.classList.contains("gs_reveal_fromLeft")) {
      x = -100;

      y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
      x = 100;

      y = 0;
    }

    elem.style.transform = "translate(" + x + "px, " + y + "px)";

    elem.style.opacity = "0";

    gsap.fromTo(
      elem,

      { x: x, y: y, autoAlpha: 0 },

      {
        duration: 1.25,

        x: 0,

        y: 0,

        autoAlpha: 1,

        ease: "expo",

        overwrite: "auto",
      }
    );
  }

  function hide(elem) {
    gsap.set(elem, { autoAlpha: 0 });
  }

  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
    hide(elem); // assure that the element is hidden when scrolled into view

    ScrollTrigger.create({
      trigger: elem,

      onEnter: function () {
        animateFrom(elem);
      },

      onEnterBack: function () {
        animateFrom(elem, -1);
      },

      onLeave: function () {
        hide(elem);
      }, // assure that the element is hidden when scrolled into view
    });
  });
  setTimeout(() => {
    $(".load-container").addClass("hide-loader");
  }, 5000);

  var mouseX = 0,
    mouseY = 0;
  var xp = 0,
    yp = 0;

  $(document).mousemove(function (e) {
    mouseX = e.pageX - 30;
    mouseY = e.pageY - 30;
  });

  setInterval(function () {
    xp += (mouseX - xp) / 6;
    yp += (mouseY - yp) / 6;
    $("#circle").css({ left: xp + "px", top: yp + "px" });
  }, 20);

  $(".mini-slider").slick({
    slidesToShow: 4,

    autoplay: true,

    arrows: false,

    responsive: [
      {
        breakpoint: 1200,

        settings: {
          slidesToShow: 3,
        },
      },

      {
        breakpoint: 600,

        settings: {
          slidesToShow: 2,

          slidesToScroll: 2,
        },
      },

      {
        breakpoint: 480,

        settings: {
          slidesToShow: 1,

          slidesToScroll: 1,
        },
      },
    ],
  });

  if (windowWidth > 768) {
    var $animation_elements = $(".animation-element");

    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();

      var window_top_position = $window.scrollTop();

      var window_bottom_position = window_top_position + window_height;

      $.each($animation_elements, function () {
        var $element = $(this);

        var element_height = $element.outerHeight() - 100;

        var element_top_position = $element.offset().top + 50;

        var element_bottom_position = element_top_position + element_height;

        //check to see if this current container is within viewport

        if (
          element_bottom_position >= window_top_position &&
          element_top_position <= window_bottom_position
        ) {
          $element.addClass("in-view");
        } else {
          $element.removeClass("in-view");
        }
      });
    }

    $window.on("scroll resize", check_if_in_view);

    $window.trigger("scroll");

    // function addClassWaveSection() {
    //   let $elem = jQuery(".wave-section ul li");

    //   let $elem2 = jQuery(".wave-section ul");

    //   $elem.addClass("animation-children animation-top animation-delay");

    //   $elem2.addClass("animation-element");
    // }

    // addClassWaveSection();
  }

  gsap.to(".pContent", {
    yPercent: -100,

    ease: "none",

    scrollTrigger: {
      trigger: ".pSection",

      // start: "top bottom", // the default values

      // end: "bottom top",

      scrub: true,
    },
  });

  gsap.to(".pImage", {
    yPercent: 50,

    ease: "none",

    scrollTrigger: {
      trigger: ".pSection",

      // start: "top bottom", // the default values

      // end: "bottom top",

      scrub: true,
    },
  });

  gsap.registerPlugin(ScrollTrigger);

  let sections = gsap.utils.toArray(".panel");

  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),

    scrollTrigger: {
      trigger: ".section-slider",

      fastScrollEnd: 1000,

      scrub: 1,

      snap: 1 / (sections.length - 1),

      end: "+=600",
    },
  });

  $(".arrow").on("click", function (event) {
    event.preventDefault();

    var nav = $(this);

    var hash = nav.attr("href");

    var position = $(hash).offset().top;

    $("html, body").stop().animate({ scrollTop: position }, 1000);
  });

  $(".toTop").on("click", function (e) {
    e.preventDefault();

    $("html, body").animate({ scrollTop: 0 }, 700);

    return false;
  });

  var typed = new Typed("#typed", {
    stringsElement: "#typed-strings",
    loop: true,
    typeSpeed: 90,
  });
});
