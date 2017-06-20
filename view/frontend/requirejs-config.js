/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/model/place-order': {
                'Konstanchuk_OrderComment/js/model/set-comment': true
            }
        }
    }
};