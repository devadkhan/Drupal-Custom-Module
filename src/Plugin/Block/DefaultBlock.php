<?php

namespace Drupal\dummy\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'dropdown' => One,
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['username'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Username'),
      '#default_value' => $this->configuration['username'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];
    $form['dropdown'] = [
      '#type' => 'select',
      '#title' => $this->t('Dropdown'),
      '#description' => $this->t('Dummy dropdown'),
      '#options' => ['One' => $this->t('One'), 'Two' => $this->t('Two'), 'Three' => $this->t('Three'), 'Four' => $this->t('Four')],
      '#default_value' => $this->configuration['dropdown'],
      '#size' => 5,
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['username'] = $form_state->getValue('username');
    $this->configuration['dropdown'] = $form_state->getValue('dropdown');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'default_block';
    $build['#conten'][] = $this->configuration['username'];
    $build['#conten'][] = $this->configuration['dropdown'];

    return $build;
  }

}
