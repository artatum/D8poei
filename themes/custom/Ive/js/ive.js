(function($, Drupal, drupalSettings) {
  Drupal.behaviors.collapsableBlock = {
    attach: function (context, settings) {
      $('.sidebar .block h2', context ).click(function() {
        $(this).parent().find('.content').slideToggle('fast');
      });
    }
  }
  Drupal.behaviors.externalLink = {
    attach: function (context, settings) {
      $('.page-wrapper a[href^="http://"]').attr('target','_blank');
     // $('a[href^="http://"]' ).before( "<img src='/D8/themes/custom/Ive/images/external-link.gif'>" );
    }
  }
  Drupal.behaviors.matchheight = {
    attach: function (context, settings) {
      $('.views-col').matchHeight();
    }
  }

})(jQuery, Drupal,drupalSettings);
