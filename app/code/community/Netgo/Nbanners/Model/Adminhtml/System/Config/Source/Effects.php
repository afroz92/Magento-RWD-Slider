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
class Netgo_Nbanners_Model_Adminhtml_System_Config_Source_Effects
{
   public function toOptionArray()
   {
       $effects = array(
           array('value' => 'scrollHorz', 'label' => 'Scroll Horizontal'),
           array('value' => 'scrollVert', 'label' => 'Scroll Vertical'),
           array('value' => 'shuffle', 'label' => 'Shuffle'),
		   array('value' => 'fade', 'label' => 'Fade'),
		   array('value' => 'scrollUp', 'label' => 'Scroll Up'),
       );
 
       return $effects;
   }
}
