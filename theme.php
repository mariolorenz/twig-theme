<?php

/**
 * This file is part of OXID eSales Twig theme.
 *
 * OXID eSales Twig theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Twig theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Twig theme.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 */

declare(strict_types=1);

/**
 * Theme Information
 */
$aTheme = [
    'id' => 'twig',
    'title' => 'Twig',
    'description' => 'Twig is OXID`s official responsive theme based on the CSS framework Bootstrap 3.',
    'thumbnail' => 'theme.jpg',
    'version' => '1.1.0',
    'author' => '<a href="http://www.oxid-esales.com" title="OXID eSales AG">OXID eSales AG</a>',
    'settings' => [
        [
            'group' => 'images',
            'name' => 'aDetailImageSizes',
            'type' => 'aarr',
            'value' => [
                'oxpic1' => '540*340',
                'oxpic2' => '540*340',
                'oxpic3' => '540*340',
                'oxpic4' => '540*340',
                'oxpic5' => '540*340',
                'oxpic6' => '540*340',
                'oxpic7' => '540*340',
                'oxpic8' => '540*340',
                'oxpic9' => '540*340',
                'oxpic10' => '540*340',
                'oxpic11' => '540*340',
                'oxpic12' => '540*340',
            ],
        ],
        [
            'group' => 'display',
            'name' => 'aNrofCatArticles',
            'type' => 'arr',
            'value' => ["10", "20", "50", "100"],
        ],
        [
            'group' => 'display',
            'name' => 'aNrofCatArticlesInGrid',
            'type' => 'arr',
            'value' => ["12", "16", "24", "32"],
        ],
        [
            'group' => 'features',
            'name' => 'bl_showCompareList',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showGiftWrapping',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showListmania',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'bl_showManufacturerSlider',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showVouchers',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'features',
            'name' => 'bl_showWishlist',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'background',
            'name' => 'blBackgroundAttachment',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'emails',
            'name' => 'blEmailsShowProductPictures',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowHelp',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowLinks',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowNewsletter',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'footer',
            'name' => 'blFooterShowNewsletterForm',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blFullwidthLayout',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'blGAAnonymizeIPs',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowBirthdayFields',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowFinalStep',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'display',
            'name' => 'blShowListDisplayType',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'images',
            'name' => 'blSliderShowImageCaption',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'background',
            'name' => 'blUseBackground',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'blUseGAEcommerceTracking',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'blUseGAPageTracker',
            'type' => 'bool',
            'value' => 1,
        ],
        [
            'group' => 'googlets',
            'name' => 'blUseGoogleTS',
            'type' => 'bool',
            'value' => 0,
        ],
        [
            'group' => 'display',
            'name' => 'iNewBasketItemMessage',
            'type' => 'select',
            'value' => 'str',
            'constraints' => '0|1|2|3',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundColor',
            'type' => 'str',
            'value' => '#CCEBF5',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundPath',
            'type' => 'str',
            'value' => 'mein_hintergrundbild.jpg',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundPosHorizontal',
            'type' => 'select',
            'value' => 'center',
            'constraints' => 'left|right|center',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundPosVertical',
            'type' => 'select',
            'value' => 'top',
            'constraints' => 'left|right|center',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundRepeat',
            'type' => 'select',
            'value' => 'no-repeat',
            'constraints' => 'no-repeat|repeat-x|repeat-y|repeat',
        ],
        [
            'group' => 'background',
            'name' => 'sBackgroundSize',
            'type' => 'select',
            'value' => 'cover',
            'constraints' => 'cover|contain|normal',
        ],
        [
            'group' => 'footer',
            'name' => 'sBlogUrl',
            'type' => 'str',
            'value' => 'https://wordpress.org',
        ],
        [
            'group' => 'images',
            'name' => 'sCatIconsize',
            'type' => 'str',
            'value' => '168*100',
        ],
        [
            'group' => 'images',
            'name' => 'sCatPromotionsize',
            'type' => 'str',
            'value' => '370*107',
        ],
        [
            'group' => 'images',
            'name' => 'sCatThumbnailsize',
            'type' => 'str',
            'value' => '1140*250',
        ],
        [
            'group' => 'display',
            'name' => 'sDefaultListDisplayType',
            'type' => 'select',
            'value' => 'infogrid',
            'constraints' => 'infogrid|line|grid',
        ],
        [
            'group' => 'googlets',
            'name' => 'sDeliveryDaysNotOnStock',
            'type' => 'str',
            'value' => '14',
        ],
        [
            'group' => 'googlets',
            'name' => 'sDeliveryDaysOnStock',
            'type' => 'str',
            'value' => '6',
        ],
        [
            'group' => 'logo',
            'name' => 'sEmailLogo',
            'type' => 'str',
            'value' => 'logo_email.png',
        ],
        [
            'group' => 'footer',
            'name' => 'sFacebookUrl',
            'type' => 'str',
            'value' => 'https://www.facebook.com',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon128File',
            'type' => 'str',
            'value' => 'favicon_128x128.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon16File',
            'type' => 'str',
            'value' => 'favicon_16x16.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon32File',
            'type' => 'str',
            'value' => 'favicon_32x32.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon48File',
            'type' => 'str',
            'value' => 'favicon_48x48.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon512File',
            'type' => 'str',
            'value' => 'favicon_512x512.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFavicon64File',
            'type' => 'str',
            'value' => 'favicon_64x64.png',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFaviconFile',
            'type' => 'str',
            'value' => 'favicon.ico',
        ],
        [
            'group' => 'favicons',
            'name' => 'sFaviconMSTileColor',
            'type' => 'str',
            'value' => '#D83434',
        ],
        [
            'group' => 'googleanalytics',
            'name' => 'sGATrackingId',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'contact',
            'name' => 'sGoogleMapsAddr',
            'type' => 'str',
            'value' => 'OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',
        ],
        [
            'group' => 'footer',
            'name' => 'sGooglePlusUrl',
            'type' => 'str',
            'value' => 'https://plus.google.com',
        ],
        [
            'group' => 'googlets',
            'name' => 'sGoogleShoppingAccountId',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'googlets',
            'name' => 'sGoogleVendorId',
            'type' => 'str',
            'value' => '',
        ],
        [
            'group' => 'images',
            'name' => 'sIconsize',
            'type' => 'str',
            'value' => '87*87',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoFile',
            'type' => 'str',
            'value' => 'logo_oxid.png',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoHeight',
            'type' => 'str',
            'value' => '38',
        ],
        [
            'group' => 'logo',
            'name' => 'sLogoWidth',
            'type' => 'str',
            'value' => '200',
        ],
        [
            'group' => 'images',
            'name' => 'sManufacturerIconsize',
            'type' => 'str',
            'value' => '100*100',
        ],
        [
            'group' => 'googlets',
            'name' => 'sPageLanguage',
            'type' => 'str',
            'value' => 'de_DE',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShippingDaysNotOnStock',
            'type' => 'str',
            'value' => '5',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShippingDaysOnStock',
            'type' => 'str',
            'value' => '3',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShoppingCountry',
            'type' => 'str',
            'value' => 'DE',
        ],
        [
            'group' => 'googlets',
            'name' => 'sShoppingLanguage',
            'type' => 'str',
            'value' => 'de',
        ],
        [
            'group' => 'display',
            'name' => 'sStartPageListDisplayType',
            'type' => 'select',
            'value' => 'grid',
            'constraints' => 'infogrid|line|grid',
        ],
        [
            'group' => 'images',
            'name' => 'sThumbnailsize',
            'type' => 'str',
            'value' => '390*245',
        ],
        [
            'group' => 'footer',
            'name' => 'sTwitterUrl',
            'type' => 'str',
            'value' => 'https://twitter.com',
        ],
        [
            'group' => 'footer',
            'name' => 'sYouTubeUrl',
            'type' => 'str',
            'value' => 'https://www.youtube.com',
        ],
        [
            'group' => 'images',
            'name' => 'sZoomImageSize',
            'type' => 'str',
            'value' => '665*665',
        ],
    ],
];
