<?php

namespace Drupal\gadget_manager\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Gadget3' Block.
 *
 * @Block(
 *   id = "gadget3",
 *   admin_label = @Translation("Gadget3"),
 *   category = @Translation("Presentation"),
 * )
 */
class Gadget3 extends BlockBase {

  /**
   * Block build.
   */
  public function build() {
    $config = \Drupal::service('config.factory')->getEditable('gadget_manager.settings');
    $gadget3 = $config->get('gadget3');

    return [
      '#children' => $gadget3,
    ];
  }


}