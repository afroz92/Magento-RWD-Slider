Usage in CMS page
{{block type="nbanners/index" group="home_group" template="nbanners/index.phtml"}}

Note: If you are using theme other than rwd, follow this extra steps

1) Put these in app/design/frontend/base/default/template/nbanners/index.phtml file

<script type="text/javascript" src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN); ?>frontend/your_package_name/your_theme_name/js/lib/jquery.cycle2.min.js"></script>

<script type="text/javascript" src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN); ?>frontend/ your_package_name/your_theme_name/js/lib/jquery.cycle2.swipe.min.js"></script>

<script type="text/javascript" src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN); ?>frontend/ your_package_name/your_theme_name/js/slideshow.js"></script>


2) Now in page.xml file put:

	<action method="addJs"><script>lib/jquery/jquery-1.10.2.min.js</script></action>
						<action method="addJs"><script>lib/jquery/noconflict.js</script></action>

