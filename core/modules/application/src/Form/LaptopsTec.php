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
        return 'laptops_tec';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'laptops_tec'
        );

        $form['os'] = array(
            '#type' => 'select',
            '#title' => 'Операционная система',
            '#options' => [
                'Windows' => 'Windows',
                'Linux' => 'Linux'
            ],
            'table_name' => 'laptops_tec'
        );

        $form['soft_list'] = array(
            '#type' => 'textfield',
            '#title' => 'Список предустановленных программ',
            'table_name' => 'laptops_tec'
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