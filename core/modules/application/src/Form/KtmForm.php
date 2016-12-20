<?php
/**
 * @file
 * Contains \Drupal\application\Form\KtmForm.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class KtmForm extends FormBase {

    public function getFormId() {
        return 'ktm_form';
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
          '#title' => 'Оборудование соревнования',
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

//        Секретарское оборудование

        $form['secretary_eq_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['secretary_eq_spoiler']['secretary_eq_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Секретарское оборудование',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['secretary_eq_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="secretary_eq_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['secretary_eq_container']['secretary_eq'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\SecretaryEq');

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


//        Специальное оборудование

        $form['special_eq_spoiler'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-spoiler',
          )
        );

        $form['special_eq_spoiler']['special_eq_checkbox'] = array(
          '#type' => 'checkbox',
          '#title' => 'Специальное оборудование',
          '#attributes' => array(
            'checked' => TRUE,
          ),
        );

        $form['special_eq_container'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => 'form-container',
          ),
          '#states' => array(
            'invisible' => array(
              'input[name="special_eq_checkbox"]' => array('checked' => FALSE),
            ),
          ),
        );

        $form['special_eq_container']['special_eq'] = \Drupal::formBuilder()->getForm('Drupal\application\Form\RallyEq');

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