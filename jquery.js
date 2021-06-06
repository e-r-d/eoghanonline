//highlights category in NAV bar on hover//
// just art and design//
$(function() {
  $('.alife3dmagnet, .world, .globeteeshots, .trueblue, .rock, .bunb, .mcnike, .stayinside').hover(function() {
    $('.andlink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.andlink').css('text-decoration', 'none');
  });
});


// art and design + Photography//
$(function() {
  $('.tobaccointernet, .wewontgohome, .tobaccointernetexhibit, .lightlink').hover(function() {
    $('.andlink, .photolink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.andlink, .photolink').css('text-decoration', 'none');
  });
});

// art and design + Photography + personal//
$(function() {
  $('.eoghanalife').hover(function() {
    $('.homelink, .photolink, .andlink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.homelink, .photolink, .andlink').css('text-decoration', 'none');
  });
});


// art and design + personal//
$(function() {
  $('.dempseydewalt').hover(function() {
    $('.homelink, .andlink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.homelink, .andlink').css('text-decoration', 'none');
  });
});


// just Photography//
$(function() {
  $('.deerlightleak, .nuns, .karshe, .vhs').hover(function() {
    $('.photolink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.photolink').css('text-decoration', 'none');
  });
});


// Just Personal//
$(function() {
  $('.passport').hover(function() {
    $('.homelink').css('text-decoration', 'underline');
  }, function() {
    // on mouseout, reset the background colour
    $('.homelink').css('text-decoration', 'none');
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
