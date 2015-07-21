<?php
/**
 *               _
 *              | |
 *     __ _   _ | | _  _   ___  _ __
 *    / _` | / || || || | / _ \| '  \
 *   | (_| ||  || || || ||  __/| || |
 *    \__,_| \__,_|\__, | \___||_||_|
 *                 |___/
 *
 * Adyen Subscription module (https://www.adyen.com/)
 *
 * Copyright (c) 2015 H&O (http://www.h-o.nl/)
 * See LICENSE.txt for license details.
 *
 * Author: Adyen <magento@adyen.com>, H&O <info@h-o.nl>
 */
 
class Adyen_Subscription_Block_Adminhtml_Sales_Order_Create_Header
    extends Mage_Adminhtml_Block_Sales_Order_Create_Header {

    /**
     * @return string
     */
    protected function _toHtml()
    {
        /** @var Adyen_Subscription_Model_Profile $profile */
        $profile = Mage::registry('current_profile');

        if (! $profile) {
            return parent::_toHtml();
        }


        if ($this->getRequest()->getParam('full_update')) {
            $out = Mage::helper('adyen_subscription')->__(
                'Edit Profile #%s for %s in %s',
                $profile->getIncrementId(),
                $profile->getCustomer()->getName(),
                $this->getStore()->getName()
            );
        } else {
            $out = Mage::helper('adyen_subscription')->__(
                'Edit Scheduled Order for Profile #%s for %s in %s',
                $profile->getIncrementId(),
                $profile->getCustomer()->getName(),
                $this->getStore()->getName()
            );
        }

        $out = $this->escapeHtml($out);
        $out = '<h3 class="icon-head head-sales-order">' . $out . '</h3>';
        return $out;
    }
}