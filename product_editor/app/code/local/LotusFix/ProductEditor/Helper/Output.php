<?php
class LotusFix_ProductEditor_Helper_Output extends Mage_Core_Helper_Abstract  {

    public function categoryAttribute($parentHelper, $result, $params) {
        return $this->process($result);
    }

    public function productAttribute($parentHelper, $result, $params) {
        return $this->process($result);
    }

    public function process($result) {
        /** @var Mage_Cms_Helper_Data $helperCms */
        $helperCms = Mage::helper('cms');
        $processor = $helperCms->getPageTemplateProcessor();
        return $processor->filter($result);
    }

}