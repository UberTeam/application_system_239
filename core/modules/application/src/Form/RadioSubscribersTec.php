<?php
/**
 * @file
 * Contains \Drupal\application\Form\RadioSubscribersTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RadioSubscribersTec extends FormBase {

    public function getFormId() {
        return 'radio_subscribers_tec';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['usage_time'] = array(
            '#type' => 'select',
            '#title' => 'Период использования',
            '#options' => [
                '1' => 'Временно',
                '2' => 'Постоянно'
            ]
        );

        $form['temporary_time'] = array(
            '#type' => 'textfield',
            '#title' => 'Срок использования временных',
            '#states' => array(
                'disabled' => array(
                    'select[name="usage_time"]' => array('value' => '2')
                ),
            ),
        );

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
    //    if (strlen($form_state->getValue('name')) < 5) {
    //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
    //    }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
//        drupal_set_message($this->t('@one, @two', array(
//            '@one' => $form_state->getValue('competition_eq'),
//            '@two' => $form_state->getValue('secretary_eq')
//        )));
    }

}