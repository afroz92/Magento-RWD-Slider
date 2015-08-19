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
class Netgo_Nbanners_Block_Adminhtml_Nbanners extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_nbanners";
	$this->_blockGroup = "nbanners";
	$this->_headerText = Mage::helper("nbanners")->__("Nbanners Manager");
	$this->_addButtonLabel = Mage::helper("nbanners")->__("Add New Item");
	parent::__construct();
	
	}

}