<?php

namespace Drupal\d9dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'PlanCTA' formatter.
 *
 * @FieldFormatter(
 *   id = "d9dev_plancta",
 *   label = @Translation("PlanCTA"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class PlanctaFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#type' => 'html_tag',
        '#tag' => 'div',
        '#attributes' => array(
          'class' => 'd-grid',
        ),
        '#value' => '<a class="btn btn-outline-primary" href="' . $item->getValue()['uri'] . '">' . $item->getValue()['title'] . '</a>',
      );
    }

    return $element;
  }

}
