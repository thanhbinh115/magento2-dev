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

    protected $_helperData;

    public function __construct(
        Context $context,
        array $data = [],
        \Magento\Variable\Model\VariableFactory $variableFactory,
        \Sai\Customization\Helper\Data $helperData
    )
    {
        $this->_variableFactory = $variableFactory;
        $this->_helperData = $helperData;
        parent::__construct($context, $data);
    }

    public function getProductList(){
        return 'Product list';
    }

    /**
     * Get 'Custom variable' from admin
     *
     * @return string
     */
    public function getVariableValue() {
        $var = $this->_variableFactory->create();
        $var->loadByCode('dev_name');

        return $var->getValue('text');
    }

    /**
     * Get helper data
     *
     * @return mixed
     */
    public function getHelperData() {
        return $this->_helperData;
    }
}