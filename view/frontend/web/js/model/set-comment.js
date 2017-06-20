/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
define([
    'jquery',
    'mage/utils/wrapper'
], function ($, wrapper) {
    'use strict';

    return function (placeOrderModel) {
        return wrapper.wrap(placeOrderModel, function (originalAction, serviceUrl, payload, messageContainer) {
            if (!window.checkoutConfig.show_order_comment) {
                return;
            }
            payload['customer_order_comment'] = $('[name="order_comment"]').val();
            return originalAction(serviceUrl, payload, messageContainer);
        });
    };
});
