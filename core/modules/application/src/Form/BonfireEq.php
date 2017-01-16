<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BonfireEq extends FormBase {

    public function getFormId() {
        return 'bonfire_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['projector'] = array(
            '#type' => 'number',
            '#title' => 'Проектор',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['screen'] = array(
            '#type' => 'number',
            '#title' => 'Экран',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['speakers'] = array(
            '#type' => 'number',
            '#title' => 'Колонки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );    

        $form['microphones'] = array(
            '#type' => 'number',
            '#title' => 'Микрофоны',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        
        $form['mixer'] = array(
            '#type' => 'number',
            '#title' => 'Микшер(?)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['petrol'] = array(
            '#type' => 'checkbox',
            '#title' => 'Бензин'
        );

        $form['jerrycan'] = array(
            '#type' => 'number',
            '#title' => 'Канистры',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['rag'] = array(
            '#type' => 'number',
            '#title' => 'Тряпки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
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