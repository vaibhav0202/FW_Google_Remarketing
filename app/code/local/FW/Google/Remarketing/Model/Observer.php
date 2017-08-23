<?php

class FW_Google_Remarketing_Model_Observer
{
    /**
     * @param $observer
     * If enabled, output google remarketing JS variables on each page.
     */
    public function generateRemarketingJs($observer)
    {
        $storeId = Mage::app()->getStore()->getId();
        $isEnabled = Mage::helper('fw_google_remarketing')->isEnabled($storeId);
        if (empty($isEnabled)) return;

        $controller = $observer->getAction();
        $layout = $controller->getLayout();
        if ($layout) {
            $block = $layout->createBlock('core/template');
            if ($block) {
                $block->setTemplate('fw/googleremarketing/remarketing.phtml');
                $bblock = $layout->getBlock('before_body_end');
                if ($bblock) {
                    $bblock->append($block);
                }
            }
        }
    }
}
