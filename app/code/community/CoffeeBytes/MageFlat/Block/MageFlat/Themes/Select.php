<?php
/**
 * @category    MageFlat
 * @package     CoffeeBytes_MageFlat
 * @version     1.0
 */
class CoffeeBytes_MageFlat_Block_Adminhtml_Themes_Select extends Mage_Adminhtml_Block_Html_Select
{
    protected function _construct()
    {
        $this->setName('theme')
            ->setId('interface_theme')
            ->setTitle($this->helper('mageflat_admintheme')->__('Current Admin Theme'))
            ->setValue(Mage::getStoreConfig('mageflat_admintheme/config/theme'))
            ->setOptions($this->_getSelectOptions());
    }

    protected function _getSelectOptions()
    {
        return Mage::getModel('mageflat_admintheme/adminhtml_system_config_source_themes')->toOptionArray();
    }
}
