<?php

namespace Drupal\gadget_manager\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Gadget2' Block.
 *
 * @Block(
 *   id = "gadget2",
 *   admin_label = @Translation("Gadget2"),
 *   category = @Translation("Presentation"),
 * )
 */
class Gadget2 extends BlockBase {

  /**
   * Block build.
   */
  public function build() {
    $config = \Drupal::service('config.factory')->getEditable('gadget_manager.settings');
    $gadget2 = $config->get('gadget2');

    return [
      '#children' => $gadget2,
    ];
  }

}