<?php

/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\OrderComment\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;


class Data extends AbstractHelper
{
    const XML_PATH_IS_ENABLED = 'checkout/options/order_comment_enabled';

    public function isEnabled($store = ScopeInterface::SCOPE_STORE)
    {
        return (bool)$this->scopeConfig->getValue(static::XML_PATH_IS_ENABLED, $store);
    }
}