<?php
namespace controllers;
use Ajax\semantic\widgets\dataform\DataForm;
use controllers\crud\datas\HubDatas;
use Ubiquity\controllers\auth\AuthController;
use Ubiquity\controllers\auth\WithAuthTrait;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\HubViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\HubEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\HubFiles;
use Ubiquity\controllers\crud\CRUDFiles;
use Ubiquity\attributes\items\router\Route;

#[Route(path: "/{resource}/hub",inherited: true,automated: true)]
class Hub extends \Ubiquity\controllers\crud\MultiResourceCRUDController{

    protected $headerView = "@activeTheme/main/vHeader.html";

    protected $footerView = "@activeTheme/main/vFooter.html";

    use WithAuthTrait;
	#[Route(name: "crud.index",priority: -1)]
	public function index() {
		parent::index();
	}


	#[Route(path: "#//home/hub",name: "crud.home",priority: 100)]
	public function home(){
		parent::home();
	}

	protected function getIndexType():array {
		return ['four link cards','card'];
	}
	
	public function _getBaseRoute():string {
       // $this->loadView('@activeTheme/main/vHeader.html');
		return "/".$this->resource."/hub";
	}
/*    public function setFormFieldsComponent(DataForm $form, $fieldTypes, $attributes = []) {
        $form->fieldAsHidden('id');
       // $attributes ->Hiden();
    }*/
	protected function getAdminData(): CRUDDatas{
		return new HubDatas($this);
	}

	protected function getModelViewer(): ModelViewer{
		return new HubViewer($this,$this->style);
	}

	protected function getEvents(): CRUDEvents{
		return new HubEvents($this);
	}

	protected function getFiles(): CRUDFiles{
		return new HubFiles();
	}


    protected function getAuthController(): AuthController
    {
        return $this->_auth ??= new MyAuth($this);
    }
}
