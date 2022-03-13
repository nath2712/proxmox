<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "route")]
class Route{
	
	#[Id()]
	#[Column(name: "Id_Route",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Route;

	
	#[Column(name: "portOrigin",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $portOrigin;

	
	#[Column(name: "portDest",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $portDest;

	
	#[Column(name: "hostDest",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $hostDest;

	
	#[Column(name: "order_",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $order_;

	
	#[Column(name: "Id_Serveur_idServer",dbType: "int(11)")]
	#[Validator(type: "notNull",constraints: [])]
	private $Id_Serveur_idServer;

	public function getId_Route(){
		return $this->Id_Route;
	}

	public function setId_Route($Id_Route){
		$this->Id_Route=$Id_Route;
	}

	public function getPortOrigin(){
		return $this->portOrigin;
	}

	public function setPortOrigin($portOrigin){
		$this->portOrigin=$portOrigin;
	}

	public function getPortDest(){
		return $this->portDest;
	}

	public function setPortDest($portDest){
		$this->portDest=$portDest;
	}

	public function getHostDest(){
		return $this->hostDest;
	}

	public function setHostDest($hostDest){
		$this->hostDest=$hostDest;
	}

	public function getOrder_(){
		return $this->order_;
	}

	public function setOrder_($order_){
		$this->order_=$order_;
	}

	public function getId_Serveur_idServer(){
		return $this->Id_Serveur_idServer;
	}

	public function setId_Serveur_idServer($Id_Serveur_idServer){
		$this->Id_Serveur_idServer=$Id_Serveur_idServer;
	}

	 public function __toString(){
		return ($this->Id_Serveur_idServer??'no value').'';
	}


}