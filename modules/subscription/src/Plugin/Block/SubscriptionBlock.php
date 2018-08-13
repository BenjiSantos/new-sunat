<?php
/**
 * @file
 * Contains \Drupal\suscription\Plugin\Block\HelloBlock.
 */

namespace Drupal\subscription\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */
class SubscriptionBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Hello, World!'),
        );
    }

}