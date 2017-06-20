<?php

/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\OrderComment\Observer;

use Magento\Framework\Event\ObserverInterface;
use Konstanchuk\OrderComment\Helper\Data as Helper;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Json\Helper\Data as JsonHelper;


class PlaceOrder implements ObserverInterface
{
    /** @var Helper */
    protected $_helper;

    /** @var \Magento\Framework\App\Request\Http */
    protected $_request;

    /** @var JsonHelper */
    protected $_jsonHelper;

    public function __construct(Helper $helper,
                                RequestInterface $request,
                                JsonHelper $jsonHelper)
    {
        $this->_helper = $helper;
        $this->_request = $request;
        $this->_jsonHelper = $jsonHelper;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->_helper->isEnabled()) {
            return;
        }
        $data = $this->_jsonHelper->jsonDecode($this->_request->getContent());
        if ($data && isset($data['customer_order_comment'])) {
            /** @var \Magento\Sales\Model\Order $order */
            $order = $observer->getOrder();
            $order->setCustomerOrderComment(trim($data['customer_order_comment']));
        }
    }
}