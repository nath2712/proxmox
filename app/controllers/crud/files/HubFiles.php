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
    public function getViewForm(): string{
        return "Hub/form.html";
    }

    public function getViewDisplay(): string{
        return "Hub/display.html";
    }

    public function getViewHome(): string{
        return "Hub/home.html";
    }

    public function getViewItemHome(): string{
        return "Hub/itemHome.html";
    }

    public function getViewNav(): string{
        return "Hub/nav.html";
    }

}
