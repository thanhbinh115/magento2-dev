<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/30
 * Time: 5:21 PM
 */

namespace Sai\Customization\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_CUSTOMIZATION = 'customization/';

    /**
     * Return configurations by key and store
     *
     * @param string $field
     * @param integer $storeId
     *
     * @return mix
     */
    public function getConfigValue($field, $storeId = null) {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORES,
            $storeId
        );
    }

    /**
     * Return configurations of jean trousers
     *
     * @param string $code
     * @param integer $storeId
     *
     * @return mix
     */
    public function getJeanTrousersConfig($code, $storeId = null) {
        return $this->getConfigValue(self::XML_PATH_CUSTOMIZATION . 'jean_trousers/' . $code, $storeId);
    }

    /**
     * Return configurations of jean shirt
     *
     * @param string $code
     * @param integer $storeId
     *
     * @return mix
     */
    public function getJeanShirtConfig($code, $storeId = null) {
        return $this->getConfigValue(self::XML_PATH_CUSTOMIZATION . 'jean_shirt/' . $code, $storeId);
    }
}