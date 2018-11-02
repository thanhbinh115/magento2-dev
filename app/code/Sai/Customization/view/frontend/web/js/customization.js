require([
    'jquery',
    'flexslider',
    'easing',
    'mousewheel',
/*    'shCore',
    'shBrushXml',
    'shBrushJScript',*/
], function($){

    $(document).ready(function() {
        console.log("Customize 3333");
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5,
            pausePlay: true,
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
});
