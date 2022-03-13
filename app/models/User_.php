<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Transformer;
use Ubiquity\attributes\items\Table;

#[Table(name: "user_")]
class User_{
	
	#[Id()]
	#[Column(name: "Id_User_",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $Id_User_;

	
	#[Column(name: "login",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	private $login;

	
	#[Column(name: "password",nullable: true,dbType: "varchar(100)")]
	#[Validator(type: "length",constraints: ["max"=>100])]
	#[Transformer(name: "password")]
	private $password;

	
	#[Column(name: "role",nullable: true,dbType: "varchar(50)")]
	#[Validator(type: "length",constraints: ["max"=>50])]
	private $role;

	public function getId_User_(){
		return $this->Id_User_;
	}

	public function setId_User_($Id_User_){
		$this->Id_User_=$Id_User_;
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

	public function getRole(){
		return $this->role;
	}

	public function setRole($role){
		$this->role=$role;
	}

	 public function __toString(){
		return $this->login.'';
	}


}