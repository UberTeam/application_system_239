<?php
/**
 * @file
 * Contains \Drupal\application\Form\InstallationWor.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class InstallationWor extends FormBase {

    public function getFormId() {
        return 'installation_wor';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['install_datetime'] = array(
            '#type' => 'date',
            '#title' => 'К какому сроку должно быть готово',
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