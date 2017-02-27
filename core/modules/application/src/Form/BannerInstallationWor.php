<?php
/**
 * @file
 * Contains \Drupal\application\Form\BannerInstallationWor.
 */

namespace Drupal\application\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BannerInstallationWor extends FormBase {

    public function getFormId() {
        return 'banner_installation_wor';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        

        $form['name'] = array(
            '#type' => 'select',
            '#title' => 'Наименование баннера',
            '#options' => [
                'КТМ' => 'КТМ',
                'Лабиринт' => 'Лабиринт',
                'Конкурс обедов' => 'Конкурс обедов',
                'Ночное ралли' => 'Ночное ралли',
                'Ориентирование' => 'Ориентирование',
                'Полоса' => 'Полоса',
                'ТВТ' => 'ТВТ',
                'Старт' => 'Старт',
                'Финиш' => 'Финиш',
            ],
            '#required' => TRUE,
            'table_name' => 'banner_installation_wor'
        );
        
//        $form['install_until'] = array(
//            '#type' => 'datelist',
//            '#title' => 'К какому сроку должно быть готово',
//            '#required' => TRUE,
////            '#date_year_range'=>  '1900:2050',
////            '#date_time_format' => 'H:i:s',
////            '#date_date_format' => 'Y-m-d',
//            'table_name' => 'banner_installation_wor',
//            '#description' => 'Введите дату',
//        );

        $form = InstallationWor::buildForm($form, $form_state);

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