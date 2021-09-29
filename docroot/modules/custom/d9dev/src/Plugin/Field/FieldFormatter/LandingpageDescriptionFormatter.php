<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'LandingPage Description' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_landingpage_description",
 *   label = @Translation("LandingPage Description"),
 *   field_types = {
 *     "text_with_summary"
 *   }
 * )
 */
class LandingpageDescriptionFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    // @todo: Change the field type to plain text.
    $element = [];
    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#type' => 'html_tag',
        '#tag' => 'p',
        '#attributes' => array(
          'class' => 'lead text-white-50 mb-4',
        ),
        '#value' => strip_tags($item->getValue()['value']),
      );
    }

    return $element;
  }

}
