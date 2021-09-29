<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'TextBlockTitle' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_textblocktitle",
 *   label = @Translation("TextBlockTitle"),
 *   field_types = {
 *     "text"
 *   }
 * )
 */
class TextblocktitleFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = [
        '#markup' => $item->value,
      ];
    }

    return $element;
  }

}
