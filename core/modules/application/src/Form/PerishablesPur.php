<?php
/**
 * @file
 * Contains \Drupal\application\Form\LaptopsTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class LaptopsTec extends WrapperFormBase {

    public function getFormId() {
        return 'perishables';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);
        
        $form['grocery_pur'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\GroceryListPur');

        $form['shelf_life'] = array(
            '#type' => 'textfield',
            '#title' => 'Срок, к которому должно оставаться свежим',
            'table_name' => 'shelf_life'
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