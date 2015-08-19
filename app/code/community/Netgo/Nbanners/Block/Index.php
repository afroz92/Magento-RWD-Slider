<?php
/***************************************
 *** Complete RWD Slider ***
 ***************************************
 *
 * @category    Netgo
 * @package     Netgo_Nbanners
 * @author      Afroz Alam <afroz92@gmail.com>
 * @copyright   NetAttingo Technologies (http://www.netattingo.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */
class Netgo_Nbanners_Block_Index extends Mage_Core_Block_Template{   


public function __construct()
    {
       parent::__construct();  
    }

public function getSliderCollection()
    {      
       
        
		$collection = Mage::getModel('nbanners/nbanners')->getCollection();
		$collection->addFieldToFilter('nbanners_status', 1);
		$collection->addFieldToFilter('nbannergroup', $this->getGroup());
		return $collection;
        
    }
}