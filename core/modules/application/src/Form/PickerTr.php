<?php
/**
 * @file
 * Contains \Drupal\application\Form\LaptopsTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PickerTr extends WrapperFormBase {

    public function getFormId() {
        return 'transport_name';
    }
    public function buildForm(array $form, FormStateInterface $form_state) {

    $form['will_be_used'] = array(
            '#type' => 'checkbox',
            '#title' => 'Будет ли использовано',
            'table_name' => 'transport_name'
        );
    
    $form['sign_format'] = array(
            '#type' => 'textfield',
            '#title' => 'Формат подписи',
            'table_name' => 'transport_name'
        ); 

    $form['neat_package'] = array(
            '#type' => 'checkbox',
            '#title' => 'Аккуратная упаковка',
            'table_name' => 'transport_name'
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