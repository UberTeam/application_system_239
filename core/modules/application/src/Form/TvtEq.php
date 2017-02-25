<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TvtEq extends WrapperFormBase {

    public function getFormId() {
        return 'tvt_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['polypropilene_cord'] = array(
            '#type' => 'number',
            '#title' => 'Полипропиленовый шнур',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

         $form['buoy'] = array(
            '#type' => 'number',
            '#title' => 'Буи',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['pallets'] = array(
            '#type' => 'textfield',
            '#title' => 'Паллеты',
            '#required' => TRUE
        );

        $form = SomethingElse::buildForm($form, $form_state);

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