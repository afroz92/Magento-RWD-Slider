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
class Netgo_Nbanners_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	public function enabledisable(){
		$enableDisableValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/status', Mage::app()->getStore());
		return $enableDisableValue;
		
	}
	/*public function enablejquery(){
		$enableJqueryValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/enablejquery', Mage::app()->getStore());
		return $enableJqueryValue;
		
	}*/
	public function showpagination(){
		$paginationValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/pagination', Mage::app()->getStore());
		return $paginationValue;
		
	}
	public function effecttype(){
		$effectValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/effect', Mage::app()->getStore());
		return $effectValue;
		
	}
	/*public function pauseonhover(){
		$pauseonhoverValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/pauseonhover', Mage::app()->getStore());
		return $pauseonhoverValue;
		
	}*/
	public function sliderspeed(){
		$speedValue = Mage::getStoreConfig('netgo_nbanners/netgo_nbanners_group/speed', Mage::app()->getStore());
		return $speedValue;
		
	}
}
	 