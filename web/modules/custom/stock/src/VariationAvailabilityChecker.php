<?php

namespace Drupal\stock;

use Drupal\commerce\Context;
use Drupal\commerce_order\AvailabilityCheckerInterface;
use Drupal\commerce_order\AvailabilityResult;
use Drupal\commerce_order\Entity\OrderItemInterface;

/**
 * Class VariationAvailabilityChecker.
 */
class VariationAvailabilityChecker implements AvailabilityCheckerInterface {

  /**
   * {@inheritdoc}
   */
   public function applies(OrderItemInterface $order_item) {
     return TRUE;
   }

  /**
   * {@inheritdoc}
   */
  public function check(OrderItemInterface $order_item, Context $context) {
    $entity = $order_item->getPurchasedEntity();
    if ($entity->commerce_stock_always_in_stock->value <= 0) {
      return AvailabilityResult::unavailable('This product is out of stock.');
    }
    return AvailabilityResult::neutral();
  }

}