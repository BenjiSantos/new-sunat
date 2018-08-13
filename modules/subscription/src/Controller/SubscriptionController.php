<?php
/**
 * @file
 * Contains \Drupal\suscription\Controller\SuscriptionController.
 */

namespace Drupal\subscription\Controller;

use Drupal\Core\Controller\ControllerBase;

class SubscriptionController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('Hello world'),
        );
    }
}