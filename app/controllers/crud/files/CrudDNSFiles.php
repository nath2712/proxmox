<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class CrudDNSFiles
  */
class CrudDNSFiles extends CRUDFiles{
	public function getViewIndex(): string{
		return "CrudDNS/index.html";
	}

	public function getViewForm(): string{
		return "CrudDNS/form.html";
	}

	public function getViewDisplay(): string{
		return "CrudDNS/display.html";
	}

	public function getViewHome(): string{
		return "CrudDNS/home.html";
	}

	public function getViewItemHome(): string{
		return "CrudDNS/itemHome.html";
	}

	public function getViewNav(): string{
		return "CrudDNS/nav.html";
	}


}
