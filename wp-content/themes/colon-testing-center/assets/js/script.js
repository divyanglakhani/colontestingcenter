$(document).ready(function () {
  $("#home-slider").slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplayspeed: 1500,
    pauseonhover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
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
  $("[data-trigger]").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id = $(this).attr("data-trigger");
    $(offcanvas_id).toggleClass("show");
    $("body").toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");
  });
  $(document).on("keydown", function (event) {
    if (event.keyCode === 27) {
      $(".mobile-offcanvas").removeClass("show");
      $("body").removeClass("overlay-active");
    }
  });
  $(".btn-close, .screen-overlay").click(function (e) {
    $(".screen-overlay").removeClass("show");
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("offcanvas-active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth < 992) {
    document
      .querySelectorAll(".navbar .dropdown")
      .forEach(function (everydropdown) {
        everydropdown.addEventListener("hidden.bs.dropdown", function () {
          this.querySelectorAll(".submenu").forEach(function (everysubmenu) {
            everysubmenu.style.display = "none";
          });
        });
      });
    document.querySelectorAll(".dropdown-menu a").forEach(function (element) {
      element.addEventListener("click", function (e) {
        let nextEl = this.nextElementSibling;
        if (nextEl && nextEl.classList.contains("submenu")) {
          // e.preventDefault();
          if (nextEl.style.display == "block") {
            nextEl.style.display = "none";
          } else {
            nextEl.style.display = "block";
          }
        }
      });
    });
  }
});
function findOffset(element) {
  var top = 0,
    left = 0;
  do {
    top += element.offsetTop || 0;
    left += element.offsetLeft || 0;
    element = element.offsetParent;
  } while (element);

  return {
    top: top,
    left: left,
  };
}
window.onload = function () {
  var stickyDivHeader = document.getElementById("master_head");
  var headerOffset = findOffset(stickyDivHeader);
  var stickyBody = document.getElementById("mobile_nav");
  window.onscroll = function () {
    var bodyScrollTop =
      document.documentElement.scrollTop || document.body.scrollTop;
    if (bodyScrollTop > headerOffset.top) {
      stickyDivHeader.classList.add("sticky");
      stickyBody.classList.add("sticky");
    } else {
      stickyDivHeader.classList.remove("sticky");
      stickyBody.classList.remove("sticky");
    }
  };
};
const accordion = document.getElementsByClassName("container");
for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
  });
}

// The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
$(".moreless-button").click(function () {
  $(".moretext").slideToggle();
  if ($(".moreless-button").text() == "Read more") {
    $(this).text("Read less");
  } else {
    $(this).text("Read more");
  }
});

$(".moreless-button-2").click(function () {
  $(".moretext-2").slideToggle();
  if ($(".moreless-button-2").text() == "Read more") {
    $(this).text("Read less");
  } else {
    $(this).text("Read more");
  }
});

$(".moreless-button-4").click(function () {
  $(".moretext-4").slideToggle();
  if ($(".moreless-button-4").text() == "Read more") {
    $(this).text("Read less");
  } else {
    $(this).text("Read more");
  }
});

/* * * * * * * * * * * * * * * * * *
 * Show/hide fields conditionally
 * * * * * * * * * * * * * * * * * */
(function ($) {
  $.fn.conditionize = function (options) {
    var settings = $.extend(
      {
        hideJS: true,
      },
      options
    );

    $.fn.showOrHide = function (listenTo, listenFor, $section) {
      if (
        $(listenTo).is("select, input[type=text]") &&
        $(listenTo).val() == listenFor
      ) {
        $section.slideDown();
      } else if ($(listenTo + ":checked").val() == listenFor) {
        $section.slideDown();
      } else {
        $section.slideUp();
      }
    };

    return this.each(function () {
      var listenTo = "[name=" + $(this).data("cond-option") + "]";
      var listenFor = $(this).data("cond-value");
      var $section = $(this);

      //Set up event listener
      $(listenTo).on("change", function () {
        $.fn.showOrHide(listenTo, listenFor, $section);
      });
      //If setting was chosen, hide everything first...
      if (settings.hideJS) {
        $(this).hide();
      }
      //Show based on current value on page load
      $.fn.showOrHide(listenTo, listenFor, $section);
    });
  };
})(jQuery);

