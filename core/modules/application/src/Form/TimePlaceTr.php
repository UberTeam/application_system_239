<?php
/**
 * @file
 * Contains \Drupal\application\Form\LaptopsTec.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TimePlaceTr extends WrapperFormBase {

    public function getFormId() {
        return 'transport_place';
    }
    public function buildForm(array $form, FormStateInterface $form_state) {

    $form['spoiler']['layout'] = array(
            '#type' => 'file',
            '#title' => 'Загрузить место(?)',
            '#states' => array(
                'invisible' => array(
                    'input[name="make_me_layout"]' => array('checked' => TRUE),
                ),
            ),
            'table_name' => 'transport_place'
        );
    $form['date_time'] = array(
            '#type' => 'textfield',
            '#title' => 'Время подачи(?)',
            'table_name' => 'transport_place'
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