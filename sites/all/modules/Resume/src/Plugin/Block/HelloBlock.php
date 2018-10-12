<?php

namespace Drupal\resume\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a Hellow Block
 * 
 * @Block(
 * id = "hello_block",
 * admin_lable = @Translation("Hello Block"),
 * category = @Translation("Hello World"),
 * )
 */

class HelloBlock extends BaseBlock {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Hello World'),
        ); 
    }
}