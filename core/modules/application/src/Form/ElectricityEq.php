<?php
/**
 * @file
 * Contains \Drupal\application\Form\ElectricityEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ElectricityEq extends WrapperFormBase {

    public function getFormId() {
        return 'electricity_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['connected_devices'] = array(
            '#type' => 'number',
            '#title' => 'Количество подключаемых устройств',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['sockets'] = array(
            '#type' => 'hidden',
            '#title' => 'Количество необходимых розеток',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['sockets_extenders'] = array(
            '#type' => 'hidden',
            '#title' => 'Количество удлинителей',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['consumption_time'] = array(
            '#type' => 'datelist',
            '#title' => 'Время окончания потребления',
            '#required' => TRUE,
//            '#date_year_range'=>  '1900:2050',
//            '#date_time_format' => 'H:i:s',
//            '#date_date_format' => 'Y-m-d',
//            '#description' => 'Введите дату',
        );

        $form = InstallationWor::buildForm($form, $form_state, "electricity_eq");

        $form['install_datetime']['#title'] = 'Срок готовности по работам установки';


        return $form;
    }
//
//    public function validateForm(array &$form, FormStateInterface $form_state) {
//        //    if (strlen($form_state->getValue('name')) < 5) {
//        //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
//        //    }
//    }
//
//    public function submitForm(array &$form, FormStateInterface $form_state) {
////        drupal_set_message($this->t('@one, @two', array(
////            '@one' => $form_state->getValue('competition_eq'),
////            '@two' => $form_state->getValue('secretary_eq')
////        )));
//    }

}