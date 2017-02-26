<?php
/**
 * @file
 * Contains \Drupal\application\Form\LaptopsTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SomethingElse extends WrapperFormBase {

    public function getFormId() {
        return 'something_else';
    }
    public function buildForm(array $form, FormStateInterface $form_state) {

    $form = TimePlaceTr::buildForm($form, $form_state);
    
    $form = PickerTr::buildForm($form, $form_state); 
    
    $form['must_be_purchased'] = array(
            '#type' => 'checkbox',
            '#title' => 'Надо купить',
            'table_name' => 'something_else'
        );

    $form['name'] = array(
            '#type' => 'textfield',
            '#title' => 'Наименование',
            'table_name' => 'something_else'
        );

    $form['model'] = array(
            '#type' => 'textarea',
            '#title' => 'Модель + ссылка',
            'table_name' => 'something_else'
        );        
        
    $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество (шт.)',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'something_else'
        );
    
    $form['provider'] = array(
            '#type' => 'textarea',
            '#title' => 'Поставщик(?)',
            'table_name' => 'something_else'
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