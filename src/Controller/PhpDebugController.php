<?php

/**
* @file
* Contains \Drupal\php_debug\Controller\PhpDebugController.
*/

namespace Drupal\php_debug\Controller;

use Drupal\Core\Controller\ControllerBase;
//use Drupal\Core\Field;

/**
* Returns responses for php_debug module routes.
*/
class PhpDebugController extends ControllerBase {
  /**
   * Builds the PHP Debug page.
   *
   * @return array
   *   Array of page elements to render.
   */
  public function PhpDebugPage() {
    $output = array(
      '#markup' => 'Hello',
    );
    return $output;
  }
}