<?php
/**
 * @category    MageFlat
 * @package     CoffeeBytes_MageFlat
 * @version     1.0
 */
class CoffeeBytes_MageFlat_Model_Adminhtml_Observer
{
    public function setTheme()
    {
        $theme = Mage::getStoreConfig('coffeebytes_mageflat/config/theme');
        Mage::getDesign()->setTheme($theme);
        foreach (array('layout', 'template', 'skin', 'locale') as $type) {
            Mage::getDesign()->setTheme($type, $theme);
        }
    }
}
