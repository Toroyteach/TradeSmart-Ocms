      $(".video-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    asNavFor: ".video-thumbnails"
  });
  
  //  Child Thumbnail Slider
  $(".video-thumbnails").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".video-container",
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true
  });
  
  //  Video Poster Setup
  //  FORKED FROM CRAIG MONEY 
  //  https://codepen.io/pixelthing/details/zGZKaQ
  
  $(document).on("click", ".js-videoPoster", function(ev) {
    "use strict";
    ev.preventDefault();
    videoStop();
    var $poster = $(this);
    var $wrapper = $poster.closest(".js-videoWrapper");
    videoPlay($wrapper);
  });
  
  // play the targeted video (and hide the poster frame)
  function videoPlay($wrapper) {
    "use strict";
    var $iframe = $wrapper.find(".js-videoIframe");
    var src = $iframe.data("src");
    // hide poster
    $wrapper.addClass("videoWrapperActive");
    // add iframe src in, starting the video
    $iframe.attr("src", src);
  }
  
  // stop the targeted/all videos (and re-instate the poster frames)
  function videoStop($wrapper) {
    "use strict";
    // if we're stopping all videos on page
    if (!$wrapper) {
      var $wrapper = $(".js-videoWrapper");
      var $iframe = $(".js-videoIframe");
      // if we're stopping a particular video
    } else {
      var $iframe = $wrapper.find(".js-videoIframe");
    }
    // reveal poster
    $wrapper.removeClass("videoWrapperActive");
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr("src", "");
  }
  
  // On before slide change
  $(".video-container").on("beforeChange", function(
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    videoStop();
  });
  
  $(function() {
      $('.no-fouc').removeClass('no-fouc');
      console.log( "ready!" );
  });