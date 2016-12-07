<?php
/**
  * @file
  * Contains \Drupal\application\Controller\ApplicationFormController.
  */

namespace Drupal\application\Controller;

use Drupal\Core\Controller\ControllerBase;

class ApplicationFormController extends ControllerBase {

public function helloWorld() {
    $output = array();

    $output['#title'] = 'HelloWorld page title';

    $output['#markup'] = 'Hello World!';

    return $output;
}

}