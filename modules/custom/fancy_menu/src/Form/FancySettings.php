<?php

namespace Drupal\fancy_menu\Form;

use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Menu\MenuTreeParameters; 
use Drupal\Core\Menu\MenuLinkTreeInterface;

/**
 * Implements the SimpleForm form controller.
 *
 * This example demonstrates a simple form with a singe text input element. We
 * extend FormBase which is the simplest form base class used in Drupal.
 *
 * @see \Drupal\Core\Form\FormBase
 */
class FancySettings extends FormBase {

  public function get_fx_array() {
    return $this::$fx_array;
  }
  /**
   * Build the simple form.
   *
   * A build form method constructs an array that defines how markup and
   * other form elements are included in an HTML form.
   *
   * @param array $form
   *   Default form array structure.
   * @param FormStateInterface $form_state
   *   Object containing current form state.
   *
   * @return array
   *   The render array defining the elements of the form.
   */
  
  //fired when js clicks on hidden radio button that submits the form and fire the replacement in ajax
  public function get_block_content(array &$form, FormStateInterface $form_state) {
    
    global $base_url;
    // ---------READ ACTUAL CONTROLS VALUES -----------------
    $fxid = $form_state->getValue(['choice']); 
    $starting_color = $form_state->getValue(['color']);
    $ending_color = $form_state->getValue(['color2']);
    $colorfont = $form_state->getValue(['colorfont']);
    $color4 = $form_state->getValue(['color4']);
    $color5 = $form_state->getValue(['color5']);
    $fontsize = $form_state->getValue(['font-size']);
    $fontfamily = $form_state->getValue(['font-family']);
    
    // ---------READ GLOBAL PHP VALUES -----------------
    $global_array = \Drupal::state()->get('frontUX');
    //ksm($global_array);
    // ---------STORE FX CLICKED VALUE INTO GLOBAL PHP-----------------
    \Drupal::state()->set('favorite_frontUX', $fxid);
    
    // ---------STORE FX TO JS -----------------------
    $form['#attached']['drupalSettings']['favorite_frontUX'] = $fxid;
    
    //---------- SAVE CONTROLS VALUES TO GLOBAL PHP--------------------
      $global_array[$fxid] = array(
        'top' => $starting_color,
        'bottom' => $ending_color,
        'font' => $colorfont,
        'color4' => $color4,
        'color5' => $color5,
        'fontsize' =>  $fontsize,
        'fontfamily' => $fontfamily ,      
        );
    \Drupal::state()->set('frontUX', $global_array); 

    // ---------STORE GLOBAL TO JS VARIABLES
    $form['#attached']['drupalSettings']['global_array'] = $global_array;

    //------------BUILD UP NEW BLOCK-----------
    $class = 'cl-effect-' . $fxid;
    $items = array ();
    $menu_name = 'main';
    $mainmenu = get_menu_items($menu_name);
    $items = prepare_block_items($mainmenu);
    if (!empty($items)) { 
      $block = array(
      '#attached' => array(
        'library' => array('fancy_menu/fancy-color', 'fancy_menu/tympanus', 'fancy_menu/fancy-picker',),
        ),
      '#theme' => 'fx_links',
      '#links' => $items,  
      '#classes' => (array('class' => array('links', 'fxmenu', 'inline', $class))),
      '#fxid' => $fxid,
      '#starting_color' => $starting_color,
      '#ending_color' => $ending_color,
      '#font' => $colorfont,
      '#color4' => $color4,
      '#color5' => $color5,
      '#fontsize' => $fontsize ,
      '#fontfamily' => $fontfamily ,

      );
    }  
  return $block;
  }  

  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $global_array = get_user_fx_array();
    $form['#attached']['drupalSettings']['global_array'] = $global_array;
    $toppings = array(
      '1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10','11' => '11','12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20',
      );
    $fontsizes = array(
      '9px' => '9', '10px' => '10','11px' => '11', '12px' => '12', '13px' => '13', '14px' => '14','15px' => '15', '16px' => '16', '17px' => '17', '18px' => '18', '19px' => '19', '20px' => '20','21px' => '21','25px' => '25','30px' => '30','35px' => '35','40px' => '40','45px' => '45',
      
      );
      /*'12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20',
      );*/
  /*  $fonts =  array (
    'abyssopelagic' => 'Abyssopelagic',
    'Ailerons' => 'Ailerons',
    'Alcubierre' => 'Alcubierre',
    'CovesBold' => 'Coves Bold',
    'CovesLight' => 'Coves Light',
    'Kayak Sans Regular' => 'Kayak Sans',
    'King-Basil-Lite' => 'King Basil Lite',
    'LeagueGothic-Regular' => 'League Gothic',
    'Lombok' => 'Lombok',
    'Lora' => 'Lora',
    'Lora-Italic' => 'Lora Italic',
    'Lora-Bold' => 'Lora Bold',
    'Lora-BoldItalic' => 'Lora Bold Italic',
    'Lovelo Black' => 'Lovelo Black',
    'Lovelo Line Bold' => 'Lovelo Line Bold',
    'Lovelo Line Light' => 'Lovelo Line Light',
    'open_sansregular' => 'Open Sans',
    'Times' => 'Times',
    'Georgia, Serif' => 'Georgia', 
    'Palatino, serif' => 'Palatino Linotype',
    'Arial' => 'Arial', 
    'Comic Sans MS' =>  'Comic Sans MS',
    'Impact' => 'Impact' ,
    'Lucida Sans Unicode' => 'Lucida Sans Unicode',
    'Trebuchet MS' => 'Trebuchet MS',
    'Verdana' => 'Verdana',
    );*/
  $fonts = $global_array[0];
    $fx_id = \Drupal::state()->get('favorite_frontUX') ?: '19'; 
    $form['#attached']['drupalSettings']['favorite_frontUX'] = $fx_id;
    $color_dark_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['top'] ?: '#ff0066'; 
    $color_light_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['bottom'] ?: '#ff0055'; 
    $color_font_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['font'] ?: '#ff6655'; 
    $color4_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['color4'] ?: '#ff7755'; 
    $color5_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['color5'] ?: '#ff3355'; 
    $fontfamily_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['fontfamily'] ?: '#ff3355'; 
    $fontsize_frontUX = \Drupal::state()->get('frontUX')[$fx_id]['fontsize'] ?: '#ff3355'; 

