<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyEq.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class InfocentreEq extends WrapperFormBase {

    public function getFormId() {
        return 'infocentre_eq';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = parent::buildForm($form, $form_state);

        $form['plasma'] = array(
            '#type' => 'hidden',
            '#title' => 'Плазма',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['speakers'] = array(
            '#type' => 'number',
            '#title' => 'Колонки',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['microphones'] = array(
            '#type' => 'number',
            '#title' => 'Микрофоны',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['mixer'] = array(
            '#type' => 'hidden',
            '#title' => 'Микшер',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['megaphone'] = array(
            '#type' => 'number',
            '#title' => 'Мегафон',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['telephone'] = array(
            '#type' => 'number',
            '#title' => 'Телефон',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        
        $form['dear_239_label'] = array(
            '#type' => 'hidden',
            '#title' => 'Теплое ламповое 239',
            '#required' => TRUE,
            '#attributes' => array (
                'class' => 'detached'
            )
        );
      
        $form['paper_label'] = array(
            '#type' => 'label',
            '#title' => 'Бумага'
        );

//        $form['paper'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\PaperEq');
        $form = PaperEq::buildForm($form, $form_state);



        $form['flags_label'] = array(
            '#type' => 'label',
            '#title' => 'Флаги'
        );

//        $form['flags'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\FlagsEq');
        $form = FlagsEq::buildForm($form, $form_state);


        $form['plywood_label'] = array(
            '#type' => 'label',
            '#title' => 'Фанера'
        );
        $form['presswall'] = array(
            '#type' => 'number',
            '#title' => 'Presswall (на ватмане так написано, я хз что это)',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
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
        $form['led_lamp'] = array(
            '#type' => 'number',
            '#title' => 'Лампы',
            '#required' => TRUE,
            '#attributes' => array (
                'min' => '0'
            )
        );
        $form['polypropilene_cord'] = array(
            '#type' => 'hidden',
            '#title' => 'Полипропиленовый шнур',
            '#required' => TRUE,
            '#attributes' => array (
                'class' => 'detached'
            )
        );
        
       
        $form['printing_stuff_label'] = array(
            '#type' => 'label',
            '#title' => 'Печатные материалы'
        );

//        $form['printing_stuff'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\PrintingStuffEq');
        $form = PrintingStuffEq::buildForm($form, $form_state);

        $form = SomethingElse::buildForm($form, $form_state);

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