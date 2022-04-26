<?php

namespace Drupal\stock\OrderProcessor;

use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_order\OrderProcessorInterface;

class StockOrderProcessor implements OrderProcessorInterface  {

  /**
   * {@inheritdoc}
   */
  public function process(OrderInterface $order) {
    //var_dump($order);
    foreach ($order->getItems() as $order_item) {
      //var_dump($order_item);
      $entity = $order_item->getPurchasedEntity();
      if ($entity->commerce_stock_always_in_stock->value <= 0){
        $order->removeItem($order_item);
        $order_item->delete();
      }
    }
    //exit;
  }

}