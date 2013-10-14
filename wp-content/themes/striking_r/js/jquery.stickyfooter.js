jQuery(document).ready(function($) {
    $('#footer').sticker({
            type: 'fill',
            adjustHeight: function(documentHeight) {
                paddingbottom = parseInt($('#page .inner').css('paddingBottom').replace("px", ""), 10);
                if (this._initPaddingBottom === undefined) {
                    this._initPaddingBottom = paddingbottom;
                }
                return documentHeight - paddingbottom;
            },
            callback: function(scrollTop, documentHeight, windowHeight) {
                if (scrollTop === 0 && documentHeight <= windowHeight) {
                    var $page = $('#page'),
                        paddingbottom = parseInt($('#page .inner').css('paddingBottom').replace("px", ""), 10),
                        page_top = $page.offset().top,
                        page_height = $page.height(),
                        extra = this.$element.offset().top - page_top - page_height;
                    $('#page .inner').css('paddingBottom', extra + paddingbottom);
                } else {
                    $('#page .inner').css('paddingBottom', this._initPaddingBottom);
                }
            },
            disable: function(api) {
                $('#page .inner').css('paddingBottom', this._initPaddingBottom);
            }
        });

    if ($('body').is('.responsive') && sticky_footer_target > 320) {
        var query = "screen and (max-width:" + sticky_footer_target + "px)";
        enquire.register(query, {
                match: function() {
                    $('#footer').sticker('disable');
                },

                unmatch: function() {
                    $('#footer').sticker('enable');
                }
            });
    }
});
