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
            ->setTitle($this->helper('coffeebytes_mageflat')->__('Current Admin Theme'))
            ->setValue(Mage::getStoreConfig('coffeebytes_mageflat/config/theme'))
            ->setOptions($this->_getSelectOptions());
    }

    protected function _getSelectOptions()
    {
        return Mage::getModel('coffeebytes_mageflat/adminhtml_system_config_source_themes')->toOptionArray();
    }
}
