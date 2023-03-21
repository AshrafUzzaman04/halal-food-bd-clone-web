jQuery.fn.extend({
  pan: function () {
    var panWrapper = document.createElement("div");
    $(panWrapper).addClass("panWrapper");

    var panImg = document.createElement("img");
    $(panImg).addClass("i").css("position", "absolute");

    var zi = document.createElement("a");
    $(zi).addClass("controls in");
    $(panWrapper).append(zi);

    var zo = document.createElement("a");
    $(zo).addClass("controls out");
    $(panWrapper).append(zo);

    var close = document.createElement("a");
    $(close).addClass("controls close");
    $(panWrapper).append(close);

    $(panWrapper).append(panImg);
    $("body").append(panWrapper);

    //Remove from set those image elements that are already shown in their natural size (they don't need zoom at all)
    //If the element is not an image it's not filtered
    var finalSet = $(this).filter(function () {
      if (this.tagName == "IMG") {
        var nW = this.naturalWidth || 0,
          nH = this.naturalHeight || 0,
          w = $(this).outerWidth(),
          h = $(this).outerHeight();
        if (nW > w || nH > h) return true;
      } else {
        return true;
      }
    });

    finalSet.css("cursor", "zoom-in");

    finalSet.click(function (e) {
      var t = $(this);
      var big = t.attr("data-big");
      //If there's no data-big attribute, use the src of the image (sometimes they are simply limited in size with CSS and you just need a zoom of that)
      if (big == undefined) big = t.attr("src");
      $(".panWrapper").show();
      $(".panWrapper img.i")
        .css("width", "auto")
        .attr("src", big)
        .on("load", function () {
          panInit(e);
        });
      return false;
    });

    $(zi).click(function (e) {
      var panImg = $(".panWrapper img.i");
      panImg.css("width", parseInt(parseInt(panImg.css("width")) * 1.2));
      panInit(e);
    });

    $(zo).click(function (e) {
      var panImg = $(".panWrapper img.i");
      panImg.css("width", parseInt(parseInt(panImg.css("width")) / 1.2) + 1);
      panInit(e);
    });

    $(close).click(function (e) {
      $(".panWrapper").fadeOut("slow");
    });

    $(panImg).click(function () {
      $(close).click();
    });

    $(panWrapper).on("mousemove touchmove", function (e) {
      panInit(e);
    });

    $("body").keydown(function (e) {
      if (e.keyCode == 27) {
        $(close).click();
      }
    });

    $(panWrapper).mousewheel(function (wheelEvent) {
      if (wheelEvent.deltaY > 0) $(zo).click();
      else $(zi).click();

      panInit(wheelEvent);
    });

    //The next function encapsulates the whole logic of getting the pointer position in every case
    function __getPointerPos(event, prop) {
      var pos = event[prop]; //Normal mousemove event
      if (pos == undefined) {
        pos = 0; //Default value if the next conditionals don't work
        if (event.touches)
          //jQuery for touch pointer move. Not available in jQuery 1.x
          pos = event.touches[0][prop];
        else if (event.originalEvent) {
          //original window event
          if (event.originalEvent.touches)
            pos = event.originalEvent.touches[0][prop];
        }
      }
      return pos;
    }
    function __getPointerPosX(event) {
      return __getPointerPos(event, "pageX");
    }
    function __getPointerPosY(event) {
      return __getPointerPos(event, "pageY");
    }

    function panInit(event) {
      event.preventDefault();
      var panImg = $(".panWrapper img.i");
      var panWrapper = $(".panWrapper");

      var w = parseInt(panImg.css("width")); //Image width
      var h = parseInt(panImg.css("height")); //Image height
      var vpW = $(panWrapper).width(); //Viewport width
      var vpH = $(panWrapper).height(); //Viewport height

      /*Margin on the left (difference between the width of the container and the image width). 
            If the image is wider than the container, it's negative (the image goes outside the viewport), 
            if the image is less wide than the container, it's positive (it's the ammount of margin on the left to center the image) */
      var ml = -(w - vpW);
      //Idem with the height
      var mt = -(h - vpH);
      //The amount of scroll from the top in the current page, to correct for pointer position
      var scrollHOffset =
          window.pageXOffset || document.documentElement.scrollLeft,
        scrollVOffset =
          window.pageYOffset || document.documentElement.scrollTop;

      //Left position of the pointer in page (first, try mouse, then try jQuery touch, default case native event touch for old jQuery versions), and in Viewport (substracting the scroll from left)
      var posOfPointerInPageX = __getPointerPosX(event),
        posOfPointerInViewportX = posOfPointerInPageX - scrollHOffset,
        vpW = $(panWrapper).width(); //Viewport width
      if (posOfPointerInViewportX < 0) posOfPointerInViewportX = 0; //In touch devices this can be slightly outside the viewport boundaries
      if (posOfPointerInViewportX > vpW) posOfPointerInViewportX = vpW;

      //Top position of the pointer in page (first, try mouse, then try jQuery touch, default case native event touch for old jQuery versions), and in Viewport (substracting the scroll from top)
      var posOfPointerInPageY = __getPointerPosY(event),
        posOfPointerInViewportY = posOfPointerInPageY - scrollVOffset,
        vpH = $(panWrapper).height(); //Viewport height
      if (posOfPointerInViewportY < 0) posOfPointerInViewportY = 0; //In touch devices this can be slightly outside the viewport boundaries
      if (posOfPointerInViewportY > vpH) posOfPointerInViewportY = vpH;

      //New left: the new amount we need to move from the left to show other parts of the image depending on the current mouse position
      var nl = Math.floor((ml * posOfPointerInViewportX) / vpW);
      //New top: the new amount we need to move from the top to show other parts of the image depending on the current mouse position
      var nt = Math.floor((mt * posOfPointerInViewportY) / vpH);

      if (vpW > w && vpH > h) {
        //If the image is smaller than the available viewport, center it in both directions
        nl = (vpW - w) / 2;
        nt = (vpH - h) / 2;
      } else if (vpW > w) {
        //If the image width is less than the viewport, center it horizontally
        nl = (vpW - w) / 2;
      } else if (vpH > h) {
        //If the image height is less than the viewport height, center it vertically
        nt = (vpH - h) / 2;
      }

      //Position image in viewport as calculated
      panImg.css("left", nl + "px");
      panImg.css("top", nt + "px");
    }
    return finalSet;
  },
});

