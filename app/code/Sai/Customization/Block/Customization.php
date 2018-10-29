<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/29
 * Time: 2:32 PM
 */

namespace Sai\Customization\Block;


use Magento\Framework\View\Element\Template\Context;

class Customization extends \Magento\Framework\View\Element\Template
{
    protected $_variableFactory;

    public function __construct(
        Context $context,
        array $data = [],
        \Magento\Variable\Model\VariableFactory $variableFactory)
    {
        $this->_variableFactory = $variableFactory;
        parent::__construct($context, $data);
    }

    public function getProductList(){
        return 'Product list';
    }

    public function getVariableValue() {
        $var = $this->_variableFactory->create();
        $var->loadByCode('dev_name');

        return $var->getValue('text');
    }
}