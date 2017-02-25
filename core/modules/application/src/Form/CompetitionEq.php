<?php
/**
 * @file
 * Contains \Drupal\application\Form\Equipment\CompetitionEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\RenderElement;

class CompetitionEq extends WrapperFormBase {

    public function getFormId() {
        return 'competition_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['marquee'] = array(
            '#type' => 'number',
            '#title' => 'Шатры',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['walls'] = array(
            '#type' => 'select',
            '#title' => 'Стенки',
            '#options' => [
                '1' => 'Белые',
                '2' => 'Зеленые'
            ],
            '#states' => array(
                'disabled' => array(
                    array(
                        'input[name="marquee"]' => array('value' => '0'),
                    ),
                    array(
                        'input[name="marquee"]' => array('value' => ''),
                    )
                ),
            ),
        );

        $form['lightning'] = array(
            '#type' => 'number',
            '#title' => 'Лампы',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['tables'] = array(
            '#type' => 'number',
            '#title' => 'Столы',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['chairs'] = array(
            '#type' => 'number',
            '#title' => 'Табуретки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['scotch_tape'] = array(
            '#type' => 'hidden',
            '#title' => 'Скотч',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['twill_tape'] = array(
            '#type' => 'hidden',
            '#title' => 'Киперная лента',
            '#required' => FALSE,
            '#attributes' => array (
                'min' => '0'
            )
        );

        $form['banner_label'] = array(
            '#type' => 'label',
            '#title' => 'Установка баннера'
        );

        $form = BannerInstallationWor::buildForm($form, $form_state);

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