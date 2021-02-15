jQuery(function($) {
  var $nav = $('#wrapper-hero #wrapper-static-hero'),
      $kicker1 = $nav.find('h3').eq(0),
      $kicker2 = $nav.find('h3').eq(1);
      navFunc($, $kicker1, $kicker2);
      navFunc($, $kicker2, $kicker1);
});

function navFunc($, $kicker1, $kicker2) {

  // trigger on h2 as well
  $kicker1.prev('h2').css('cursor', 'pointer').unbind('click').on('click', function() {
    $kicker1.trigger('click');
  });

  // main event action on h3
  $kicker1.show().unbind('click').on('click', function() {

    var $subnav = $(this).next('ul');

    // hide other
    $kicker2.next('ul').removeClass('active').find('.active').removeClass('active');

    // hide current + style h4
    if ($subnav.hasClass('active')) {
      $subnav.removeClass('active').find('.active').removeClass('active');

    // show current
    } else {
      $subnav.addClass('active').find('h4').unbind('click').on('click', function() {
        var $subnav2 = $(this).next('ul');


        // hide current
        if ($subnav2.hasClass('active')) {
          $subnav2.removeClass('active');
          // class on sub kicker (h4)
          $(this).removeClass('active');

        // show current
        } else {
          // hide all other (ul) + remove class on h4
          $subnav2.parent().parent().find('.active').removeClass('active');
          // class on sub kicker (h4)
          $(this).addClass('active');
          // show current
          $subnav2.addClass('active');
        }
      });
    }

  });

}