$(".conditional").conditionize();

// -----about screening----

$("#true1").click(function () {
  if (jQuery("#true1-message").is(":visible")) {
    jQuery("#true1-message").hide();
  } else {
    jQuery("#true1-message").show();
    jQuery("#false1-message").hide();
  }
});

$("#false1").click(function () {
  if (jQuery("#false1-message").is(":visible")) {
    jQuery("#false1-message").hide();
  } else {
    jQuery("#false1-message").show();
    jQuery("#true1-message").hide();
  }
});

$("#true2").click(function () {
  if (jQuery("#true2-message").is(":visible")) {
    jQuery("#true2-message").hide();
  } else {
    jQuery("#true2-message").show();
    jQuery("#false2-message").hide();
  }
});

$("#false2").click(function () {
  if (jQuery("#false2-message").is(":visible")) {
    jQuery("#false2-message").hide();
  } else {
    jQuery("#false2-message").show();
    jQuery("#true2-message").hide();
  }
});

$("#true3").click(function () {
  if (jQuery("#true3-message").is(":visible")) {
    jQuery("#true3-message").hide();
  } else {
    jQuery("#true3-message").show();
    jQuery("#false3-message").hide();
  }
});

$("#false3").click(function () {
  if (jQuery("#false3-message").is(":visible")) {
    jQuery("#false3-message").hide();
  } else {
    jQuery("#false3-message").show();
    jQuery("#true3-message").hide();
  }
});

// --insurance----

$("#midwest").click(function () {
  if (jQuery("#in-network-west").is(":visible")) {
    jQuery("#in-network-west").hide();
  } else {
    jQuery("#in-network-midwest").show();
    jQuery("#in-network-west").hide();
    jQuery("#in-network-northeast").hide();
    jQuery("#in-network-south").hide();
    jQuery("#in-network-midatlantic").hide();
  }
});

$("#northeast").click(function () {
  if (jQuery("#in-network-west").is(":visible")) {
    jQuery("#in-network-west").hide();
  } else {
    jQuery("#in-network-northeast").show();
    jQuery("#in-network-west").hide();
    jQuery("#in-network-midwest").hide();
    jQuery("#in-network-south").hide();
    jQuery("#in-network-midatlantic").hide();
  }
});

$("#south").click(function () {
  if (jQuery("#in-network-west").is(":visible")) {
    jQuery("#in-network-west").hide();
  } else {
    jQuery("#in-network-south").show();
    jQuery("#in-network-west").hide();
    jQuery("#in-network-northeast").hide();
    jQuery("#in-network-midwest").hide();
    jQuery("#in-network-midatlantic").hide();
  }
});

$("#midatlantic").click(function () {
  if (jQuery("#in-network-west").is(":visible")) {
    jQuery("#in-network-west").hide();
  } else {
    jQuery("#in-network-midatlantic").show();
    jQuery("#in-network-west").hide();
    jQuery("#in-network-northeast").hide();
    jQuery("#in-network-south").hide();
    jQuery("#in-network-midwest").hide();
  }
});

$("#west").click(function () {
  $("#in-network-west").css("display", "block");
});



$(".moreless-button-5").click(function () {
  $(".moretext-5").slideToggle();
  if ($(".moreless-button-5").text() == "Read more") {
    $(this).text("Read less");
  } else {
    $(this).text("Read more");
  }
});

// $('.menu-item-has-children').click(function(e) {
//   $(this).children('.sub-menu').slideToggle('slow');
//   e.stopPropagation();
// });

$(".menu-item-has-children").not($('#menu li sub-menu li a')).click(function (e) {
  $('ul.sub-menu').not( $(this).children() ).slideUp();
  $(this).children("ul.sub-menu").slideToggle();
  e.stopPropagation()
});

$(".search_icon").click(function() {
  $(".spicewpsearchform").slideToggle();
});
$(".search_icon1").click(function() {
  $(".spicewpsearchform").slideToggle();
});

$(document).keydown(function(e) {
  if (e.keyCode == 27) {
    //$(modal_or_menu_element).closeElement();
    $(".spicewpsearchform").hide();
  }
});



