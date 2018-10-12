<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */
 
namespace Drupal\first_module\Controller;
 
use Drupal8\Core\Controller\ControllerBase;
 
class FirstController extends ControllerBase {
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => t('Hello world!'),
    ];
  }
}