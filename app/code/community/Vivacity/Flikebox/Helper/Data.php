<?php
class Vivacity_Flikebox_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isActive()
    {
        return Mage::getStoreConfig('flikebox/general/active');
    }
    
    public function getPosition()
    {
        return Mage::getStoreConfig('flikebox/general/col_layout');
    }
    public function getPageId()
    {
        return Mage::getStoreConfig('flikebox/general/page_id');
    }
    public function getWidth()
    {
        return Mage::getStoreConfig('flikebox/general/width');
    }
    public function getHeight()
    {
        return Mage::getStoreConfig('flikebox/general/height');
    }
    public function getConnection()
    {
        return Mage::getStoreConfig('flikebox/general/connection');
    }
    public function getShowHeader()
    {
        return Mage::getStoreConfig('flikebox/general/show_header');
    }
    public function getShowFace()
    {
        return Mage::getStoreConfig('flikebox/general/show_face');
    }
    public function getShowStream()
    {
        return Mage::getStoreConfig('flikebox/general/show_stream');
    }
}
