//= include ../../node_modules/jquery/dist/jquery.js
//= include ../../node_modules/popper.js/dist/umd/popper.js
//= include ../../node_modules/bootstrap/dist/js/bootstrap.js
//= include ./navbar.js

$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});