<?php

namespace Drupal\custom\Controller;

use Drupal\Core\Controller\ControllerBase;


class StockController extends ControllerBase
{
    public function ma_page()
    {
        return[
            '#markup' => $this->t("hello world"),
        ];
    } 
}
