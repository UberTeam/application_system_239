<?php
/**
 * Created by PhpStorm.
 * User: Asus-PC
 * Date: 28.01.2017
 * Time: 15:23
 */

namespace Drupal\application\Controller;

use Drupal\Core\Routing\RouteMatch;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Cmf\Component\Routing\RouteObjectInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\application\Form;
use Drupal\Core\Controller\ControllerBase;


class PreviewController {

    protected $service;

    public function definePage($service_name) {
        $this->service = $service_name;

        $db_logic = \Drupal::service('application.service_model');

        $result = $db_logic->getPreview($this->service);
        return $result;
    }


    public function showPage($service_name) {

        $preview_data = $this->definePage($service_name);

        $output = array();

        foreach($preview_data as $i => $row) {
            if ($row['type'] !== 'hidden' && preg_match('/\S+/', $row['value'])) {
                if ($row['type'] === 'checkbox') {
                    $row['value'] = $row['value'] == 1 ? 'Да' : 'Нет';
                }
                if ($row['type'] !== 'datelist' || preg_match('/\d+\.\d+\.\d+\s\d+\:\d+/', $row['value'])) {
                    array_push($output, $row);
                }
            }
        }

        $path_to_form = 'Drupal\application\Form\SaveFormBase';

        $action_form = \Drupal::formBuilder()->getForm($path_to_form, $service_name);

        return array(
            '#theme' => 'preview_page',
            '#data' => array(
                'values' => $output,
                'form' => $action_form
            )
        );
    }

    public function saveApplication($service_name) {
        $db_logic = \Drupal::service('application.service_model');

        $result = $db_logic->saveApplication($service_name);
    }

}