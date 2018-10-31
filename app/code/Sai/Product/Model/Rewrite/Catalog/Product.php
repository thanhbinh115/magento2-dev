<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/31
 * Time: 10:52 AM
 */

namespace Sai\Product\Model\Rewrite\Catalog;


class Product extends \Magento\Catalog\Model\Product
{
    public function getName() {
        return $this->_getData(self::NAME) . '(original Sai product)';
    }
}