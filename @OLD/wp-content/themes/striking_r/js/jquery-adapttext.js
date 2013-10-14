/*! jQuery AdaptText - v1.0.0 - 2013-07-24
* https://github.com/amazingSurge/jquery-adaptText
* Copyright (c) 2013 amazingSurge; Licensed MIT */
(function(window, document, $, undefined) {
  "use strict";

  var instances = [],
    viewportWidth = $(window).width();

  // Constructor
  var AdaptText = $.AdaptText = function(element, options) {
    // Attach element to the 'this' keyword
    this.element = element;
    this.$element = $(element);

    var metas = {};
    if (this.$element.data('max')) {
      metas.maxFontSize = this.$element.data('max');
    }
    if (this.$element.data('min')) {
      metas.minFontSize = this.$element.data('min');
    }
    if (this.$element.data('compression')) {
      metas.compression = this.$element.data('compression');
    }

    // options
    this.options = $.extend(true, {}, AdaptText.defaults, options, metas);

    this.width = this.$element.width();

    instances.push(this);

  };

  // Default options for the plugin as a simple object
  AdaptText.defaults = {
    compression: 10,
    maxFontSize: Number.POSITIVE_INFINITY,
    minFontSize: Number.NEGATIVE_INFINITY,
    onResizeEvent: true
  };

  AdaptText.prototype = {
    constructor: AdaptText,
    resize: function() {
      this.width = this.$element.width();
      if (this.width === 0) {
        return;
      }

      this.$element.css('font-size', Math.floor(Math.max(
        Math.min(this.width / (this.options.compression), parseFloat(this.options.maxFontSize)),
        parseFloat(this.options.minFontSize)
      )));
    }
  };

  AdaptText.resize = function() {
    if ($(window).width() === viewportWidth) {
      return;
    }
    viewportWidth = $(window).width();

    $.each(instances, function() {
      if (this.options.onResizeEvent) {
        this.resize();
      }
    });
  };

  // Collection method.
  $.fn.adaptText = function(options) {
    if (typeof options === 'string') {
      var method = options;
      var method_arguments = arguments.length > 1 ? Array.prototype.slice.call(arguments, 1) : undefined;

      return this.each(function() {
        var api = $.data(this, 'adaptText');
        if (typeof api[method] === 'function') {
          api[method].apply(api, method_arguments);
        }
      });
    } else {
      return this.each(function() {
        if (!$.data(this, 'adaptText')) {
          $.data(this, 'adaptText', new AdaptText(this, options));
        }
      });
    }
  };

  if (window.addEventListener) {
    window.addEventListener("resize", AdaptText.resize, false);
  } else if (window.attachEvent) {
    window.attachEvent("onresize", AdaptText.resize);
  }
}(window, document, jQuery));
