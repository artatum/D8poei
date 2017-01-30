<?php

namespace Drupal\fancy_menu\Form;


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
   
  public function get_block_content(array &$form, FormStateInterface $form_state) {
//dpm(arg(3));
  global $base_url;
//dpm('get block content');
  $fx = get_fx();
  $fxid = $form_state->getValue(['choice']);
  \Drupal::state()->set('favorite_frontUX',$form_state->getValue(['choice']));
  \Drupal::state()->set('favorite_frontUX',$form_state->getValue(['choice']));
  \Drupal::state()->set('color_light_frontUX',$form_state->getValue(['color2']));
  \Drupal::state()->set('color_dark_frontUX',$form_state->getValue(['color']));
  \Drupal::state()->set('color_font_frontUX',$form_state->getValue(['colorfont']));
  \Drupal::state()->set('color4_frontUX',$form_state->getValue(['color4']));
  \Drupal::state()->set('color5_frontUX',$form_state->getValue(['color5']));
  //$fxattribute = $fx['fxattribute'];
 // $fxspan = $fx['fxspan'];
  $class = 'cl-effect-' . $fxid;
  $id = $class;
  $starting_color = $form_state->getValue(['color2']);
  $ending_color = $form_state->getValue(['color']);
  $font_color = $form_state->getValue(['colorfont']);
  $color4 = $form_state->getValue(['color4']);
  $color5 = $form_state->getValue(['color5']);
  $block = array(
    'subject' => '',
    'content' => '',
    );
    $items = array ();

$menu_name = 'main';
$mainmenu = get_menu_items($menu_name);
 /*   $menu_tree = \Drupal::menuTree();
// Build the typical default set of menu tree parameters.
$parameters = $menu_tree->getCurrentRouteMenuTreeParameters($menu_name);

// Load the tree based on this set of parameters.
$tree = $menu_tree->load($menu_name, $parameters);
//$mainmenu = menu_load_links($menu_name);
// Transform the tree using the manipulators you want.
$manipulators = array(
  // Only show links that are accessible for the current user.
  array('callable' => 'menu.default_tree_manipulators:checkAccess'),
  // Use the default sorting of menu links.
  array('callable' => 'menu.default_tree_manipulators:generateIndexAndSort'),
);
$tree = $menu_tree->transform($tree, $manipulators);

// Finally, build a renderable array from the transformed tree.
$menu = $menu_tree->build($tree);
*/

return $mainmenu;
    foreach ($mainmenu as $link) {
      $title = $link['link']['link_title'];
      $url = $base_url . '/' . $link['link']['link_path'];
      // dpm ($url);
      $items[] = array ( 
        'title' => $title,
        'href' => $url,     
        'data' => l($title,$url),
        'class' => array($class),
        'data-hover' => array($title),
        );
    }
    if (!empty($items)) { 
    $block['content'] = theme('fx_links', array(
      'links' => $items,  
      'classes' => (array('class' => array('links', 'fxmenu', 'inline', $class))),
      'fxid' => $fxid,
      'starting_color' => $starting_color,
      'ending_color' => $ending_color,
      'font_color' => $font_color,
      'color4' => $color4,
      'color5' => $color5,
      ));
    }  
  return $block['content'];
  }
  
  public function get_menu_items($menu_name) {
 $menu_tree = \Drupal::menuTree();
// Build the typical default set of menu tree parameters.
$parameters = $menu_tree->getCurrentRouteMenuTreeParameters($menu_name);
// Load the tree based on this set of parameters.
$tree = $menu_tree->load($menu_name, $parameters);
// Transform the tree using the manipulators you want.
$manipulators = array(
  // Only show links that are accessible for the current user.
  array('callable' => 'menu.default_tree_manipulators:checkAccess'),
  // Use the default sorting of menu links.
  array('callable' => 'menu.default_tree_manipulators:generateIndexAndSort'),
);
$tree = $menu_tree->transform($tree, $manipulators);
// Finally, build a renderable array from the transformed tree.
$menu = $menu_tree->build($tree);
       foreach ($menu as $$item) {
         ksm($item);
       }
return $menu;

  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $menu=$this->get_block_content($form, $form_state);

    ksm ($menu['#items']['menu_link_content:c4017fbc-d067-4df2-9fcd-f7e3e09ab822']['title']);
    ksm ($menu['#items']['menu_link_content:c4017fbc-d067-4df2-9fcd-f7e3e09ab822']['url']->getInternalPath());
     //   ksm ($menu['#items']['url']->internalPath);
  ksm ($menu);
  $toppings = array(
    '1' => '1',
    '2' => '2', 
    '3' => '3',
    '4' => '4',
    '5' => '5',
    '6' => '6',
    '7' => '7',
    '8' => '8',
    '9' => '9', 
    '10' => '10',
    '11' => '11',
    '12' => '12',
    '13' => '13',
    '14' => '14',
    '15' => '15',
    '16' => '16',
    '17' => '17',
    '18' => '18',
    '19' => '19', 
    '20' => '20',
    );
     $state = \Drupal::state()->get('fancy_favorite_display') ?: '19'; 
     $color_dark = \Drupal::state()->get('color_dark_frontUX') ?: '#ff0055'; 

  $form['choice'] = array (
    '#title' => t('Which effect do you want ? '),
    '#type' => 'radios',
    '#suffix' => '</br>', 
    '#options' => $toppings,
    '#default_value' => $state,
    '#ajax' => [
        // Could also use [ $this, 'colorCallback'].
        'callback' => '::colorCallback',
        'wrapper' => 'ajax',
      ],
    );  
    $form['title'] = [
      '#type' => 'markup',
      '#prefix' => '<div id="ajax">',
      '#suffix' => '</div>',
      '#title' => $this->t('Title'),
      '#markup' => $this->t('Title must be at least 5 characters in length.'),
      '#required' => TRUE,
    ];
  //    drupal_add_css('core/assets/vendor/farbtastic/farbtastic.css');
  //$form['#attached']['library'][] = '../../../core/assets/vendor/farbtastic';
  //$form['#attached']['library'][] = 'js/fancy';
  //dpm($form['#attached']['library']);
     /* '#description' => '<div id="colorpicker2568"></div>',
      '#attached' => array(
        'library' =>  array(
          'fancy_menu/js/fancy'
        ),
      ),   */
  $form['color2'] = array(
    '#type' => 'textfield',
    '#title' => t('Top Color'),
    '#default_value' => $color_dark,
    '#description' => '<div class="colorpicker-top"></div>',// pour colorpicker2568 top

    );
  $form['color'] = array(
    '#type' => 'textfield',
    '#title' => t('Bottom Color'),
    '#default_value' => $color_dark,
    '#description' => '<div class="colorpicker"></div>',// pour colorpicker - Bottom

    );

  

    

    // Group submit handlers in an actions element with a key of "actions" so
    // that it gets styled correctly, and so that other modules may add actions
    // to the form. This is not required, but is convention.
    $form['actions'] = [
      '#type' => 'actions',
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }
  
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
   */
  public function colorCallback(array &$form, FormStateInterface $form_state) {
    $temperature = $form_state->getValue('choice');
        $form['title'] = [
      '#type' => 'markup',
      '#prefix' => '<div id="ajax">',
      '#suffix' => '</div>',
      '#markup' =>  $temperature,
      
    ];

    return $form['title'];
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
    $title = $form_state->getValue('title');
    if (strlen($title) < 5) {
      // Set an error for the form element with a key of "title".
      $form_state->setErrorByName('title', $this->t('The title must be at least 5 characters long.'));
    }
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
    $title = $form_state->getValue('title');
    drupal_set_message(t('You specified a title of %title.', ['%title' => $title]));
  }

}
