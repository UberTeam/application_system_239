<?php
/**
 * @file
 * Contains \Drupal\application\Form\BannerInstallationWor.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BannerInstallationWor extends FormBase {

    public function getFormId() {
        return 'banner_installation_wor';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['name'] = array(
            '#type' => 'textfield',
            '#title' => 'Наименование баннера',
            '#required' => TRUE
        );

        $form['installation'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\InstallationWor');

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