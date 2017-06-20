/**
 * Order Comment Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
define([
    'jquery'
], function ($) {
    'use strict';

    return function (config, element) {
        config = $.extend({
            'length_char': 150,
            'ellipses_text': '...',
            'more_text': $.mage.__('Show more >'),
            'less_text': $.mage.__('Show less')
        }, config);

        $(element).each(function () {
            var content = $(this).text();

            if (content.length > config.length_char) {
                var c = content.substr(0, config.length_char);
                var h = content.substr(config.length_char, content.length - config.length_char);
                var html = c + '<span class="more-ellipses">' + config.ellipses_text + '&nbsp;</span><span class="more-content"><span>' + h + '</span>&nbsp;&nbsp;<a href="#" class="more-link">' + config.more_text + '</a></span>';
                $(this).html(html);
            }

            $(this).find('.more-link').click(function () {
                if ($(this).hasClass('less')) {
                    $(this).removeClass('less');
                    $(this).html(config.more_text);
                } else {
                    $(this).addClass('less');
                    $(this).html(config.less_text);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    };
});
