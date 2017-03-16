<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BuoyEq extends FormBase {

    public function getFormId() {
        return 'buoy_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state, $parent_name = NULL) {

        $form['volume'] = array(
            '#type' => 'number',
            '#title' => 'Объем',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'buoy_eq',
            'parent_name' => $parent_name
        );

        $form['color'] = array(
            '#type' => 'textfield',
            '#title' => 'Цвет',
            '#required' => TRUE,
            'table_name' => 'buoy_eq',
            'parent_name' => $parent_name
        );

        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'buoy_eq',
            'parent_name' => $parent_name
        );

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