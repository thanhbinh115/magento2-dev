var config = {
    paths: {
        'flexslider': 'js/flexslider/jquery.flexslider-min',
        'easing': 'js/flexslider/jquery.easing',
        'mousewheel': 'js/flexslider/jquery.mousewheel',
        //'shCore': 'js/flexslider/shCore',
        //'shBrushXml': 'js/flexslider/shBrushXml',
        //'shBrushJScript': 'js/flexslider/shBrushJScript',
    },
    shim: {
        'flexslider': {
            deps: ['jquery']
        },
        'easing': {
            deps: ['jquery']
        },
        'mousewheel': {
            deps: ['jquery']
        }
        /*'shCore': {
            deps: ['jquery']
        },
        'shBrushXml': {
            deps: ['jquery', 'shCore']
        },
        'shBrushJScript': {
            deps: ['jquery', 'shCore']
        }*/
    }
};