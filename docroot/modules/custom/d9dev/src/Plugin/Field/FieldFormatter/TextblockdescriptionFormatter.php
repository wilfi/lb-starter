<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'TextBlockDescription' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_textblockdescription",
 *   label = @Translation("TextBlockDescription"),
 *   field_types = {
 *     "text_with_summary"
 *   }
 * )
 */
class TextblockdescriptionFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#type' => 'html_tag',
        '#tag' => 'p',
        '#attributes' => array(
          'class' => 'lead mb-0',
        ),
        '#value' => strip_tags($item->getValue()['value']),
      );
    }

    return $element;
  }

}
