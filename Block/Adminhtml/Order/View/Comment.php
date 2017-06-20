<?php

/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\OrderComment\Block\Adminhtml\Order\View;


class Comment extends \Magento\Sales\Block\Adminhtml\Order\AbstractOrder
{
    public function getCustomerOrderComment()
    {
        return $this->getOrder()->getCustomerOrderComment();
    }
}
