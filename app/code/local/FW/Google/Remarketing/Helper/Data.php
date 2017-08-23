<?php

class FW_Google_Remarketing_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled($store = null)
    {
        return Mage::getStoreConfigFlag('thirdparty/googleremarketing/active', $store);
    }
}