$(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2,
          autoplay: true,
        },
      },
    ],
  });
  for (const el of $('.scrollable')) {
    new SimpleBar(el, { autoHide: false, forceVisible: true, direction: 'rtl' })
  }

  // Get all of the nav-tabs nav-link elements
  const navTabs = document.querySelectorAll(".nav-tabs");

  // Loop through all of the nav-tabs nav-link elements
  navTabs.forEach((navTab) => {
    // Get the icon element
    const icon = navTab.querySelector("i");
    if (navTab.classList.contains("active")) {
      icon.classList.add("fa-minus-circle");
      icon.classList.remove("fa-plus-circle");
      navTab.classList.add("special");
    }
    // Add an event listener to the icon element
    navTab.addEventListener("click", () => {
      navTabs.forEach(n => {
        const i = n.querySelector("i");
        i.classList.add("fa-plus-circle");
        i.classList.remove("fa-minus-circle");
        n.classList.remove("special");
      })
      // If the tab is currently active
      if (navTab.classList.contains("active")) {
        // Change the icon to a minus icon
        icon.classList.remove("fa-plus-circle");
        icon.classList.remove("active");
        navTab.classList.add("special");
        icon.classList.add("fa-minus-circle");
      } else {
        // Change the icon to a plus icon
        icon.classList.remove("fa-minus-circle");
        icon.classList.add("fa-plus-circle");
        icon.classList.add("active");
        navTab.classList.add("special");
      }
    });
  });
});

(function () {
  "use strict";
  var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
    return function (arg) {
      if (this.length > 1) {
        this.each(function () {
          var $this = $(this);

          if (!$this.data(ident)) {
            $this.data(ident, func($this, arg));
          }
        });

        return this;
      } else if (this.length === 1) {
        if (!this.data(ident)) {
          this.data(ident, func(this, arg));
        }

        return this.data(ident);
      }
    };
  });
})();

(function () {
  "use strict";
  function Accordion($roots) {
    var element = $roots;
    var accordion = $roots.first("[data-accordion]");
    var accordion_target = $roots.find("[data-accordion-item]");
    var accordion_content = $roots.find("[data-accordion-content]");
    $(accordion_target).click(function () {
      $(this).toggleClass("opened");
      $(this).find(accordion_content).slideToggle("slow");
      $(this).siblings().find(accordion_content).slideUp("slow");
      $(this).siblings().removeClass("opened");
    });
  }
  $.fn.Accordion = jQueryPlugin("Accordion", Accordion);
  $("[data-accordion]").Accordion();

  function Ripple_Button($root) {
    var elements = $root;
    var ripple_btn = $root.first("[data-ripple]");
    $(ripple_btn).on("click", function (event) {
      event.preventDefault();
      var $div = $("<div/>"),
        btnOffset = ripple_btn.offset(),
        xPos = event.pageX - btnOffset.left,
        yPos = event.pageY - btnOffset.top;
      $div.addClass("ripple-effect");
      $div.css({
        height: ripple_btn.height(),
        width: ripple_btn.height(),
        top: yPos - $div.height() / 2,
        left: xPos - $div.width() / 2,
        background: ripple_btn.data("ripple") || "#ffffff26"
      });
      ripple_btn.append($div);

      window.setTimeout(function () {
        $div.remove();
      }, 2000);
    });
  }
  $.fn.Ripple_Button = jQueryPlugin("Ripple_Button", Ripple_Button);
  $("[data-ripple]").Ripple_Button();
})();

// var accordion = $('body').find('[data-behavior="accordion"]');
// var expandedClass = 'is-expanded';

// $.each(accordion, function () { // loop through all accordions on the page

//   var accordionItems = $(this).find('[data-binding="expand-accordion-item"]');

//   $.each(accordionItems, function () { // loop through all accordion items of each accordion
//     var $this = $(this);
//     var triggerBtn = $this.find('[data-binding="expand-accordion-trigger"]');

//     var setHeight = function (nV) {
//       // set height of inner content for smooth animation
//       var innerContent = nV.find('.akordion__content-inner')[0],
//         maxHeight = $(innerContent).outerHeight(),
//         content = nV.find('.akordion__content')[0];

//       if (!content.style.height || content.style.height === '0px') {
//         $(content).css('height', maxHeight);
//       } else {
//         $(content).css('height', '0px');
//       }
//     };

//     var toggleClasses = function (event) {
//       var clickedItem = event.currentTarget;
//       var currentItem = $(clickedItem).parent();
//       var clickedContent = $(currentItem).find('.akordion__content')
//       $(currentItem).toggleClass(expandedClass);
//       setHeight(currentItem);

//       if ($(currentItem).hasClass('is-expanded')) {
//         $(clickedItem).attr('aria-selected', 'true');
//         $(clickedItem).attr('aria-expanded', 'true');
//         $(clickedContent).attr('aria-hidden', 'false');

