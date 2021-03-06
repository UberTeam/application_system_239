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


class ServiceController {

    protected $page_id;
    protected $service;
    protected $form;
    protected $current_form;

    public function definePage($service, $page_id) {
        $this->page_id = $page_id;

        $this->service = $service;

        $all_forms = $this->getAllForms();

        $this->form = $all_forms[$service];

        $this->current_form = $this->getFormName($page_id);
    }

    private function getFormName($page_id) {
        return $this->form[$page_id - 1];
    }

    public function showPage($service_name, $page_id) {

        $this->definePage($service_name, $page_id);

        $path_to_form = 'Drupal\application\Form' . $this->current_form[0];

        $is_last_page = $this->lastPageFlag();
        
        $output = \Drupal::formBuilder()->getForm($path_to_form, $is_last_page);

        $page['#attached']['library'][] = 'application/application-form';

        return array(
            '#theme' => 'form_page',
            '#data' => array(
                'form_title' => $this->current_form[1],
                'form_names' => $this->form,
                'form' => $output
            )
        );
    }

    public function nextStep($form_state, $formobj) {

        $route_match = \Drupal::routeMatch();

        $result = array();

        $form = $form_state->getUserInput();

        foreach($form as $key => $field) {
            if (preg_match('/form/', $key) === 0 && $key !== 'submit') {
                array_push($result, array(
                    'table_name' => $formobj['#attributes']['data-drupal-selector'],
                    'field_name' => $key,
                    'value' => $field,
                    'title' => $formobj[$key]['#title'],
                    'service' => $route_match->getRawParameter('service_name')
                ));
            }
        }

//        $test_array = array(
//            'field_name' => 'marquee',
//            'value' => '1',
//            'title' => 'Шатер'
//        );
//
        $db_logic = \Drupal::service('application.rally_model');

        foreach ($result as $row) {
            $db_logic->add($row);;
        }

        $is_last = $this->lastPageFlag();

        $page_number = $route_match->getRawParameter('page_id');

        if (!$is_last) {
            $this->nextPage($form_state, $page_number);
        }
    }

    private function nextPage($form, $page_number) {

        $current_path = \Drupal::service('path.current')->getPath();

        $page_number += 1;

        $page_number .= '';

        $next_path = substr_replace($current_path, $page_number, -1);

        $path = $GLOBALS['base_root'] . $next_path;

        $url = Url::fromUri($path);

        return $form->setRedirectUrl($url);
    }

    private function getAllForms() {
        $all_forms = array (
            "rally" => array (
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\LaptopsTec', 'Ноутбуки'],
                ['\ElectricityEq', 'Электричество'],
                ['\InstallationWor', 'Установка экрана'],
                ['\WoodworkingVolumeWor', 'Объем древообработки'],
                ['\RallyEq', 'Специальное оборудование'],
            ),
            "bike_cross" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\BikeCrossEq', 'Специальное оборудование'],
            ),
            "obstacle" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\ObstacleEq', 'Специальное оборудование'],
            ),
            "orienteering" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\LaptopsTec', 'Ноутбуки'],
                ['\ElectricityEq', 'Электричество'],
                ['\OrienteeringEq', 'Специальное оборудование'],
            ),
            "bonfire" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\LaptopsTec', 'Ноутбуки'],
                ['\ElectricityEq', 'Электричество'],
                ['\InstallationWor', 'Установка экрана'],
                ['\WoodworkingVolumeWor', 'Объем древообработки'],
                ['\InstallationWor', 'Установка большого костра'],
                ['\BonfireEq', 'Специальное оборудование'],
            ),
            "photocross" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\LaptopsTec', 'Ноутбуки'],
                ['\ElectricityEq', 'Электричество'],
                ['\PhotocrossEq', 'Специальное оборудование'],
            ),
            "ktm" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\KtmEq', 'Специальное оборудование'],
            ),
            "tvt" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\TvtEq', 'Специальное оборудование'],
                ['\WoodworkingVolumeWor', 'Объем древообработки'],
            ),
            "ddm" => array(
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\DdmEq', 'Специальное оборудование'],
            ),
            "lunch" => array(
                ['\CompetitionEq', 'Оборудование соревнования'],
                ['\SecretaryEq', 'Секретарское оборудование'],
                ['\RadioSubscribersTec', 'Радио абоненты'],
                ['\WoodworkingVolumeWor', 'Объем древообработки'],
                ['\LunchEq', 'Специальное оборудование'],
            ),
        );
        return $all_forms;
    }

    public function lastPageFlag() {
        $route_match = \Drupal::routeMatch();

        $page_number = $route_match->getRawParameter('page_id');

        $last_page = count($this->form);

        return $last_page + 0 == $page_number + 0;
    }

}