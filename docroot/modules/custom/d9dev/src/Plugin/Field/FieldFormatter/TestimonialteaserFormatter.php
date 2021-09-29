<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'TestimonialTeaser' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_testimonialteaser",
 *   label = @Translation("TestimonialTeaser"),
 *   field_types = {
 *     "text_with_summary"
 *   }
 * )
 */
class TestimonialteaserFormatter extends FormatterBase {

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
          'class' => 'mb-1',
        ),
        '#value' => strip_tags($item->getValue()['value']),
      );
    }

    return $element;
  }

}
