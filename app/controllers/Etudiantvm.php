<?php
namespace controllers;
use controllers\crud\files\EtudiantvmFiles;
use Ubiquity\controllers\auth\AuthController;
use Ubiquity\controllers\auth\WithAuthTrait;
use Ubiquity\controllers\crud\CRUDFiles;


class Etudiantvm extends \Ubiquity\controllers\crud\CRUDController{
    use WithAuthTrait{
        initialize as initializeAuth;
    }

    public function initialize()
    {
        $this->headerView='@activeTheme/main/vHeader.html';
        $this->footerView='@activeTheme/main/vFooter.html';
        $this->initializeAuth();
    }
	public function __construct(){
		parent::__construct();
		\Ubiquity\orm\DAO::start();
		$this->model='models\\Vm';
		$this->style='';
	}

	public function _getBaseRoute(): string {
		return 'Etudiantvm';
	}
	
	protected function getFiles(): CRUDFiles{
		return new EtudiantvmFiles();
	}


    protected function getAuthController(): AuthController
    {
        return $this->_auth ??= new MyAuth($this);
    }
}
