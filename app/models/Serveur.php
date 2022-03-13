<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Transformer;
use Ubiquity\attributes\items\Table;

#[Table(name: "serveur")]
class Serveur{
	
	#[Id()]
	#[Column(name: "Id_Serveur",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_Serveur;

	
	#[Column(name: "ipAddress",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $ipAddress;

	
	#[Column(name: "dnsName",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $dnsName;

	
	#[Column(name: "login",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $login;

	
	#[Column(name: "password",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	#[Transformer(name: "password")]
	private $password;

	public function getId_Serveur(){
		return $this->Id_Serveur;
	}

	public function setId_Serveur($Id_Serveur){
		$this->Id_Serveur=$Id_Serveur;
	}

	public function getIpAddress(){
		return $this->ipAddress;
	}

	public function setIpAddress($ipAddress){
		$this->ipAddress=$ipAddress;
	}

	public function getDnsName(){
		return $this->dnsName;
	}

	public function setDnsName($dnsName){
		$this->dnsName=$dnsName;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login=$login;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password=$password;
	}

	 public function __toString(){
		return $this->login.'';
	}


}