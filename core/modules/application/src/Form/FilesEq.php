<?php
/**
 * @file
 * Contains \Drupal\application\Form\ElectricityEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FilesEq extends FormBase {

    public function getFormId() {
        return 'files_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['size'] = array(
            '#type' => 'number',
            '#title' => 'Размер',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['density'] = array(
            '#type' => 'number',
            '#title' => 'Плотность (?)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['type'] = array(
            '#type' => 'number',
            '#title' => 'Тип (?)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
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