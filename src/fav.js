module.exports =
$('.js-click-fav').on('click',function(){
  var $this = $(this);
  $this.toggleClass('is-active');
});
