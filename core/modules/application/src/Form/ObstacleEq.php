<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ObstacleEq extends WrapperFormBase {

    public function getFormId() {
        return 'obstacle_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['tools'] = array(
            '#type' => 'number',
            '#title' => 'Инструменты',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'obstacle_eq'
        );

    
        $form['something_else'] = array(
            '#type' => 'textarea',
            '#title' => 'Что-то еще',
            'table_name' => 'obstacle_eq'
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