<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RallyEq extends WrapperFormBase {

    public function getFormId() {
        return 'rally_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['swimming_candles'] = array(
            '#type' => 'number',
            '#title' => 'Свечи плавающие',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['video_broadcast'] = array(
            '#type' => 'checkbox',
            '#title' => 'Хочу видеотрансляцию'
        );

        $form['printing_stuff_label'] = array(
            '#type' => 'label',
            '#title' => 'Печатные материалы'
        );

//        $form['printing_stuff'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\PrintingStuffEq');
        $form = PrintingStuffEq::buildForm($form, $form_state, "rally_eq");

        $form = SomethingElse::buildForm($form, $form_state, "rally_eq");
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