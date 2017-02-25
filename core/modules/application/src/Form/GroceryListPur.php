<?php
/**
 * @file
 * Contains \Drupal\application\Form\LaptopsTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class GroceryListPur extends WrapperFormBase {

    public function getFormId() {
        return 'grocery_pur';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['name'] = array(
            '#type' => 'textarea',
            '#title' => 'Наименование'
            'table_name' => 'grocery_pur'
        );
        
        $form['dimension'] = array(
            '#type' => 'number',
            '#title' => 'Упаковка/размерность',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'grocery_pur'
        );
        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество (шт.)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'grocery_pur'
        );
        $form['mark'] = array(
            '#type' => 'textarea',
            '#title' => 'Предпочтительная марка'
            'table_name' => 'grocery_pur'
        );
        $form['provider'] = array(
            '#type' => 'textarea',
            '#title' => 'Поставщик(?)'
            'table_name' => 'grocery_pur'
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