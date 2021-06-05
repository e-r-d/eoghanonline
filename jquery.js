//highlights category in NAV bar on hover//
//art and design//
$(function() {
  $('.alife3dmagnet, .world, .globeteeshots, .trueblue, .rock, .bunb, .mcnike, .stayinside, .tobaccointernet, .wewontgohome, .tobaccointernetexhibit, .eoghanalife, .lightlink').hover(function() {
    $('.homelink, .archivelink, .slashes, .photolink').css({
   'filter'         : 'blur(4px)',
   '-webkit-filter' : 'blur(4px)',
   '-moz-filter'    : 'blur(4px)',
   '-o-filter'      : 'blur(4px)',
   '-ms-filter'     : 'blur(4px)'
});
  }, function() {
    // on mouseout, reset the background colour
    $('.homelink, .archivelink, .slashes, .photolink').css({
   'filter'         : 'blur(0px)',
   '-webkit-filter' : 'blur(0px)',
   '-moz-filter'    : 'blur(0px)',
   '-o-filter'      : 'blur(0px)',
   '-ms-filter'     : 'blur(0px)'});
  });
});


//Photography//
$(function() {
  $('.deerlightleak, .nuns, .karshe, .vhs, .tobaccointernet, .wewontgohome, .tobaccointernetexhibit, .eoghanalife, .lightlink').hover(function() {
    $('.andlink, .homelink, .archivelink, .slashes').css({
   'filter'         : 'blur(4px)',
   '-webkit-filter' : 'blur(4px)',
   '-moz-filter'    : 'blur(4px)',
   '-o-filter'      : 'blur(4px)',
   '-ms-filter'     : 'blur(4px)'
});
  }, function() {
    // on mouseout, reset the background colour
    $('.andlink, .homelink, .archivelink, .slashes').css({
   'filter'         : 'blur(0px)',
   '-webkit-filter' : 'blur(0px)',
   '-moz-filter'    : 'blur(0px)',
   '-o-filter'      : 'blur(0px)',
   '-ms-filter'     : 'blur(0px)'});
  });
});


//Personal//
$(function() {
  $('.passport, .dempseydewalt, .eoghanalife').hover(function() {
    $('.andlink, .photolink, .archivelink, .slashes').css({
   'filter'         : 'blur(4px)',
   '-webkit-filter' : 'blur(4px)',
   '-moz-filter'    : 'blur(4px)',
   '-o-filter'      : 'blur(4px)',
   '-ms-filter'     : 'blur(4px)'
});
  }, function() {
    // on mouseout, reset the background colour
    $('.andlink, .photolink, .archivelink, .slashes').css({
   'filter'         : 'blur(0px)',
   '-webkit-filter' : 'blur(0px)',
   '-moz-filter'    : 'blur(0px)',
   '-o-filter'      : 'blur(0px)',
   '-ms-filter'     : 'blur(0px)'});
  });
});



/*
$(function() {
$('.eoghanalife').hover(function(){
  $('.eoghanalife').show();
});
});
*/



$(function(){
  $(".eoghanalife, .people").mouseover(function(){
    $(".people").hide();
  });
});

$(function(){
  $(".eoghanalife, .people").mouseout(function(){
    $(".people").show();
  });
});
