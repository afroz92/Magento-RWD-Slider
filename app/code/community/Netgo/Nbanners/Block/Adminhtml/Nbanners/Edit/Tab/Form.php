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
class Netgo_Nbanners_Block_Adminhtml_Nbanners_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("nbanners_form", array("legend"=>Mage::helper("nbanners")->__("Item information")));

				
						$fieldset->addField("nbannergroup", "text", array(
						"label" => Mage::helper("nbanners")->__("Group"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "nbannergroup",
						));
					
						$fieldset->addField("nbanners_name", "text", array(
						"label" => Mage::helper("nbanners")->__("Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "nbanners_name",
						));
					
						$fieldset->addField("nbanners_alt", "text", array(
						"label" => Mage::helper("nbanners")->__("Alt text"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "nbanners_alt",
						));
					
						$fieldset->addField("nbanners_caption", "textarea", array(
						"label" => Mage::helper("nbanners")->__("Caption"),
						"name" => "nbanners_caption",
						));
									
						 $fieldset->addField('nbanners_cap_pos', 'select', array(
						'label'     => Mage::helper('nbanners')->__('Caption Position'),
						'values'   => Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getValueArray5(),
						'name' => 'nbanners_cap_pos',
						));				
						/* $fieldset->addField('nbanners_effect', 'select', array(
						'label'     => Mage::helper('nbanners')->__('Effect'),
						'values'   => Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getValueArray6(),
						'name' => 'nbanners_effect',
						));				
						 $fieldset->addField('nbanners_show_pag', 'select', array(
						'label'     => Mage::helper('nbanners')->__('Show Pagination'),
						'values'   => Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getValueArray8(),
						'name' => 'nbanners_show_pag',
						));				
						 $fieldset->addField('nbanners_show_pr_next', 'select', array(
						'label'     => Mage::helper('nbanners')->__('Show Pr Next'),
						'values'   => Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getValueArray9(),
						'name' => 'nbanners_show_pr_next',
						));				*/
						$fieldset->addField('nbanners_image', 'image', array(
						'label' => Mage::helper('nbanners')->__('Banner Image'),
						'name' => 'nbanners_image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						 $fieldset->addField('nbanners_status', 'select', array(
						'label'     => Mage::helper('nbanners')->__('Status'),
						'values'   => Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getValueArray11(),
						'name' => 'nbanners_status',					
						"class" => "required-entry",
						"required" => true,
						));

				if (Mage::getSingleton("adminhtml/session")->getNbannersData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getNbannersData());
					Mage::getSingleton("adminhtml/session")->setNbannersData(null);
				} 
				elseif(Mage::registry("nbanners_data")) {
				    $form->setValues(Mage::registry("nbanners_data")->getData());
				}
				return parent::_prepareForm();
		}
}
