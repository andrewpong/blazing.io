/*
 * switcher
 * https://github.com/amazingSurge/switcher
 *
 * Copyright (c) 2013 joeylin
 * Licensed under the MIT license.
 */

(function($) {
    "use strict";

    var Switcher = $.switcher = function(input, options) {

        this.$input = $(input).wrap('<div></div>');
        this.$element = this.$input.parent();

        var meta = {
            disabled: this.$input.prop('disabled') ? true : false,
            checked: this.$input.prop('checked') ? true : false
        };

        this.options = $.extend({}, Switcher.defaults, options, meta);
        this.namespace = this.options.namespace;

        this.$element.addClass(this.namespace).addClass(this.options.skin);
        this.checked = this.options.checked;
        this.disabled = this.options.disabled;
        this.initial = false;

        // flag
        this._click = true;

        this.init();
    };

    Switcher.prototype = {
        constuctor: Switcher,
        init: function() {
            var opts = this.options;

            this.$inner = $('<div class="' + this.namespace + '-inner"></div>');
            this.$innerBox = $('<div class="' + this.namespace + '-inner-box"></div>');
            this.$on = $('<div class="' + this.namespace + '-on">' + opts.ontext + '</div>');
            this.$off = $('<div class="' + this.namespace + '-off">' + opts.offtext + '</div>');
            this.$handle = $('<div class="' + this.namespace + '-handle"></div>');

            this.$innerBox.append(this.$on, this.$off);
            this.$inner.append(this.$innerBox);
            this.$element.append(this.$inner, this.$handle);

            // get components width
            var w = this.$on.width();
            var h = this.$handle.width();

            this.distance = w - h / 2;

            if (this.options.clickable === true) {
                this.$element.on('click touchstart', $.proxy(this.click, this));
                
            }

            if (this.options.dragable === true) {
                this.$handle.on('mousedown touchstart', $.proxy(this.mousedown, this));
                this.$handle.on('click', function() {
                    return false;
                });
            }

            // for support mobile touch
            // ...
            // ...
            // ...

            // set initial status and value
            if (this.state === 'disabled') {
                this.$element.off('click touchstart');
                this.$handle.off('mousedown touchstart');
                this.$element.addClass(this.namespace + '-disabled');
            }

            this.set(this.checked);
            this.initial = true;
        },
        animate: function(pos, callback) {
            // prevent animate when first load
            if (this.initial === false) {
                this.$innerBox.css({
                    marginLeft: pos
                });

                this.$handle.css({
                    left: this.distance + pos
                });
                return false;
            }

            this.$innerBox.stop().animate({
                marginLeft: pos
            }, {
                duration: this.options.animation,
                complete: callback
            });

            this.$handle.stop().animate({
                left: this.distance + pos
            }, {
                duration: this.options.animation
            });
        },
        _getDragPos: function(e) {
            return e.pageX || ((e.originalEvent.changedTouches) ? e.originalEvent.changedTouches[0].pageX : 0);
        },
        set: function(value) {
            switch (value) {
                case true:
                    this.checked = true;
                    this.$input.prop('checked', true);
                    // this.move(0);
                    this.animate(0);
                    break;

                case false:
                    this.checked = false;
                    this.$input.prop('checked', false);
                    // this.move(-this.distance);
                    this.animate(-this.distance);

                    break;
            }
        },
        move: function(pos) {
            pos = Math.max(-this.distance, Math.min(pos, 0));

            this.$innerBox.css({
                marginLeft: pos
            });

            this.$handle.css({
                left: this.distance + pos
            });
        },
        click: function(e) {

            if (this._click === false) {
                this._click = true;
                return false;
            }

            if (this.checked === true) {
                this.set(false);
            } else {
                this.set(true);
            }

            return false;
        },
        mousedown: function(e) {
            var dragDistance,
                self = this,
                startX = this._getDragPos(e);

            //this._click = false;
            this.mousemove = function(e) {
                var current = this._getDragPos(e);

                if (this.checked === true) {
                    dragDistance = current - startX > 0 ? 0 : (current - startX < -this.distance ? -this.distance : current - startX);
                } else {
                    dragDistance = current - startX < 0 ? -this.distance : (current - startX > this.distance ? 0 : -this.distance + current - startX);
                }

                this.move(dragDistance);

                this.$handle.off('mouseup');

                return false;
            };

            this.mouseup = function() {
                var currPos = parseInt(this.$innerBox.css('margin-left'), 10);

                if (Math.abs(currPos) >= this.distance / 2) {
                    this.set(false);
                }

                if (Math.abs(currPos) < this.distance / 2) {
                    this.set(true);
                }

                $(document).off({
                    mousemove: this.mousemove,
                    mouseup: this.mouseup,
                    touchmove: this.mousemove,
                    touchend: this.mouseup
                });

                this.$handle.off('mouseup');

                return false;
            };

            $(document).on({
                mousemove: $.proxy(this.mousemove, this),
                mouseup: $.proxy(this.mouseup, this),
                touchmove: $.proxy(this.mousemove, this),
                touchend: $.proxy(this.mouseup, this)
            });

            if (this.options.clickable === true) {
                this.$handle.on('mouseup touchend', function() {

                    if (self.checked === true) {
                        self.set(false);
                    } else {
                        self.set(true);
                    }

                    self.$handle.off('mouseup touchend');

                    $(document).off({
                        mousemove: this.mousemove,
                        mouseup: this.mouseup,
                        touchmove: this.mousemove,
                        touchend: this.mouseup
                    });
                });

            }

            return false;
        },

        check: function() {
            this.set(true);
        },

        uncheck: function() {
            this.set(false);
        }
    };
    Switcher.defaults = {
        skin: null,

        dragable: true,
        clickable: true,
        disabled: false,
        checked: true,

        ontext: 'ON',
        offtext: 'OFF',
        animation: 200,
        namespace: 'switcher',
        onChange: null
    };

    $.fn.switcher = function(options) {
        return this.each(function() {
            if (!$.data(this, 'switcher')) {
                $.data(this, 'switcher', new Switcher(this, options));
            }
        });
    };
}(jQuery));