jQuery(document).ready(function($) {

    function unleashInit() {
        $('.unleash-slider-list').each(function() {

            var opts = $(this).data('options');

            var imagew = opts.imagew;
            var imageh = opts.imageh;
            var slideh = opts.slideh;

            var slidew = $(this).parents('.unleash-slider-wrap').width();

            if (opts.slidew < slidew) {
                slidew = opts.slidew;
            } else {
                var ratio = slidew / opts.slidew;
                imagew = parseInt(imagew, 10) * ratio;
                imageh = parseInt(imageh, 10) * ratio;
                slideh = parseInt(slideh, 10) * ratio;
            }

            $(this).unleash({
                    OpenFirstOnload: opts.openfirstonload,
                    childClassName: '.unleash-slider-item',
                    captionClassName: '.unleash-slider-detail',
                    duration: opts.duration,
                    SliderWidth: slidew + 'px',
                    SliderHeight: slideh + 'px',
                    width: imagew,
                    height: imageh,
                    Event: opts.event,
                    easing: opts.easing,
                    //captionEasing: opts.capEasing,
                    CollapseOnMouseLeave: opts.collapse,
                    CaptionAnimation: opts.capAnimate
                });
        });
    }
    unleashInit();

});
