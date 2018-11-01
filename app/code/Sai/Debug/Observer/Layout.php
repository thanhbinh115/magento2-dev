<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/31
 * Time: 5:28 PM
 */

namespace Sai\Debug\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class Layout implements ObserverInterface {

    protected $_logger;

    protected $_urlInterface;

    public function __construct (
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\UrlInterface $urlInterface
    ) {
        $this->_logger = $logger;
        $this->_urlInterface = $urlInterface;
    }

    public function execute(EventObserver $observer)
    {
        $xml = $observer->getEvent()->getLayout()->getXmlString();
        $xml = str_replace('xsi:type="serviceUrl"', '', $xml);
        $xml = str_replace('xsi:type="number"', '', $xml);
        $xml = str_replace('xsi:type="url"', '', $xml);
        $xml = str_replace('xsi:type="boolean"', '', $xml);
        $xml = str_replace('xsi:type="string"', '', $xml);
        $xml = str_replace('xsi:type="array"', '', $xml);

        /*$this->_logger->debug($xml);*//*If you use it, check ouput string xml in var/debug.log*/
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/layout_block.xml');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($this->_urlInterface->getCurrentUrl());
        $logger->info($xml);

        return $this;
    }
}