    $form['choice'] = array (
      '#title' => t('Which effect do you want ? '),
      '#type' => 'radios',
      '#suffix' => '</br>', 
      '#options' => $toppings,
      '#default_value' => $fx_id,  
/*     '#ajax' => [
        'callback' => '::get_block_content',
        'wrapper' => 'color-1',
        ],  */ 
    ); 
    $form['font-size'] = array (
      '#title' => t('Font Size '),
      '#type' => 'select',
      '#options' => $fontsizes,
      '#default_value' => $fontsize_frontUX,  
    );
    $form['font-family'] =  array(
      '#title' => t('Font Family'),
      '#suffix' => '</br>', 
      '#type' => 'select',
      '#title' => t('Font Family'),
      '#default_value' =>  $fontfamily_frontUX,
      '#options' => $fonts,
      
    );
    $form['color'] = array(
      '#type' => 'textfield',
      '#title' => t('Top Color'),
      '#default_value' => $color_dark_frontUX,
      '#description' => '<div class="colorpicker" id="colorpicker"></div>',
    );
    $form['color2'] = array(
      '#type' => 'textfield',
      '#title' => t('Bottom Color'),
      '#default_value' => $color_light_frontUX,
      '#description' => '<div class="colorpicker2" id="colorpicker2"></div>',
    );
    $form['colorfont'] = array(
      '#type' => 'textfield',
      '#title' => t('Font Color'),
      '#default_value' => $color_font_frontUX,
      '#description' => '<div class="colorpicker3" id="colorpicker3"></div>',            
    );
    $form['color4'] = array(   
      '#type' => 'textfield',
      '#title' => t('Color 4'),
      '#default_value' => $color4_frontUX,
      '#description' => '<div class="colorpicker4" id="colorpicker4"></div>',         
    );
    $form['color5'] = array(     
     '#type' => 'textfield',
      '#title' => t('Color 5'),
      '#default_value' => $color5_frontUX,
      '#description' => '<div class="colorpicker5" id="colorpicker5"></div>',      
    );    
    $form['click'] = array(    
      '#title' => t('fake'),
      '#options' => array('1'),  
      '#type' => 'radios',
      '#ajax' => [
        'callback' => '::get_block_content',
        'wrapper' => 'color-1',
      ],    
    ); 
    $form['actions'] = [
        '#type' => 'actions',
      ];
      // Add a submit button that handles the submission of the form.
    /*  $form['actions']['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit'),
   
      ];*/
    return $form;
  }

  /**
   * Getter method for Form ID.
   *
   * The form ID is used in implementations of hook_form_alter() to allow other
   * modules to alter the render array built by this form controller.  it must
   * be unique site wide. It normally starts with the providing module's name.
   *
   * @return string
   *   The unique ID of the form defined by this class.
   */
  public function getFormId() {
    return 'fancy_form';
  }

  /**
   * Implements form validation.
   *
   * The validateForm method is the default method called to validate input on
   * a form.
   *
   * @param array $form
   *   The render array of the currently built form.
   * @param FormStateInterface $form_state
   *   Object describing the current state of the form.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  /*  $title = $form_state->getValue('title');
    if (strlen($title) < 5) {
      // Set an error for the form element with a key of "title".
      $form_state->setErrorByName('title', $this->t('The title must be at least 5 characters long.'));
    }*/
  }

  /**
   * Implements a form submit handler.
   *
   * The submitForm method is the default method called for any submit elements.
   *
   * @param array $form
   *   The render array of the currently built form.
   * @param FormStateInterface $form_state
   *   Object describing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /*
     * This would normally be replaced by code that actually does something
     * with the title.
     */
    /*$title = $form_state->getValue('title');
    drupal_set_message(t('You specified a title of %title.', ['%title' => $title]));*/
  }
}
    //$ending_color = \Drupal::state()->get('frontUX')[$fx]['bottom'] ?: '#110055';
  //$colorfont = \Drupal::state()->get('frontUX')[$fx]['font'] ?: '#110055';
  //$color4 = \Drupal::state()->get('frontUX')[$fx]['color4'] ?: '#110055';
  //$color5 = \Drupal::state()->get('frontUX')[$fx]['color5'] ?: '#110055';

   /* $current_item = array(
    $fxid => array(
      'top' => $starting_color,
      'bottom' => $ending_color,
      'font' => $colorfont,
      'color4' => $color4,
    /*  'color5' => $color5,
      'fontsize' => '1.55em',
      'fontfamily' => 'open_sansregular',      
    
  ); )*/
  //ksm("buidform - fx = " . $fx_id);
   // $color_dark_frontUX = \Drupal::state()->get('color_dark_frontUX') ?: '#ff0055'; 
   // $color_light_frontUX = \Drupal::state()->get('color_light_frontUX') ?:'#ff0055'; 
  //  $color_font_frontUX = \Drupal::state()->get('color_font_frontUX') ?:'#ff0055'; 
  //  $color4_frontUX = \Drupal::state()->get('color4_frontUX') ?:'#ff0055'; 
   //  $color5_frontUX = \Drupal::state()->get('color5_frontUX') ?:'#ff0055'; 

       /* '#ajax' => [
            // Could also use [ $this, 'colorCallback'].
            'callback' => '::get_block_content',
            'wrapper' => 'color-1',
          ],*/
    /*
  \Drupal::state()->set('color_dark_frontUX',$form_state->getValue(['color']));
  \Drupal::state()->set('color_light_frontUX',$form_state->getValue(['color2']));
  \Drupal::state()->set('color_font_frontUX',$form_state->getValue(['colorfont']));
  \Drupal::state()->set('color4_frontUX',$form_state->getValue(['color4']));
  \Drupal::state()->set('color5_frontUX',$form_state->getValue(['color5']));
  */
  /**
   * Implements callback for Ajax event on color selection.
   *
   * @param array $form
   *   From render array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Current state of form.
   *
   * @return array
   *   Color selection section of the form.
   
  public function colorCallback(array &$form, FormStateInterface $form_state) {
    $temperature = $form_state->getValue('choice');
        $form['title'] = [
      '#type' => 'markup',
      '#prefix' => '<div id="ajax">',
      '#suffix' => '</div>',
      '#markup' =>  $temperature,
      
    ];

    return $form['title'];
  }*/
  //ksm($global_array);
//ksm("fxid = $fxid");
//ksm("gbc CONTROLS font = $colorfont");
//ksm("gbc GLOBAL FONT " . $global_array[$fxid]['font']);
//ksm("gbc GLOBAL JS FONT SENT : ");
//ksm($form['#attached']['drupalSettings']['global_array'][$fxid]['font']);
//ksm($global_array);
