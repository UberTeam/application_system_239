<?php
/**
 * @file
 * Contains \Drupal\application\Form\RadioSubscribersTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RadioSubscribersTec extends WrapperFormBase {

    public function getFormId() {
        return 'radio_subscribers_tec';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'radio_subscribers_tec'
        );

        $form['usage_time'] = array(
            '#type' => 'select',
            '#title' => 'Период использования',
            '#options' => [
                'Временно' => 'Временно',
                'Постоянно' => 'Постоянно'
            ],
            'table_name' => 'radio_subscribers_tec'
        );

        $form['temporary'] = array(
            '#type' => 'container',
            '#title' => 'Срок использования временных',
            '#states' => array(
                'disabled' => array(
                    'select[name="usage_time"]' => array('value' => 'Постоянно')
                ),
            ),
        );

        $form['temporary']['temporary_start'] = array(
            '#type' => 'datelist',
            '#title' => 'Начало:',
            '#states' => array(
                'disabled' => array(
                    'select[name="usage_time"]' => array('value' => 'Постоянно')
                ),
            ),
            'table_name' => 'radio_subscribers_tec'
        );
        $form['temporary']['temporary_end'] = array(
            '#type' => 'datelist',
            '#title' => 'Окончание:',
            '#states' => array(
                'disabled' => array(
                    'select[name="usage_time"]' => array('value' => 'Постоянно')
                ),
            ),
            'table_name' => 'radio_subscribers_tec'
        );

        return $form;
    }

//    public function validateForm(array &$form, FormStateInterface $form_state) {
//    //    if (strlen($form_state->getValue('name')) < 5) {
//    //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
//    //    }
//    }
//
//    public function submitForm(array &$form, FormStateInterface $form_state) {
////        drupal_set_message($this->t('@one, @two', array(
////            '@one' => $form_state->getValue('competition_eq'),
////            '@two' => $form_state->getValue('secretary_eq')
////        )));
//    }

}