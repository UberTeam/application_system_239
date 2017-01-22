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

    protected $page_id;
    protected $form_names;
    protected $current_form;

//    protected $redis;
//
//    public function __construct($redis) {
//        $this->redis = $redis;
//    }
//
//    public static function create(ContainerInterface $container) {
//        return new static(
//            $container->get('application.connection')
//        );
//    }

    public function definePage($page_id) {
        $this->page_id = $page_id;

        $this->form_names = [
            ['\CompetitionEq', 'Оборудование Соревнования'],
            ['\SecretaryEq', 'Секретарское оборудование'],
            ['\RadioSubscribersTec', 'Радио абоненты'],
            ['\LaptopsTec', 'Ноутбуки'],
            ['\ElectricityEq', 'Электричество'],
            ['\InstallationWor', 'Установка экрана'],
            ['\WoodworkingVolumeWor', 'Объем древообработки'],
            ['\RallyEq', 'Специальное оборудование'],
        ];

        $this->current_form = $this->getFormName($page_id);
    }

    private function getFormName($page_id) {
        return $this->form_names[$page_id - 1];
    }

    public function showPage($page_id) {

        $this->definePage($page_id);

        $path_to_form = 'Drupal\application\Form' . $this->current_form[0];

        $output = \Drupal::formBuilder()->getForm($path_to_form);

//        $test_array = array(
//            'field_name' => 'marquee',
//            'value' => '1',
//            'title' => 'Шатер'
//        );
//
//        $db_logic = \Drupal::service('application.rally_model');
//
//        $db_logic->add($test_array);

        return array(
            '#theme' => 'rally',
            '#data' => array(
                'title' => $this->current_form[1],
                'form' => $output
            )
        );
    }

}