
require.config({
  baseUrl: "/js/",
  paths: {
    jquery: 'lib/jquery-1.11.1.min',
    flexymenu: 'lib/flexy-menu',
    movetop: 'lib/move-top',
    easing: 'lib/easing',
    flexisel: 'lib/jquery.flexisel',
    responsiveSlides: 'lib/responsiveslides.min',
    highcharts: 'lib/highcharts'
  }
,
  shim: {
    highcharts:{
      deps: ['jquery'],
      exports: '$.fn'
    },
    responsiveSlides: {
      deps: ['jquery'],
      exports: '$.fn'
    },
    flexisel:{
      deps: ['jquery'],
      exports: '$.fn'
    },
    flexymenu: {
      deps: ['jquery'],
      exports: '$.fn'
    },
    movetop: {
      deps: ['jquery'],
      exports: '$.fn'
    },
    easing: {
      deps: ['jquery'],
      exports: '$.fn'
    }
  }
});