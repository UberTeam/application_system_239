<?php
/**
 * @file
 * Contains \Drupal\application\Form\ElectricityEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FlagsEq extends FormBase {

    public function getFormId() {
        return 'flags_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state, $parent_name = NULL) {

        $form['printing_stuff_label'] = array(
            '#type' => 'label',
            '#title' => 'Печатные материалы'
        );

//        $form['printing_stuff'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\PrintingStuffEq');
        $form = PrintingStuffEq::buildForm($form, $form_state, "flags_eq");


        $form['shaft'] = array(
            '#type' => 'hidden',
            '#title' => 'Древко',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'flags_eq',
            'parent_name' => $parent_name
        );

        $form['tools'] = array(
            '#type' => 'number',
            '#title' => 'Инструменты',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'flags_eq',
            'parent_name' => $parent_name
        );

        $form['plywood'] = array(
            '#type' => 'checkbox',
            '#title' => 'Добавить лист фанеры',
            'table_name' => 'flags_eq',
            'parent_name' => $parent_name
        );

        $form['plywood_size'] = array(
            '#type' => 'container',
            '#title' => 'Размер',
            '#states' => array(
                'invisible' => array(
                    'input[name="plywood"]' => array('checked' => false),
                ),
            ),
            '#attributes' => array(
                'class' => 'size_wrapper'
            )
        );

        $form['plywood_size']['width'] = array(
            '#type' => 'html_tag',
            '#tag' => 'input',
            '#attributes' => array(
                'type' => 'text',
                'maxlength' => '3',
                'class' => array('size', 'width')
            ),
            'table_name' => 'flags_eq',
            'parent_name' => $parent_name
        );

        $form['plywood_size']['separator'] = array(
            '#type' => 'html_tag',
            '#tag' => 'div',
            '#value' => '&#215;',
            '#attributes' => array(
                'class' => 'separator'
            ),
        );

        $form['plywood_size']['height'] = array(
            '#type' => 'html_tag',
            '#tag' => 'input',
            '#attributes' => array(
                'type' => 'text',
                'maxlength' => '3',
                'class' => array('size', 'height')
            ),
            'table_name' => 'flags_eq',
            'parent_name' => $parent_name
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