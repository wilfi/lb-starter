<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'LandingPage LearnMore' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_landingpage_learnmore",
 *   label = @Translation("LandingPage LearnMore"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class LandingpageLearnmoreFormatter extends FormatterBase {

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
          'class' => 'btn btn-outline-light btn-lg px-4',
          'href' => $item->getValue()['uri'],
        ),
        '#value' => $item->getValue()['title'],
      );
    }

    return $element;
  }

}
