<?php

namespace Drupal\fancy_menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use \Drupal\Core\GeneratedUrl;
/**
 * Provides the fancy menu block.
 *
 * @Block(
 *   id = "fancy_menu_block",
 *   admin_label = @Translation("Fancy Menu for fun"),
 *   category = @Translation("Custom block")
 * )
 */
class FancyMenuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $default = \Drupal::state()->get('frontUX');
    //ksm($default);
    //ksm(\Drupal::state()->get('frontUX'));

//    get_user_fx_array();
    global $base_url;
    $fxid = get_fx();
    $class = 'cl-effect-' . $fxid;

    $menu_name = 'main';
    $mainmenu = get_menu_items($menu_name);
    $items = prepare_block_items($mainmenu);
    
    //$starting_color = \Drupal::state()->get('color_dark_frontUX') ?: '#110055';
    $starting_color = \Drupal::state()->get('frontUX')[$fxid]['top'] ?: '#110055';
    $ending_color = \Drupal::state()->get('frontUX')[$fxid]['bottom'] ?: '#CC88CC';
    //ksm($ending_color);
    //$font_color =   \Drupal::state()->get('color_font_frontUX') ?: '#CC88CC';
    $font_color =   \Drupal::state()->get('frontUX')[$fxid]['font'] ?: '#CC88CC';
    //$color4 = \Drupal::state()->get('color4_frontUX') ?: '#110055';
    $color4 = \Drupal::state()->get('frontUX')[$fxid]['color4'] ?: '#110055';
    $color5 = \Drupal::state()->get('frontUX')[$fxid]['color5'] ?: '#CC88CC';
    $fontsize = \Drupal::state()->get('frontUX')[$fxid]['fontsize'];
    $fontfamily = \Drupal::state()->get('frontUX')[$fxid]['fontfamily'];
    $block = array(
      '#attached' => array(
        'library' => array('fancy_menu/fancy-color', 'fancy_menu/tympanus', 'fancy_menu/fancy-picker',),
      ),
      '#theme' => 'fx_links',
      '#links' => $items,  
      '#classes' => array('class' => array('links', 'fxmenu', 'inline', $class)),       
      '#cache' => array('max-age' => 0),      
      '#fxid' =>  \Drupal::state()->get('favorite_frontUX') ?: '19' ,
      '#starting_color' =>  $starting_color ,
      '#ending_color' =>  $ending_color  ,
      '#font' =>  $font_color ,
      '#color4' =>   $color4,
      '#color5' =>    $color5,
      '#fontsize' => $fontsize ,
      '#fontfamily' => $fontfamily ,
    );

  return $block;
  }
}
