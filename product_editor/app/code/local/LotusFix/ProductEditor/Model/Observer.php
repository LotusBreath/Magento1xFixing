<?php
class LotusFix_ProductEditor_Model_Observer {
    public function addEditorHandler($observer){
        /** @var Mage_Catalog_Helper_Output $_helperOutput */
        /** @var Agere_Wysiwyg_Helper_Filter $_helperFilter */
        $_helperOutput = Mage::helper('catalog/output');
        $_helperFilter = Mage::helper('lotusfix_producteditor/output');
        $_helperOutput->addHandler('categoryAttribute', $_helperFilter);
        $_helperOutput->addHandler('productAttribute', $_helperFilter);
    }
}