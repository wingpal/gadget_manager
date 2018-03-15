<?php

namespace Drupal\gadget_manager\Controller;

use Drupal\Core\Controller\ControllerBase;
//use Symfony\Component\HttpFoundation\Response;


class GadgetManagerController extends ControllerBase {

  /**
   * Page for gadgets.
   *
   * @return array
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Ovde će biti postavljeni naši gadgeti'),
    ];
  }

}