<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'LandingPage Banner' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_landingpage_banner",
 *   label = @Translation("LandingPage Banner"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class LandingpageBannerFormatter extends FormatterBase {

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
          'class' => 'btn btn-primary btn-lg px-4 me-sm-3',
          'href' => $item->getValue()['uri'],
        ),
        '#value' => $item->getValue()['title'],
      );
    }
    return $element;
  }

}
