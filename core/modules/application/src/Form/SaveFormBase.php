<?php
/**
 * @file
 * Contains \Drupal\application\Form\RallyForm.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class SaveFormBase extends FormBase {

    public function getFormId() {
        return 'save_form_base';
    }

    public function buildForm(array $form, FormStateInterface $form_state, $service_name = NULL) {

        $form['service_name'] = array(
            '#type' => 'hidden',
            '#name' => 'service_name',
            '#value' => $service_name
        );

        $form['actions']['#type'] = 'actions';

        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#name' => 'submit',
            '#button_type' => 'primary',
        );

        $form['actions']['submit']['#value'] = 'Отправить заявку';

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        //    if (strlen($form_state->getValue('name')) < 5) {
        //      $form_state->setErrorByName('name', $this->t('Name is too short.'));
        //    }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
//        var_dump($form_state->getRebuildInfo());
//
//
        $preview_class = \Drupal::service('application.preview_class');

        $service_name = $form['service_name']['#value'];

        $preview_class->saveApplication($service_name);
//        $this->localFunc();
    }

//    public function ajaxSubmitForm(array &$form, FormStateInterface $form_state) {
//        $service_class = \Drupal::service('application.service_class');
//
//        $service_class->nextPage($form_state);
////        $ajax_response = new AjaxResponse();
////        $message = [
////            '#theme' => 'status_messages',
////            '#message_list' => drupal_get_messages(),
////            '#status_headings' => [
////                'status' => t('Status message'),
////                'error' => t('Error message'),
////                'warning' => t('Warning message'),
////            ],
////        ];
////        $messages = \Drupal::service('renderer')->render($message);
////        $ajax_response->addCommand(new HtmlCommand('#form-system-messages', $messages));
////        return $ajax_response;
//    }

}