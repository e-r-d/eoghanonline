//highlights category in NAV bar on hover//
//art and design//
$(function() {
  $('.alife3dmagnet, .world, .globeteeshots, .trueblue, .rock, .bunb, .mcnike, .stayinside, .tobaccointernet, .wewontgohome, .tobaccointernetexhibit, .eoghanalife, .lightlink').hover(function() {
    $('#andlink').css('color', 'blue');
  }, function() {
    // on mouseout, reset the background colour
    $('#andlink').css('color', '');
  });
});


//Photography//
$(function() {
  $('.deerlightleak, .nuns, .karshe, .vhs, .tobaccointernet, .wewontgohome, .tobaccointernetexhibit, .eoghanalife, .lightlink').hover(function() {
    $('#photolink').css('color', 'blue');
  }, function() {
    // on mouseout, reset the background colour
    $('#photolink').css('color', '');
  });
});


//Personal//
$(function() {
  $('.passport, .dempseydewalt, .email, .eoghanalife').hover(function() {
    $('#homelink').css('color', 'blue');
  }, function() {
    // on mouseout, reset the background colour
    $('#homelink').css('color', '');
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
