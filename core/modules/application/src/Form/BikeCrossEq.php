<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BikeCrossEq extends WrapperFormBase {

    public function getFormId() {
        return 'bike_cross_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['bikes_rent_label'] = array(
            '#type' => 'label',
            '#title' => 'Аренда великов',
            '#attributes' => array (
                'class' => 'detached'
            )
        );

        $form['bikes_rent'] = array(
            '#type' => 'checkbox',
            '#title' => 'Я хочу арендовать велосипеды'
        );

        $form['shaped_puncher'] = array(
            '#type' => 'number',
            '#title' => 'Дырокол фигурный',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['safety_pins'] = array(
            '#type' => 'number',
            '#title' => 'Английские булавки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['printing_stuff_label'] = array(
            '#type' => 'label',
            '#title' => 'Печатные материалы'
        );
        
        $form['printing_stuff'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\PrintingStuffEq');

        $form['something_else'] = array(
            '#type' => 'textarea',
            '#title' => 'Что-то еще'
        );

        return $form;
    }
//
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