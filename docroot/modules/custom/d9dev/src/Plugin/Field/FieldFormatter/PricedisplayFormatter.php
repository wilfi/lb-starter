<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'PriceDisplay' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_pricedisplay",
 *   label = @Translation("PriceDisplay"),
 *   field_types = {
 *     "integer"
 *   }
 * )
 */
class PricedisplayFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];
    foreach ($items as $delta => $item) {
      $settings = $item->getDataDefinition()->getFieldDefinition()->getSettings();
      $element[$delta] = array(
        '#markup' => '<span class = "display-4 fw-bold">' .
          $settings['prefix'] .
          $item->getValue()['value'] .
          '</span><span class="text-muted">' .
          $settings['suffix'] .
          '</span>',
      );
    }
    return $element;
  }

}
