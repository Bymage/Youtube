<?php
/**
 * @author Bymage Team
 * @copyright Copyright (c)  2015 Bymage (http://www.bymage.com)
 * @package Bymage_Youtube
 */
class Bymage_Youtube_Block_Config extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('bymage/byyoutube/config.phtml');
    }

    public function javascriptParams()
    {
        $params = array(
            'apiKey'                =>  $this->_getModuleConfig('apikey'),
            'youTubeChannelURL'     =>  $this->_getModuleConfig('youTubeChannelURL'),
            'youTubePlaylistURL'    =>  $this->_getModuleConfig('youTubePlaylistURL'),
            'youmaxDefaultTab'      =>  $this->_getModuleConfig('youmaxDefaultTab'),
            'youmaxColumns'         =>  $this->_getModuleConfig('youmaxColumns'),
            'showVideoInLightbox'   =>  $this->_getModuleConfig('showVideoInLightbox'),
            'maxResults'            =>  $this->_getModuleConfig('maxResults')
        );

        return Zend_Json::encode($params);
    }

    private function _getModuleConfig($setting){
        return  Mage::getStoreConfig('byyoutube/general/' . $setting);
    }
}
