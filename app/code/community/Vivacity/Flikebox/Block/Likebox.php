<?php
class Vivacity_Flikebox_Block_Likebox extends Mage_Core_Block_Template
{
    public function getStoreConfig($path){
    	
		return Mage::getStoreConfig($path);
    }
    public function test(){
    	
		return "Testing";
    } 
   /* protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('flikebox/likebox.phtml');
    }
     public function getLocale()
    {
        return Mage::app()->getStore()->getConfig(Mage_Core_Model_Locale::XML_PATH_DEFAULT_LOCALE);
    }
    public function getScheme()
    {
        return Mage::app()->getStore()->isCurrentlySecure() ? 'https:' : 'http:';
    } */
    
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
			
				$showHeader 	= $this->getStoreConfig($this->getShowHeader());
				$showFace 		= $this->getStoreConfig($this->getShowFace());
				//$showStream 	= $this->getStoreConfig($this->getShowStream());
				/* added new 4 field 05-02-2016*/
				$showSmallHeader =  $this->getStoreConfig($this->getShowSmallHeader());
				$HideCoverPhoto = $this->getStoreConfig($this->getHideCoverPhoto());
				$AdaptContainerWidth = $this->getStoreConfig($this->getAdaptContainerWidth());
				$Language = $this->getStoreConfig($this->getLanguage());
				$Tabs = $this->getStoreConfig($this->getTabs());
				$header = Mage::getStoreConfig('flikebox/general/show_header_text');
				$data = "<div class='subtitlefb'><h2>".$header."</h2></div>";
				 if(Mage::getStoreConfig('flikebox/general/show_header') == 1){ 
				return $data.'<iframe src="http://www.facebook.com/connect/connect.php?locale='.$Language.'&href=https://www.facebook.com/'.$pageId.'&connections='.$connections.'&header='.$showHeader.'&show_faces='.$showFace.'&small_header='.$showSmallHeader.'&hide_cover='.$HideCoverPhoto.'&tabs='.$Tabs.'&adapt_container_width='.$AdaptContainerWidth.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
				}		
				else{
				return $data.'<iframe src="http://www.facebook.com/connect/connect.php?locale='.$Language.'&href=https://www.facebook.com/'.$pageId.'&connections='.$connections.'&header='.$showHeader.'&show_faces='.$showFace.'&small_header='.$showSmallHeader.'&hide_cover='.$HideCoverPhoto.'&tabs='.$Tabs.'&adapt_container_width='.$AdaptContainerWidth.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
				
					}	
			
		    } else {
		    	
				return null;
			
		    }
		   } 
		   else {
		   		$connections 	= Mage::helper('flikebox')->getConnection();
		    	
				$pageId 		= Mage::helper('flikebox')->getPageId();
				$width 			= Mage::helper('flikebox')->getWidth();
				$height 		= Mage::helper('flikebox')->getHeight();
			
				$showHeader 	= Mage::helper('flikebox')->getShowHeader();
				$showFace 		= Mage::helper('flikebox')->getShowFace();
			//	$showStream 	= Mage::helper('flikebox')->getShowStream();
				/* added new three field 05-02-2016*/
				$showSmallHeader =  Mage::helper('flikebox')->getShowSmallHeader();
					$HideCoverPhoto =Mage::helper('flikebox')->getHideCoverPhoto();
					$AdaptContainerWidth =Mage::helper('flikebox')->getAdaptContainerWidth();
					$Language = Mage::helper('flikebox')->getLanguage();
					$Tabs = Mage::helper('flikebox')->getTabs();
				$header = Mage::getStoreConfig('flikebox/general/show_header_text');
				$data = "<div class='subtitlefb'><h2>".$header."</h2></div>";
				 if(Mage::getStoreConfig('flikebox/general/show_header') == 1){ 
				return $data.'<iframe src="http://www.facebook.com/connect/connect.php?locale='.$Language.'&href=https://www.facebook.com/'.$pageId.'&connections='.$connections.'&header='.$showHeader.'&show_faces='.$showFace.'&small_header='.$showSmallHeader.'&hide_cover='.$HideCoverPhoto.'&tabs='.$Tabs.'&adapt_container_width='.$AdaptContainerWidth.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
			}		
				else{	
				return $data.'<iframe src="http://www.facebook.com/connect/connect.php?locale='.$Language.'&href=https://www.facebook.com/'.$pageId.'&connections='.$connections.'&header='.$showHeader.'&show_faces='.$showFace.'&small_header='.$showSmallHeader.'&hide_cover='.$HideCoverPhoto.'&tabs='.$Tabs.'&adapt_container_width='.$AdaptContainerWidth.'&width='.$width.'&height='.$height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
			
					}
		   }
		    
		} else {
			
		    	return null;
		    
			}
    }
}
