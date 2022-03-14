<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class HubFiles
  */
class HubFiles extends CRUDFiles{
	public function getViewIndex(): string{
		return "Hub/index.html";
	}


}
