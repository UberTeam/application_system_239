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

abstract class WrapperFormBase extends FormBase {

//    public function buildForm(array $form, FormStateInterface $form_state, $path = NULL, $is_last_page = NULL) {
    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['actions']['#type'] = 'actions';

        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#name' => 'submit',
            '#button_type' => 'primary',
//            '#ajax' => [
//                'callback' => '::ajaxSubmitForm',
//                'event' => 'click',
//                'progress' => [
//                    'type' => 'throbber',
//                ],
//            ],
        );

        $form['actions']['submit']['#value'] = 'Далее';

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
        $service_class = \Drupal::service('application.service_class');

        $service_class->nextStep($form_state, $form);
//        $this->localFunc();
    }

    public function localFunc() {
        var_dump("ololo --- ");
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