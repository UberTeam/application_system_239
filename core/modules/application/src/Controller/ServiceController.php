<?php
/**
 * Created by PhpStorm.
 * User: Asus-PC
 * Date: 28.01.2017
 * Time: 15:23
 */

namespace Drupal\application\Controller;

use Drupal\Core\Routing\RouteMatch;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Cmf\Component\Routing\RouteObjectInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;
//use Drupal\Core\Controller\ControllerBase;

class ServiceController {
    public function nextPage($form) {
        $current_path = \Drupal::service('path.current')->getPath();

        preg_match('/(\d+)$/', $current_path, $page);

        $page_number = $page[0] + 1;

        unset($page);

        $page_number .= '';

        $next_path = substr_replace($current_path, $page_number, -1);

        $path = $GLOBALS['base_root'] . $next_path;

        $url = Url::fromUri($path);
        
        return $form->setRedirectUrl($url);
    }
}