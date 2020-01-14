(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
module.exports =
  AOS.init();

},{}],2:[function(require,module,exports){
//var jquery = require("../node_modules/jquery/dist/jquery.min.js");
//var modalmin = require('../Modaal-master/dist/js/modaal.min.js');
//var slickmin = require('../slick-1.8.1/slick/slick.min.js');
var slick = require('./slick');
var modaal = require('./modaal');
var aos = require('./aos');
var fav = require('./fav');

},{"./aos":1,"./fav":3,"./modaal":4,"./slick":5}],3:[function(require,module,exports){
module.exports =
$('.js-click-fav').on('click',function(){
  var $this = $(this);
  $this.toggleClass('is-active');
});

},{}],4:[function(require,module,exports){

module.exports = $('.modal').modaal();

},{}],5:[function(require,module,exports){

module.exports = $('.slider').slick({
  //autoplay:true,
  //autoplaySpeed:5000,
  dots:true,
  prevArrow:'<i class="c-scroll__left fas fa-angle-left"></i>',
  nextArrow:' <i class="c-scroll__right fas fa-angle-right"></i>',
});

},{}]},{},[2]);