(function () {
  var prefix = "",
    _addEventListener,
    onwheel,
    support;

  if (window.addEventListener) {
    _addEventListener = "addEventListener";
  } else {
    _addEventListener = "attachEvent";
    prefix = "on";
  }

  if (document.onmousewheel !== undefined) {
    support = "mousewheel";
  }
  try {
    WheelEvent("wheel");
    support = "wheel";
  } catch (e) {}
  if (!support) {
    support = "DOMMouseScroll";
  }

  window.addWheelListener = function (elem, callback, useCapture) {
    _addWheelListener(elem, support, callback, useCapture);

    if (support == "DOMMouseScroll") {
      _addWheelListener(elem, "MozMousePixelScroll", callback, useCapture);
    }
  };

  function _addWheelListener(elem, eventName, callback, useCapture) {
    elem[_addEventListener](
      prefix + eventName,
      support == "wheel"
        ? callback
        : function (originalEvent) {
            !originalEvent && (originalEvent = window.event);

            var event = {
              originalEvent: originalEvent,
              target: originalEvent.target || originalEvent.srcElement,
              type: "wheel",
              deltaMode: originalEvent.type == "MozMousePixelScroll" ? 0 : 1,
              deltaX: 0,
              delatZ: 0,
              pageX: originalEvent.pageX,
              pageY: originalEvent.pageY,
              preventDefault: function () {
                originalEvent.preventDefault
                  ? originalEvent.preventDefault()
                  : (originalEvent.returnValue = false);
              },
            };

            if (support == "mousewheel") {
              event.deltaY = (-1 / 40) * originalEvent.wheelDelta;
              originalEvent.wheelDeltaX &&
                (event.deltaX = (-1 / 40) * originalEvent.wheelDeltaX);
            } else {
              event.deltaY = originalEvent.detail;
            }

            return callback(event);
          },
      useCapture || false
    );
  }

  $.fn.mousewheel = function (handler) {
    return this.each(function () {
      window.addWheelListener(this, handler, true);
    });
  };
})(jQuery);
