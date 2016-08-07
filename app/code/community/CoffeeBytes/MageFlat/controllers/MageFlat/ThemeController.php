<?php
/**
 * @category    MageFlat
 * @package     CoffeeBytes_MageFlat
 * @version     1.0
 */
class CoffeeBytes_MageFlat_Adminhtml_ThemeController extends Mage_Adminhtml_Controller_Action
{
    public function changeAction()
    {
        $theme = $this->getRequest()->getParam('theme');
        if ($theme) {
            Mage::getConfig()->saveConfig('mageflat_admintheme/config/theme', $theme);
            Mage::app()->getCacheInstance()->cleanType('config');
        }
        $this->_redirectReferer();
    }
}
