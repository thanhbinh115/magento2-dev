<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/31
 * Time: 3:20 PM
 */

namespace Sai\MyCustomization\Controller\Index;

use Magento\Framework\App\Action\Context;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
    }
}