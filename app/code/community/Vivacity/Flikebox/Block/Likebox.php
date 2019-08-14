<?php
class Vivacity_Flikebox_Block_Likebox extends Mage_Core_Block_Template
{
    public function getStoreConfig($path){
    	
		return Mage::getStoreConfig($path);
    }
    public function test(){
    	
		return "Testing";
    }    
    public function getLikebox(){
    	
		$isActive = Mage::helper('flikebox')->isActive();
		$position = Mage::helper('flikebox')->getPosition();
		
		if($isActive) {
			if($position != "custom"){
			
		    if ($position == $this->getPosition()) {
		    	
		    	$connections 	= $this->getStoreConfig($this->getConnection());
		    	
				$pageId 		= $this->getStoreConfig($this->getPageId());
				$width 			= $this->getStoreConfig($this->getWidth());
				$height 		= $this->getStoreConfig($this->getHeight());
			
				$showHeader 	= (bool)$this->getStoreConfig($this->getShowHeader());
				$showFace 		= (bool)$this->getStoreConfig($this->getShowFace());
				$showStream 	= (bool)$this->getStoreConfig($this->getShowStream());
				
				return '<iframe src="http://www.facebook.com/connect/connect.php?id='.$pageId.'&locale='.Mage::app()->getLocale()->getLocaleCode().'&connections='.$connections.'&stream='.$showStream.'&header='.$showHeader.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
			
		    } else {
		    	
				return null;
			
		    }
		   } 
		   else {
		   		$connections 	= Mage::helper('flikebox')->getConnection();
		    	
				$pageId 		= Mage::helper('flikebox')->getPageId();
				$width 			= Mage::helper('flikebox')->getWidth();
				$height 		= Mage::helper('flikebox')->getHeight();
			
				$showHeader 	= (bool)Mage::helper('flikebox')->getShowHeader();
				$showFace 		= (bool)Mage::helper('flikebox')->getShowFace();
				$showStream 	= (bool)Mage::helper('flikebox')->getShowStream();
				
				return '<iframe src="http://www.facebook.com/connect/connect.php?id='.$pageId.'&locale='.Mage::app()->getLocale()->getLocaleCode().'&connections='.$connections.'&stream='.$showStream.'&header='.$showHeader.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
			
		   }
		    
		} else {
			
		    	return null;
		    
			}
    }
}
