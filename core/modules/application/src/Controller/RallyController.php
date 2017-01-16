<?php
/**
 * @file
 * Contains \Drupal\application\Controller\RallyController.
 */

namespace Drupal\application\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\application\Form;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RallyController extends ControllerBase {

    public function showPage() {

        $output = \Drupal::formBuilder()->getForm('Drupal\application\Form\RallyForm');

        return array(
            '#theme' => 'rally',
            '#data' => $output
        );
    }

}