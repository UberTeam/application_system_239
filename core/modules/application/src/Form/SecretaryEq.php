<?php
/**
 * @file
 * Contains \Drupal\application\Form\SecretaryEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SecretaryEq extends FormBase {

    public function getFormId() {
        return 'secretary_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['yellow_west'] = array(
            '#type' => 'number',
            '#title' => 'Жёлтые желетки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['tablets'] = array(
            '#type' => 'number',
            '#title' => 'Планшеты',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['printing_stuff'] = array(
            '#type' => 'textfield',
            '#title' => 'Печатные материалы',
            '#required' => TRUE
        );


        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
    //    if (strlen($form_state->getValue('name')) < 5) {
    //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
    //    }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
//        drupal_set_message($this->t('@one, @two', array(
//            '@one' => $form_state->getValue('competition_eq'),
//            '@two' => $form_state->getValue('secretary_eq')
//        )));
    }

}