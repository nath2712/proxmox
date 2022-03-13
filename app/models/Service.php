<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "service")]
class Service{
	
	#[Id()]
	#[Column(name: "Id_Service",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Service;

	
	#[Column(name: "service",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $service;

	public function getId_Service(){
		return $this->Id_Service;
	}

	public function setId_Service($Id_Service){
		$this->Id_Service=$Id_Service;
	}

	public function getService(){
		return $this->service;
	}

	public function setService($service){
		$this->service=$service;
	}

	 public function __toString(){
		return $this->Id_Service.'';
	}


}