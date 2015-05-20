<?php
/**
 * Ho_Recurring
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Ho
 * @package     Ho_Recurring
 * @copyright   Copyright © 2015 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 * @author      Maikel Koek – H&O <info@h-o.nl>
 */

/**
 * Class Ho_Recurring_Model_Profile_Address
 *
 * @method int getProfileId()
 * @method Ho_Recurring_Model_Profile_Address setProfileId(int $value)
 * @method int getAddressId()
 * @method Ho_Recurring_Model_Profile_Address setAddressId(int $value)
 */
class Ho_Recurring_Model_Profile_Address extends Mage_Core_Model_Abstract
{
    const ADDRESS_SOURCE_CUSTOMER = 1;
    const ADDRESS_SOURCE_ORDER    = 2;

    const ADDRESS_TYPE_BILLING  = 1;
    const ADDRESS_TYPE_SHIPPING = 2;

    protected function _construct ()
    {
        $this->_init('ho_recurring/profile_address');
    }
}
