<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "vm")]
class Vm{
	
	#[Id()]
	#[Column(name: "Id_VM",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_VM;

	
	#[Column(name: "number",nullable: true,dbType: "int(11)")]
	private $number;

	
	#[Column(name: "name",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $name;

	
	#[Column(name: "ip",nullable: true,dbType: "int(11)")]
	private $ip;

	
	#[Column(name: "sshPort",nullable: true,dbType: "int(11)")]
	private $sshPort;

	
	#[Column(name: "os",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $os;

	
	#[Column(name: "Id_Groupe",nullable: true,dbType: "int(11)")]
	private $Id_Groupe;

	
	#[Column(name: "Id_User_",nullable: true,dbType: "int(11)")]
	private $Id_User_;

	
	#[Column(name: "Id_Serveur_idServeur",dbType: "int(11)")]
	#[Validator(type: "notNull",constraints: [])]
	private $Id_Serveur_idServeur;

	public function getId_VM(){
		return $this->Id_VM;
	}

	public function setId_VM($Id_VM){
		$this->Id_VM=$Id_VM;
	}

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		$this->number=$number;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip=$ip;
	}

	public function getSshPort(){
		return $this->sshPort;
	}

	public function setSshPort($sshPort){
		$this->sshPort=$sshPort;
	}

	public function getOs(){
		return $this->os;
	}

	public function setOs($os){
		$this->os=$os;
	}

	public function getId_Groupe(){
		return $this->Id_Groupe;
	}

	public function setId_Groupe($Id_Groupe){
		$this->Id_Groupe=$Id_Groupe;
	}

	public function getId_User_(){
		return $this->Id_User_;
	}

	public function setId_User_($Id_User_){
		$this->Id_User_=$Id_User_;
	}

	public function getId_Serveur_idServeur(){
		return $this->Id_Serveur_idServeur;
	}

	public function setId_Serveur_idServeur($Id_Serveur_idServeur){
		$this->Id_Serveur_idServeur=$Id_Serveur_idServeur;
	}

	 public function __toString(){
		return ($this->Id_Serveur_idServeur??'no value').'';
	}


}