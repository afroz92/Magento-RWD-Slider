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
class Netgo_Nbanners_Adminhtml_NbannersController extends Mage_Adminhtml_Controller_Action
{
		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("nbanners/nbanners")->_addBreadcrumb(Mage::helper("adminhtml")->__("Nbanners  Manager"),Mage::helper("adminhtml")->__("Nbanners Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("Nbanners"));
			    $this->_title($this->__("Manager Nbanners"));

				$this->_initAction();
				$this->renderLayout();
		}
		public function editAction()
		{			    
			    $this->_title($this->__("Nbanners"));
				$this->_title($this->__("Nbanners"));
			    $this->_title($this->__("Edit Item"));
				
				$id = $this->getRequest()->getParam("id");
				$model = Mage::getModel("nbanners/nbanners")->load($id);
				if ($model->getId()) {
					Mage::register("nbanners_data", $model);
					$this->loadLayout();
					$this->_setActiveMenu("nbanners/nbanners");
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Nbanners Manager"), Mage::helper("adminhtml")->__("Nbanners Manager"));
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Nbanners Description"), Mage::helper("adminhtml")->__("Nbanners Description"));
					$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);
					$this->_addContent($this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit"))->_addLeft($this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit_tabs"));
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("adminhtml/session")->addError(Mage::helper("nbanners")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}

		public function newAction()
		{

		$this->_title($this->__("Nbanners"));
		$this->_title($this->__("Nbanners"));
		$this->_title($this->__("New Item"));

        $id   = $this->getRequest()->getParam("id");
		$model  = Mage::getModel("nbanners/nbanners")->load($id);

		$data = Mage::getSingleton("adminhtml/session")->getFormData(true);
		if (!empty($data)) {
			$model->setData($data);
		}

		Mage::register("nbanners_data", $model);

		$this->loadLayout();
		$this->_setActiveMenu("nbanners/nbanners");

		$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);

		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Nbanners Manager"), Mage::helper("adminhtml")->__("Nbanners Manager"));
		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Nbanners Description"), Mage::helper("adminhtml")->__("Nbanners Description"));


		$this->_addContent($this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit"))->_addLeft($this->getLayout()->createBlock("nbanners/adminhtml_nbanners_edit_tabs"));

		$this->renderLayout();

		}
		public function saveAction()
		{

			$post_data=$this->getRequest()->getPost();


				if ($post_data) {

					try {

						
				 //save image
		try{

if((bool)$post_data['nbanners_image']['delete']==1) {

	        $post_data['nbanners_image']='';

}
else {

	unset($post_data['nbanners_image']);

	if (isset($_FILES)){

		if ($_FILES['nbanners_image']['name']) {

			if($this->getRequest()->getParam("id")){
				$model = Mage::getModel("nbanners/nbanners")->load($this->getRequest()->getParam("id"));
				if($model->getData('nbanners_image')){
						$io = new Varien_Io_File();
						$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('nbanners_image'))));	
				}
			}
						$path = Mage::getBaseDir('media') . DS . 'nbanners' . DS .'nbanners'.DS;
						$uploader = new Varien_File_Uploader('nbanners_image');
						$uploader->setAllowedExtensions(array('jpg','png','gif'));
						$uploader->setAllowRenameFiles(false);
						$uploader->setFilesDispersion(false);
						$destFile = $path.$_FILES['nbanners_image']['name'];
						$filename = $uploader->getNewFileName($destFile);
						$uploader->save($path, $filename);

						$post_data['nbanners_image']='nbanners/nbanners/'.$filename;
		}
    }
}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image


						$model = Mage::getModel("nbanners/nbanners")
						->addData($post_data)
						->setId($this->getRequest()->getParam("id"))
						->save();

						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Nbanners was successfully saved"));
						Mage::getSingleton("adminhtml/session")->setNbannersData(false);

						if ($this->getRequest()->getParam("back")) {
							$this->_redirect("*/*/edit", array("id" => $model->getId()));
							return;
						}
						$this->_redirect("*/*/");
						return;
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						Mage::getSingleton("adminhtml/session")->setNbannersData($this->getRequest()->getPost());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					return;
					}

				}
				$this->_redirect("*/*/");
		}



		public function deleteAction()
		{
				if( $this->getRequest()->getParam("id") > 0 ) {
					try {
						$model = Mage::getModel("nbanners/nbanners");
						$model->setId($this->getRequest()->getParam("id"))->delete();
						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item was successfully deleted"));
						$this->_redirect("*/*/");
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					}
				}
				$this->_redirect("*/*/");
		}

		
		public function massRemoveAction()
		{
			try {
				$ids = $this->getRequest()->getPost('nbanners_ids', array());
				foreach ($ids as $id) {
                      $model = Mage::getModel("nbanners/nbanners");
					  $model->setId($id)->delete();
				}
				Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item(s) was successfully removed"));
			}
			catch (Exception $e) {
				Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
			}
			$this->_redirect('*/*/');
		}
			
		/**
		 * Export order grid to CSV format
		 */
		public function exportCsvAction()
		{
			$fileName   = 'nbanners.csv';
			$grid       = $this->getLayout()->createBlock('nbanners/adminhtml_nbanners_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'nbanners.xml';
			$grid       = $this->getLayout()->createBlock('nbanners/adminhtml_nbanners_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
}
