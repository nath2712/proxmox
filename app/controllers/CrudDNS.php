<?php
namespace controllers;
use controllers\crud\datas\CrudDNSDatas;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\CrudDNSViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\CrudDNSEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\CrudDNSFiles;
use Ubiquity\controllers\crud\CRUDFiles;
use Ubiquity\attributes\items\router\Route;

#[Route(path: "/crud/{resource}",inherited: true,automated: true)]
class CrudDNS extends \Ubiquity\controllers\crud\MultiResourceCRUDController{

	#[Route(name: "crud.index",priority: -1000)]
	public function index() {
		parent::index();
	}


	#[Route(path: "#//home",name: "crud.home",priority: 100)]
	public function home(){
		parent::home();
	}

	protected function getIndexType():array {
		return ['four link cards','card'];
	}
	
	public function _getBaseRoute():string {
		return "/".$this->resource."";
	}
	
	protected function getAdminData(): CRUDDatas{
		return new CrudDNSDatas($this);
	}

	protected function getModelViewer(): ModelViewer{
		return new CrudDNSViewer($this,$this->style);
	}

	protected function getEvents(): CRUDEvents{
		return new CrudDNSEvents($this);
	}

	protected function getFiles(): CRUDFiles{
		return new CrudDNSFiles();
	}


}
