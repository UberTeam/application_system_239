<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class LunchEq extends WrapperFormBase {

    public function getFormId() {
        return 'lunch_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['garbage_bags'] = array(
            '#type' => 'number',
            '#title' => 'Мусорные пакеты',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['lunch_boxes'] = array(
            '#type' => 'number',
            '#title' => 'Ланчбоксы',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['dishes'] = array(
            '#type' => 'number',
            '#title' => 'Тарелки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['extinguisher'] = array(
            '#type' => 'number',
            '#title' => 'Огнетушитель',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );    
        //$form['grocery_list_label'] = array(
        //    '#type' => 'label',
        //    '#title' => 'Список продуктов длительного хранения'
        //);

        $form['grocery_pur'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\GroceryListPur');
//        $form = PrintingStuffEq::buildForm($form, $form_state);

        //$form['perishables_label'] = array(
         //   '#type' => 'label',
         //   '#title' => 'Список скоропортящихся продуктов'
        //);

        $form['perishables'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\perishables');
//        $form = PrintingStuffEq::buildForm($form, $form_state);

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