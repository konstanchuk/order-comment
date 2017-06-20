<?php

/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\OrderComment\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Konstanchuk\OrderComment\Helper\Data as Helper;


class CommentConfigProvider implements ConfigProviderInterface
{
    /** @var Helper */
    protected $helper;

    public function __construct(Helper $helper) {
        $this->helper = $helper;
    }

    public function getConfig()
    {
		$config = [
		    'show_order_comment' => $this->helper->isEnabled(),
        ];
		return $config;
    }
}