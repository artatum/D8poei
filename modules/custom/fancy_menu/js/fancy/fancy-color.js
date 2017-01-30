  //alert('loto');
        //fx = jQuery('#choice').val();
       //  jQuery(choice).trigger("click");
      // jQuery(choice).trigger("change"); 
    jQuery(document).ready(function() {
      choice = '#edit-choice-' +  jQuery('#edit-choice input[type=\"radio\"]:checked').val(); 
      //console.log(jQuery( '.form-item-color .farbtastic' ));
      //a = jQuery( '.form-item-color .farbtastic' );
      //a.setColor('#aa2288');
      jQuery('.colorpicker').farbtastic('#edit-color');
      jQuery('.colorpicker2').farbtastic('#edit-color2');
      jQuery('.colorpicker3').farbtastic('#edit-colorfont');
      jQuery('.colorpicker4').farbtastic('#edit-color4');
      jQuery('.colorpicker5').farbtastic('#edit-color5');
        //test font options
      var global = drupalSettings.global_array;
      var fxid = jQuery('#edit-choice input[type=\"radio\"]:checked').val(); 

      fonts = global[0];
      jQuery.each(fonts, function(key, value) {
        jQuery('#edit-font-family option[value="' + key + '"]').attr('style', 'font-family:' + key + ';  text-transform: uppercase;');  
              
      });  

      jQuery( '.farbtastic' ).mouseup(function() {       
        choice = '#edit-choice-' +  jQuery('#edit-choice input[type=\"radio\"]:checked').val();
        console.log("colorpicker  mouseUp controles choice = " + choice);
        fxid = jQuery('#edit-choice input[type=\"radio\"]:checked').val(); 
        console.log("colorpicker  mouseUp global choice = " + fxid);
        var glob = drupalSettings.global_array;
        update_global_js();
        
        mySubmit ();
      }); 
      
      jQuery("#edit-choice .form-radio").click(function(e){        
        choice = jQuery('#edit-choice input[type=\"radio\"]:checked').val();
        console.log("radio click CONTROLES choice = " + choice);
        fxid = jQuery('#edit-choice input[type=\"radio\"]:checked').val(); 
        console.log("radio click global JS choice = " + fxid);
        var glob = drupalSettings.global_array;
        //console.debug(glob);
        var fx_r = glob[fxid];
        var top = fx_r.top;
        var bottom = fx_r.bottom;
        var font = fx_r.font;
        console.log("radio click GLOBAL JS font = " + font);
        var color4 = fx_r.color4;
        var color5 = fx_r.color5;
        var fontsize = fx_r.fontsize;
        console.debug(fontfamily);
        var fontfamily = fx_r.fontfamily;        
        var colorPicker = jQuery.farbtastic('#colorpicker');
        colorPicker.setColor(top);
         colorPicker = jQuery.farbtastic('#colorpicker2');
        colorPicker.setColor(bottom);
         colorPicker = jQuery.farbtastic('#colorpicker3');
        colorPicker.setColor(font);
         colorPicker = jQuery.farbtastic('#colorpicker4');
        colorPicker.setColor(color4);
         colorPicker = jQuery.farbtastic('#colorpicker5');
        colorPicker.setColor(color5);
        jQuery('#edit-font-size').val(fontsize);
        jQuery('#edit-font-family').val(fontfamily);
        
        mySubmit ();
        });
        
        jQuery("#edit-font-size").change(function(e){
          console.log("change size");
          update_global_js();
          mySubmit();
        });
        jQuery("#edit-font-family").change(function(e){ 
          update_global_js();
          mySubmit();
        });
        
        jQuery( '.form-text' ).keypress(function(e) { 
          if(e.which == 13) {
//            console.log('You pressed enter!');
            mySubmit ();
          }
        });
    });
    
    function update(color) { 
     }
    function  update_global_js() {
      var fxid = jQuery('#edit-choice input[type=\"radio\"]:checked').val(); 

      var glob = drupalSettings.global_array;

      glob[fxid].top = jQuery('#edit-color').val();
      glob[fxid].bottom = jQuery('#edit-color2').val();
      glob[fxid].font = jQuery('#edit-colorfont').val();
      glob[fxid].color4 = jQuery('#edit-color4').val();
      glob[fxid].color5 = jQuery('#edit-color5').val();
      glob[fxid].fontsize = jQuery('#edit-font-size').val();
      glob[fxid].fontfamily = jQuery('#edit-font-family').val();
      drupalSettings.global_array = glob;
           return glob;
     
    }
/*
    jQuery("#edit-choice .form-radio").mouseup(function(e){
       fxid = drupalSettings.favorite_frontUX;
       // mySubmit ();
          
      });
    });
    function simulateKeyPress(character) {
  jQuery.event.trigger({ type : 'keypress', which : character.charCodeAt(13) });
}*/
    function mySubmit () {
      jQuery("#edit-click-0").trigger("click");
      jQuery("#edit-click-0").trigger("change");
         // console.log("submit");
    }
 /*   
(function ($, Drupal) {
  Drupal.behaviors.fancyMenuBehavior = {
    attach: function (context, settings) {
     $(context).find('input.fancyMenuBehavior').once('fancyMenuBehavior').each(function () {
      // Apply the myCustomBehaviour effect to the elements only once.
        console.log(drupalSettings.top);
    });
    }
  };
})(jQuery, Drupal);*/


