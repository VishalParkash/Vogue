/*

$(".selectCustom")
  .selectric()
  .on("change", function() {
    $selectValue.text($(this).val());
  });


  */

$(".dropDoenBtn > span").on("click", function() {
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(this)
      .next(".dropDoenBtnOver")
      .slideUp();
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".dropDoenBtnOver").slideUp();
    $(".dropDoenBtn").removeClass("active");

    //
    $(this)
      .next(".dropDoenBtnOver")
      .slideDown();
    $(this)
      .parent()
      .addClass("active");
  }
});
$(".dropDoenBtn .closeBtn, .dropDoenBtn .doneBtn").on("click", function() {
  $(this)
    .closest(".dropDoenBtnOver")
    .slideUp();
  $(this)
    .closest(".dropDoenBtn")
    .removeClass("active");
});

// slider

$(".portfolioSlide").slick({
  // infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

// secProfileImgGrid
$(".secProfileImgGrid").slick({
  // infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

// tabLinkMobileClick
$(".tabLinkMobileClick").on("click", function() {
  if (
    $(this)
      .closest(".tabLinkMobile")
      .hasClass("active")
  ) {
    $(this)
      .next(".tabLinkMobileOver")
      .slideUp();
    $(this)
      .closest(".tabLinkMobile")
      .removeClass("active");
  } else {
    $(this)
      .next(".tabLinkMobileOver")
      .slideDown();
    $(this)
      .closest(".tabLinkMobile")
      .addClass("active");
  }
});

$(".newsletterPreferencesItm").on("click", function() {
  $(this).toggleClass("active");
});
