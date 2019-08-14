<?php
class Vivacity_Flikebox_Model_System_Config_Yesno
{

    /**
     * Options getter
     *
     * @return array
     */
public function toOptionArray()
         {
			$option  = array(
			"true"=>'Yes',			
			"false"=>'No');
			return $option;  
	     }

}
