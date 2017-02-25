<?php
/**
 * @file
 * Contains \Drupal\application\Form\Equipment\CompetitionEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PrintingStuffEq extends FormBase {

    public function getFormId() {
        return 'printing_stuff_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['print_by_myself'] = array(
            '#type' => 'checkbox',
            '#title' => 'Напечатаю сам',
            '#attributes' => array(
                'checked' => FALSE,
            ),
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler'] = array(
            '#type' => 'container',
            '#states' => array(
                'invisible' => array(
                    'input[name="print_by_myself"]' => array('checked' => TRUE),
                ),
            ),
        );

        $form['spoiler']['layout'] = array(
            '#type' => 'file',
            '#title' => 'Загрузить макет',
            '#states' => array(
                'invisible' => array(
                    'input[name="make_me_layout"]' => array('checked' => TRUE),
                ),
            ),
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['make_me_layout'] = array(
            '#type' => 'checkbox',
            '#title' => 'Сделайте мне макет',
            '#attributes' => array(
                'checked' => FALSE,
            ),
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['color'] = array(
            '#type' => 'select',
            '#title' => 'Тип печати',
            '#options' => [
                'Ч/б' => 'Ч/б',
                'Цвет' => 'Цвет',
            ],
            '#required' => TRUE,
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['size'] = array(
            '#type' => 'select',
            '#title' => 'Формат',
            '#options' => [
                'А1' => 'А1',
                'А2' => 'А2',
                'А3' => 'А3',
                'А4' => 'А4',
                'А5' => 'А5',
                'А6' => 'А6',
            ],
            '#required' => TRUE,
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['paper_type'] = array(
            '#type' => 'textfield',
            '#title' => 'Тип бумаги',
            '#required' => TRUE,
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['quantity'] = array(
            '#type' => 'number',
            '#title' => 'Количество',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['two_sided'] = array(
            '#type' => 'checkbox',
            '#title' => 'Двусторонняя печать',
            '#attributes' => array(
                'checked' => FALSE,
            ),
            'table_name' => 'printing_stuff_eq'
        );

        $form['spoiler']['lamination'] = array(
            '#type' => 'checkbox',
            '#title' => 'Заламинировать',
            '#attributes' => array(
                'checked' => FALSE,
            ),
        );

//        $form['spoiler']['files'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\FilesEq');
        $form = FilesEq::buildForm($form, $form_state);

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