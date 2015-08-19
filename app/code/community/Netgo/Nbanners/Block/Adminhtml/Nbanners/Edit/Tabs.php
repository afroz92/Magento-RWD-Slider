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
class Netgo_Nbanners_Block_Adminhtml_Nbanners_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("nbanners_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("nbanners")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("nbanners")->__("Item Information"),
				"title" => Mage::helper("nbanners")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
