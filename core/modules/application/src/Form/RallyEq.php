<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RallyEq extends FormBase {

    public function getFormId() {
        return 'rally_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['swimming_candles'] = array(
            '#type' => 'number',
            '#title' => 'Свечи плавающие',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['video_broadcast'] = array(
            '#type' => 'checkbox',
            '#title' => 'Хочу видеотрансляцию'
        );

        $form['printing_stuff'] = array(
            '#type' => 'textfield',
            '#title' => 'Печатные материалы',
            '#required' => TRUE
        );

        $form['something_else'] = array(
            '#type' => 'textarea',
            '#title' => 'Что-то еще'
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