<?php
/**
 * Created by PhpStorm.
 * User: thanhbinh
 * Date: 2018/10/30
 * Time: 1:53 PM
 */

namespace Sai\Customization\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\ObserverInterface;

class Topmenu implements ObserverInterface {

    protected $_request;

    public function __construct(
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->_request = $request;
    }

    /**
     * @param EventObserver $observer
     *
     * @return $this
     */
    public function execute(EventObserver $observer) {
        $urlInterface = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\UrlInterface');
        $route  = $this->_request->getRouteName();
        $active = false; //strpos($route, 'customization');

        //check active route
        if ($route == 'customization') {
            $active = true;
        }

        /**
         * @var \Magento\Framework\Data\Tree\Node $menu
         */
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name' => __('Customization'),
            'id' => 'customization_menu',
            'url' => $urlInterface->getBaseUrl() . 'customization',
            'is_active' => $active
        ];

        $node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);

        return $this;
    }
}