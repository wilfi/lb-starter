<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'FeaturedArticlesCTA' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_featuredarticlescta",
 *   label = @Translation("FeaturedArticlesCTA"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class FeaturedarticlesctaFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#type' => 'html_tag',
        '#tag' => 'a',
        '#attributes' => array(
          'class' => 'text-decoration-none',
          'href' => $item->getValue()['uri'],
        ),
        '#value' => $item->getValue()['title'] . '<i class="bi bi-arrow-right"></i>',
      );
    }

    return $element;
  }

}
