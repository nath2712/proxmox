<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "groupe")]
class Groupe{
	
	#[Id()]
	#[Column(name: "Id_Groupe",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Groupe;

	
	#[Column(name: "name",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $name;

	public function getId_Groupe(){
		return $this->Id_Groupe;
	}

	public function setId_Groupe($Id_Groupe){
		$this->Id_Groupe=$Id_Groupe;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
	}

	 public function __toString(){
		return $this->name.'';
	}


}