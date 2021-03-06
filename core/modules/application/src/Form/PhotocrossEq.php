<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PhotocrossEq extends WrapperFormBase {

    public function getFormId() {
        return 'photocross_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['printer'] = array(
            '#type' => 'checkbox',
            '#title' => 'Добавить принтер'
        );

        $form['reader'] = array(
            '#type' => 'checkbox',
            '#title' => 'Добавить картридер'
        );

        $form['usb_cable'] = array(
            '#type' => 'number',
            '#title' => 'USB-кабели для мобильных устройств и камер',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['photo_paper'] = array(
            '#type' => 'number',
            '#title' => 'Фотобумага',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['paper'] = array(
            '#type' => 'number',
            '#title' => 'Бумага',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['plywood_label'] = array(
            '#type' => 'label',
            '#title' => 'Фанера'
        );

        $form['plywood'] = array(
            '#type' => 'checkbox',
            '#title' => 'Добавить лист фанеры'
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
        );

        $form['polypropilene_cord'] = array(
            '#type' => 'number',
            '#title' => 'Полипропиленовый шнур',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['staple_gun'] = array(
            '#type' => 'number',
            '#title' => 'Строительный стэплер',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['staple_gun_brackets'] = array(
            '#type' => 'number',
            '#title' => 'Скобы для стэплера',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

    
        

        $form['something_else'] = array(
            '#type' => 'textarea',
            '#title' => 'Что-то еще'
        );

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