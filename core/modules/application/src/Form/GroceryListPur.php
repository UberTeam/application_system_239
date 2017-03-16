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
        return 'grocery_list_pur';
    }

    public function buildForm(array $form, FormStateInterface $form_state, $parent_name = NULL) {

        $form = parent::buildForm($form, $form_state);

        $form['name'] = array(
            '#type' => 'textfield',
            '#title' => 'Наименование',
            'table_name' => 'grocery_list_pur',
            'parent_name' => $parent_name
        );
        
        $form['dimension'] = array(
            '#type' => 'number',
            '#title' => 'Упаковка/размерность',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'grocery_list_pur',
            'parent_name' => $parent_name
        );
        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество (шт.)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'grocery_list_pur',
            'parent_name' => $parent_name
        );
        $form['mark'] = array(
            '#type' => 'textfield',
            '#title' => 'Предпочтительная марка',
            'table_name' => 'grocery_list_pur',
            'parent_name' => $parent_name
        );
        $form['provider'] = array(
            '#type' => 'textfield',
            '#title' => 'Поставщик(?)',
            'table_name' => 'grocery_list_pur',
            'parent_name' => $parent_name
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