//       } else {
//         $(clickedItem).attr('aria-selected', 'false');
//         $(clickedItem).attr('aria-expanded', 'false');
//         $(clickedContent).attr('aria-hidden', 'true');
//       }
//     }

//     triggerBtn.on('click', event, function (e) {
//       e.preventDefault();
//       toggleClasses(event);
//     });

//     // open tabs if the spacebar or enter button is clicked whilst they are in focus
//     $(triggerBtn).on('keydown', event, function (e) {
//       if (e.keyCode === 13 || e.keyCode === 32) {
//         e.preventDefault();
//         toggleClasses(event);
//       }
//     });
//   });

// });

// changes active class on BPO & Technology page
$(document).ready(function () {
  $('ul.nav > li.nav-item > a.nav-link')
    .click(function (e) {
      $('ul.nav > li.nav-item > a.nav-link')
        .removeClass('active');
      $(this).addClass('active');
    });
});

//carousel home page
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false,
      },
      600: {
        items: 1,
        nav: true,
        dots: true
      },
      1000: {
        items: 1,
        dots: true,
      }
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.querySelector(".search_input");
  const locationSelect = document.getElementById("location-select");
  const jobPosts = document.querySelectorAll(".job-post");
  const noJobSection = document.querySelector(".no-job");

  if (searchInput && locationSelect && jobPosts.length > 0 && noJobSection) {
    searchInput.addEventListener("keyup", filterJobs);
    locationSelect.addEventListener("change", filterJobs);

    function filterJobs() {
      const searchTerm = searchInput.value.toLowerCase().trim();
      const selectedLocation = locationSelect.value;

      for (const jobPost of jobPosts) {
        const jobTitle = jobPost.querySelector(".job-title").textContent.toLowerCase();
        const jobLocation = jobPost.querySelector(".job-location").textContent.trim().toLowerCase();

        const titleMatch = jobTitle.includes(searchTerm);
        const locationMatch = selectedLocation === "All" || jobLocation === selectedLocation.toLowerCase();

        if (titleMatch && locationMatch) {
          jobPost.classList.remove("hide");
        } else {
          jobPost.classList.add("hide");
        }
      }

      const visibleJobPosts = document.querySelectorAll(".job-post:not(.hide)");
      if (visibleJobPosts.length === 0) {
        noJobSection.classList.remove("hide");
      } else {
        noJobSection.classList.add("hide");
      }
    }
  }
});



// Sticky header on BPO page
window.onload = function () {

  var header = document.getElementById("Operations");
  var end = document.getElementById("bpo-testimonials");

  if (header && end) {

    var sticky = header.offsetTop;
    var free = end.getBoundingClientRect().top;

    window.onscroll = function () { stickyHeader() };

    function stickyHeader() {
      if (window.scrollY > sticky && window.scrollY < free - 275) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  }
}

// Hiding Sticky Navs on Scroll
$(document).ready(function () {
  var $techSubMenu = $('.tech-sub-menu');

  if ($techSubMenu.length > 0) {
    var menuTop = $techSubMenu.offset().top;
    var lastScrollTop = 0;
  
    $(window).on('scroll', function () {
      var st = $(window).scrollTop();
      var direction = st > lastScrollTop ? 'down' : 'up';
  
      if (direction === 'down' && st > menuTop) {
        // Scrolling down and past the techSubMenu section
        $techSubMenu.addClass('is-hidden');
      } else {
        // Scrolling up
        $techSubMenu.removeClass('is-hidden');
        if (direction === 'up' && st <= menuTop + 60) {
          $techSubMenu.addClass('slide-down');
        } else {
          $techSubMenu.removeClass('slide-down');
        }
      }
  
      lastScrollTop = st;
    });
  } else {
    console.info("Element with class 'tech-sub-menu' not found")
  }
});

window.onload = function () {
  var header = document.getElementById("Operations");
  var end = document.getElementById("bpo-testimonials");
  var $serviceNavs = $('.service-navs-animation');
  var lastScrollTop = 0;

  if (header && end) {
      var sticky = header.offsetTop;
      var free = end.getBoundingClientRect().top;

      window.onscroll = function () {
          stickyHeader();
          handleSlideDown();
      };

      function stickyHeader() {
          if (window.scrollY > sticky && window.scrollY < free - 275) {
              header.classList.add("sticky");
          } else {
              header.classList.remove("sticky");
          }
      }

      function handleSlideDown() {
          var st = window.scrollY;
          var direction = st > lastScrollTop ? 'down' : 'up';
          var bannerHeight = $('.bpo__banner').outerHeight();

          if (st > bannerHeight && direction === 'down') {
              // Scrolling down and past the banner section
              $serviceNavs.addClass('is-hidden').removeClass('sticky');
          } else if (st > bannerHeight) {
              // Scrolling up or still above the banner section
              $serviceNavs.removeClass('is-hidden').addClass('sticky slide-down');
          } else {
              // Scrolling up before the banner section
              $serviceNavs.removeClass('is-hidden sticky slide-down');
          }

          lastScrollTop = st;
      }
  }
};