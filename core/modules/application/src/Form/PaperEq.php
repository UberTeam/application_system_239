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

        $form['bring_by_myself_label'] = array(
            '#type' => 'number',
            '#title' => 'Привезу сам',
            '#required' => TRUE,
            '#attributes' => array (
                'class' => 'detached'
            )
        );
        
        $form['bring_by_myself'] = array(
            '#type' => 'checkbox',
            '#title' => 'Привезу сам'
        );
        $form['size'] = array(
            '#type' => 'textfield',
            '#title' => 'Формат'
        );
        $form['density'] = array(
            '#type' => 'textfield',
            '#title' => 'Плотность'
        ); 

        $form['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
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