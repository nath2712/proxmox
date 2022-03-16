<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class EtudiantvmFiles
  */
class EtudiantvmFiles extends CRUDFiles{
	public function getViewIndex(): string{
		return "Etudiantvm/index.html";
	}

	public function getViewForm(): string{
		return "Etudiantvm/form.html";
	}

	public function getViewDisplay(): string{
		return "Etudiantvm/display.html";
	}


}
