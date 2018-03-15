<?php

namespace Drupal\gadget_manager\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Gadget1' Block.
 *
 * @Block(
 *   id = "gadget1",
 *   admin_label = @Translation("Gadget1"),
 *   category = @Translation("Presentation"),
 * )
 */
class Gadget1 extends BlockBase {

  /**
   * Block build.
   */
  public function build() {
    $config = \Drupal::service('config.factory')->getEditable('gadget_manager.settings');
    $gadget1 = $config->get('gadget1');

    return [
      '#children' => $gadget1,
    ];
  }

}