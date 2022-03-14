<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "dns")]
class Dns{
	
	#[Id()]
	#[Column(name: "id",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "ipAddress",nullable: true,dbType: "varchar(15)")]
	#[Validator(type: "length",constraints: ["max"=>15])]
	private $ipAddress;

	
	#[Column(name: "port",nullable: true,dbType: "int(11)")]
	private $port;

	
	#[Column(name: "dnsName",nullable: true,dbType: "varchar(255)")]
	#[Validator(type: "length",constraints: ["max"=>255])]
	private $dnsName;

	
	#[Column(name: "idServer",dbType: "int(11)")]
	#[Validator(type: "notNull",constraints: [])]
	private $idServer;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
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


	public function getIdServer(){
		return $this->idServer;
	}


	public function setIdServer($idServer){
		$this->idServer=$idServer;
	}


	 public function __toString(){
		return ($this->idServer??'no value').'';
	}

}