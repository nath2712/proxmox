<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "dns")]
class Dns{
	
	#[Id()]
	#[Column(name: "Id_DNS",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_DNS;

	
	#[Column(name: "ipAddress",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $ipAddress;

	
	#[Column(name: "port",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $port;

	
	#[Column(name: "dnsName",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $dnsName;

	
	#[Column(name: "Id_Serveur_idServer",dbType: "int(11)")]
	#[Validator(type: "notNull",constraints: [])]
	private $Id_Serveur_idServer;

	public function getId_DNS(){
		return $this->Id_DNS;
	}

	public function setId_DNS($Id_DNS){
		$this->Id_DNS=$Id_DNS;
	}

	public function getIpAddress(){
		return $this->ipAddress;
	}

	public function setIpAddress($ipAddress){
		$this->ipAddress=$ipAddress;
	}

	public function getPort(){
		return $this->port;
	}

	public function setPort($port){
		$this->port=$port;
	}

	public function getDnsName(){
		return $this->dnsName;
	}

	public function setDnsName($dnsName){
		$this->dnsName=$dnsName;
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