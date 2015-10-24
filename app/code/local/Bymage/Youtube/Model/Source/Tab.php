<?php
/**
 * @copyright  Copyright (c) 2015 Bymage (http://www.bymage.com)
 */
class Bymage_Youtube_Model_Source_Tab extends Varien_Object
{
    public function toOptionArray()
    {
        $hlp = Mage::helper('byyoutube');
        return array(
            array('value' => 'UPLOADS', 'label' => $hlp->__('UPLOADS')),
            array('value' => 'PLAYLISTS', 'label' => $hlp->__('PLAYLISTS')),
            array('value' => 'FEATURED', 'label' => $hlp->__('FEATURED')),
        );
    }

}