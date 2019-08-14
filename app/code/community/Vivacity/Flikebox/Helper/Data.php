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
     public function getShowHeaderText()
    {
        return Mage::getStoreConfig('flikebox/general/show_header_text');
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
     public function getShowSmallHeader()
    {
        return Mage::getStoreConfig('flikebox/general/show_small_header');
    }
    public function getHideCoverPhoto()
    {
        return Mage::getStoreConfig('flikebox/general/hide_cover_photo');
    }
     public function getAdaptContainerWidth()
    {
        return Mage::getStoreConfig('flikebox/general/adapt_container_width');
    }
     public function getLanguage()
    {
        return Mage::getStoreConfig('flikebox/general/language');
    }
     public function getTabs()
    {
        return Mage::getStoreConfig('flikebox/general/tabs');
    }
}
