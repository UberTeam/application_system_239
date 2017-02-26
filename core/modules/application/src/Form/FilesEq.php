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

        $form['file_size'] = array(
            '#type' => 'select',
            '#title' => 'Размер',
            '#required' => FALSE,
            '#options' => [
                'А1' => 'А1',
                'А2' => 'А2',
                'А3' => 'А3',
                'А4' => 'А4',
                'А5' => 'А5',
                'А6' => 'А6',
            ],
            'table_name' => 'files_eq'
        );

        $form['density'] = array(
            '#type' => 'number',
            '#title' => 'Плотность (?)',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'files_eq'
        );

        $form['type'] = array(
            '#type' => 'number',
            '#title' => 'Тип (?)',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'files_eq'
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