<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "vmservices")]
class Vmservices{
	
	#[Id()]
	#[Column(name: "Id_Service_idService",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Service_idService;

	
	#[Id()]
	#[Column(name: "Id_VM_idVm",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_VM_idVm;

	
	#[Column(name: "port",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $port;

	public function getId_Service_idService(){
		return $this->Id_Service_idService;
	}

	public function setId_Service_idService($Id_Service_idService){
		$this->Id_Service_idService=$Id_Service_idService;
	}

	public function getId_VM_idVm(){
		return $this->Id_VM_idVm;
	}

	public function setId_VM_idVm($Id_VM_idVm){
		$this->Id_VM_idVm=$Id_VM_idVm;
	}

	public function getPort(){
		return $this->port;
	}

	public function setPort($port){
		$this->port=$port;
	}

	 public function __toString(){
		return $this->Id_Service_idService.'';
	}


}