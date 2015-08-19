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
class Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("nbannersGrid");
				$this->setDefaultSort("nbanners_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("nbanners/nbanners")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("nbanners_id", array(
				"header" => Mage::helper("nbanners")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "nbanners_id",
				));
                
				$this->addColumn("nbannergroup", array(
				"header" => Mage::helper("nbanners")->__("Group"),
				"index" => "nbannergroup",
				));
				$this->addColumn("nbanners_name", array(
				"header" => Mage::helper("nbanners")->__("Name"),
				"index" => "nbanners_name",
				));
				$this->addColumn("nbanners_alt", array(
				"header" => Mage::helper("nbanners")->__("Alt text"),
				"index" => "nbanners_alt",
				));
						$this->addColumn('nbanners_cap_pos', array(
						'header' => Mage::helper('nbanners')->__('Caption Position'),
						'index' => 'nbanners_cap_pos',
						'type' => 'options',
						'options'=>Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray5(),				
						));
						
						/*$this->addColumn('nbanners_effect', array(
						'header' => Mage::helper('nbanners')->__('Effect'),
						'index' => 'nbanners_effect',
						'type' => 'options',
						'options'=>Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray6(),				
						));
						
						$this->addColumn('nbanners_show_pag', array(
						'header' => Mage::helper('nbanners')->__('Show Pagination'),
						'index' => 'nbanners_show_pag',
						'type' => 'options',
						'options'=>Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray8(),				
						));
						
						$this->addColumn('nbanners_show_pr_next', array(
						'header' => Mage::helper('nbanners')->__('Show Pr Next'),
						'index' => 'nbanners_show_pr_next',
						'type' => 'options',
						'options'=>Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray9(),				
						));*/
						
						$this->addColumn('nbanners_status', array(
						'header' => Mage::helper('nbanners')->__('Status'),
						'index' => 'nbanners_status',
						'type' => 'options',
						'options'=>Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray11(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('nbanners_id');
			$this->getMassactionBlock()->setFormFieldName('nbanners_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_nbanners', array(
					 'label'=> Mage::helper('nbanners')->__('Remove Nbanners'),
					 'url'  => $this->getUrl('*/adminhtml_nbanners/massRemove'),
					 'confirm' => Mage::helper('nbanners')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray5()
		{
            $data_array=array(); 
			$data_array[0]='Position1';
			$data_array[1]='Position2';
			$data_array[2]='Position3';
			$data_array[3]='Position4';
			$data_array[4]='Position5';
			$data_array[5]='Position6';
            return($data_array);
		}
		static public function getValueArray5()
		{
            $data_array=array();
			foreach(Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray5() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray6()
		{
            $data_array=array(); 
			$data_array[0]='Effect1';
			$data_array[1]='Effect2';
			$data_array[2]='Effect3';
			$data_array[3]='Effect4';
			$data_array[4]='Effect5';
			$data_array[5]='Effect6';
            return($data_array);
		}
		static public function getValueArray6()
		{
            $data_array=array();
			foreach(Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray6() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray8()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray8()
		{
            $data_array=array();
			foreach(Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray8() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray9()
		{
            $data_array=array(); 
			$data_array[0]='No';
			$data_array[1]='Yes';
            return($data_array);
		}
		static public function getValueArray9()
		{
            $data_array=array();
			foreach(Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray9() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray11()
		{
            $data_array=array(); 
			$data_array[0]='Disable';
			$data_array[1]='Enable';
            return($data_array);
		}
		static public function getValueArray11()
		{
            $data_array=array();
			foreach(Netgo_Nbanners_Block_Adminhtml_Nbanners_Grid::getOptionArray11() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}