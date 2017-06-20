/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
define(['jquery', 'ko', 'uiComponent'], function ($, ko, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Konstanchuk_OrderComment/checkout/shipping/comment'
        },
        canVisibleBlock: window.checkoutConfig.show_order_comment
    });
});
