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
class Netgo_Nbanners_IndexController extends Mage_Core_Controller_Front_Action{
	
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Titlename"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Titlename"),
                "title" => $this->__("Titlename")
		   ));

      $this->renderLayout(); 
	  
    }
}