<?
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

Class ofcoder extends CModule
{
	var $MODULE_ID = "ofcoder";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	public function __construct()
	{
		$arModuleVersion = array();

		include(__DIR__.'/version.php');

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		//$this->MODULE_NAME = Loc::getMessage("OFCODER_INSTALL_NAME");
		$this->MODULE_NAME = 'Moдуль ofcoder';
		//$this->MODULE_DESCRIPTION = Loc::getMessage("OFCODER_INSTALL_DESCRIPTION");
		$this->MODULE_DESCRIPTION = 'Модуль для разработки';
	}


	function InstallDB($install_wizard = true)
	{

		RegisterModule("ofcoder");
		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		UnRegisterModule("ofcoder");

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
		return true;
	}

	function UnInstallFiles()
	{
		return true;
	}

	function DoInstall()
	{
		$this->InstallFiles();
		$this->InstallDB(false);		
	}

	function DoUninstall()
	{
		
		$this->UnInstallDB(false);
	}
}
?>