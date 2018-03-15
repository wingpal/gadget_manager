<?php
/**
 * @file
 * Contains Drupal\gadget_manager\Form\SettingsForm.
 */
namespace Drupal\gadget_manager\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Class SettingsForm.
 *
 * @package Drupal\gadget_manager\Form
 */
class GadgetManagerConfigurationForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'gadget_manager.settings',
    ];
  }
  /**
   * Set form id.
   */
  public function getFormId() {
    return 'gadget_manager_form';
  }
  /**
   * Build a form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('gadget_manager.settings');
    $form['gadget1'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Set your iframe code for Gadget1'),
      '#default_value' => $config->get('gadget1'),
    );
    $form['gadget2'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Set your iframe code for Gadget2'),
      '#default_value' => $config->get('gadget2'),
    );
    $form['gadget3'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Set your iframe code for Gadget3'),
      '#default_value' => $config->get('gadget3'),
    );
    return parent::buildForm($form, $form_state);
  }
  /**
   * Validate form.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * Submit data
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $config = $this->config('gadget_manager.settings');
    $config->set('gadget1', $values['gadget1']);
    $config->set('gadget2', $values['gadget2']);
    $config->set('gadget3', $values['gadget3']);
    $config->save();
    drupal_set_message("Uspešno ste snimili iframe-ove za vaše gadget-e?");
  }

}