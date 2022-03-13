<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "usergroups")]
class Usergroups{
	
	#[Id()]
	#[Column(name: "Id_User_",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_User_;

	
	#[Id()]
	#[Column(name: "Id_Groupe",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Groupe;

	public function getId_User_(){
		return $this->Id_User_;
	}

	public function setId_User_($Id_User_){
		$this->Id_User_=$Id_User_;
	}

	public function getId_Groupe(){
		return $this->Id_Groupe;
	}

	public function setId_Groupe($Id_Groupe){
		$this->Id_Groupe=$Id_Groupe;
	}

	 public function __toString(){
		return $this->Id_User_.'';
	}


}