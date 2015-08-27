/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

var ENVIRONMENT = 'dev';
// var ENVIRONMENT = 'production';

if (ENVIRONMENT == 'dev') {
  window.url = 'http://dev.comdan66.github.io/OA-ElasticaSearch/guide/';
} else {
  window.url = 'http://comdan66.github.io/OA-ElasticaSearch/guide/';

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46121102-7', 'auto');
  ga('send', 'pageview');
}

$(function () {
  window.body = $('body');
  window.mainLoading = $loading = $('<div />').attr ('id', 'loading').append ('<svg class="svg" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg>').appendTo (window.body);

  window.hideLoading = function (callback) {
    this.mainLoading.addClass ('hide').fadeOut (function () {
      $(this).hide (function () {
        if (callback)
          callback ();
      });
    });
  };

  window.closeLoading = function (callback) {
    window.hideLoading (function  () {
      if (callback)
        callback ();
        window.mainLoading.remove ();
    });
  };
});