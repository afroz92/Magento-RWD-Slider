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
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table nbanners(nbanners_id int not null auto_increment, nbannergroup  varchar(100), nbanners_name varchar(100), nbanners_alt varchar(100), nbanners_caption varchar(100), nbanners_cap_pos  varchar(100), nbanners_effect  varchar(100), nbanners_show_pag varchar(10), nbanners_show_pr_next  varchar(10), nbanners_image varchar(100), nbanners_status varchar(5), primary key(nbanners_id));
   
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 