<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyForm.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

//function rally_form_attachments(array &$attachments) {
//  // Первый helloworld - название модуля, а второй - название либы из yml файла.
//    $attachments['#attached']['library'][] = 'application/application-form';
//}

class BonfireForm extends FormBase {

    public function getFormId() {
        return 'bonfire_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['#attached']['library'][] = 'application/application-form';

//        Оборудование соревнования

        $form['competition_eq_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['competition_eq_spoiler']['competition_eq_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Оборудование мероприятия',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['competition_eq_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="competition_eq_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['competition_eq_container']['competition_eq'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\CompetitionEq');


//        Радио абоненты

        $form['radio_subscribers_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['radio_subscribers_spoiler']['radio_subscribers_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Радио абоненты',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['radio_subscribers_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="radio_subscribers_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['radio_subscribers_container']['radio_subscribers'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\RadioSubscribersTec');

//        Ноутбуки

        $form['laptops_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['laptops_spoiler']['laptops_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Ноутбуки',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['laptops_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="laptops_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['laptops_container']['laptops'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\LaptopsTec');

//        Электричество

        $form['electricity_spoiler'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-spoiler',
            )
        );

        $form['electricity_spoiler']['electricity_checkbox'] = array(
            '#type' => 'checkbox',
            '#title' => 'Электричество',
            '#attributes' => array(
                'checked' => TRUE,
            ),
        );

        $form['electricity_container'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-container',
            ),
            '#states' => array(
                'invisible' => array(
                    'input[name="electricity_checkbox"]' => array('checked' => FALSE),
                ),
            ),
        );

        $form['electricity_container']['electricity'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\ElectricityEq');

//        Установка экрана

        $form['screen_installation_spoiler'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-spoiler',
            )
        );

        $form['screen_installation_spoiler']['screen_installation_checkbox'] = array(
            '#type' => 'checkbox',
            '#title' => 'Установка экрана',
            '#attributes' => array(
                'checked' => TRUE,
            ),
        );

        $form['screen_installation_container'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-container',
            ),
            '#states' => array(
                'invisible' => array(
                    'input[name="screen_installation_checkbox"]' => array('checked' => FALSE),
                ),
            ),
        );

        $form['screen_installation_container']['screen_installation'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\InstallationWor');

//        Объем древообработки

        $form['woodworking_spoiler'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-spoiler',
            )
        );

        $form['woodworking_spoiler']['woodworking_checkbox'] = array(
            '#type' => 'checkbox',
            '#title' => 'Объем древообработки',
            '#attributes' => array(
                'checked' => TRUE,
            ),
        );

        $form['woodworking_container'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => 'form-container',
            ),
            '#states' => array(
                'invisible' => array(
                    'input[name="woodworking_checkbox"]' => array('checked' => FALSE),
                ),
            ),
        );

        $form['woodworking_container']['woodworking'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\WoodworkingVolumeWor');

//Установка (?) большого костра        

        $form['bonfire_eq_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['bonfire_eq_spoiler']['bonfire_eq_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Оборудование большого костра',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['bonfire_eq_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="bonfire_eq_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['bonfire_eq_container']['special_eq'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\BonfireEq');


//        $form['special_eq'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\RallyEq');

        $form['actions']['#type'] = 'actions';

        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => 'Отправить заявку',
            '#button_type' => 'primary',
        );

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
    //    if (strlen($form_state->getValue('name')) < 5) {
    //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
    //    }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        drupal_set_message($this->t('@one, @two', array(
            '@one' => $form_state->getValue('competition_eq'),
            '@two' => $form_state->getValue('secretary_eq')
        )));
    }

}