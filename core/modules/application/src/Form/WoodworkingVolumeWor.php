<?php
/**
 * @file
 * Contains \Drupal\application\Form\WoodworkingVolumeWor.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class WoodworkingVolumeWor extends WrapperFormBase {

    public function getFormId() {
        return 'woodworking_volume_wor';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['volume'] = array(
            '#type' => 'number',
            '#title' => 'Объем в м3',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            ),
            'table_name' => 'woodworking_volume_wor'
        );

        $form['nomenclature'] = array(
            '#type' => 'select',
            '#title' => 'Номенклатура',
            '#options' => [
                'Бревна' => 'Бревна',
                'Чурбаки' => 'Чурбаки',
                'Поколотые дрова' => 'Поколотые дрова'
            ],
            'table_name' => 'woodworking_volume_wor'
        );

        $form['delivery_datetime'] = array(
            '#type' => 'date',
            '#title' => 'Срок поставки',
            '#required' => TRUE,
            'table_name' => 'woodworking_volume_wor'
        );

        return $form;
    }
//
//    public function validateForm(array &$form, FormStateInterface $form_state) {
//        //    if (strlen($form_state->getValue('name')) < 5) {
//        //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
//        //    }
//    }
//
//    public function submitForm(array &$form, FormStateInterface $form_state) {
////        drupal_set_message($this->t('@one, @two', array(
////            '@one' => $form_state->getValue('competition_eq'),
////            '@two' => $form_state->getValue('secretary_eq')
////        )));
//    }

}