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
class Netgo_Nbanners_Block_Adminhtml_Nbanners_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "nbanners_id";
				$this->_blockGroup = "nbanners";
				$this->_controller = "adminhtml_nbanners";
				$this->_updateButton("save", "label", Mage::helper("nbanners")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("nbanners")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("nbanners")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("nbanners_data") && Mage::registry("nbanners_data")->getId() ){

				    return Mage::helper("nbanners")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("nbanners_data")->getId()));

				} 
				else{

				     return Mage::helper("nbanners")->__("Add Item");

				}
		}
}