<?php
namespace controllers;
use models\User_;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;
use Ubiquity\utils\http\URequest;
use Ubiquity\attributes\items\router\Route;

#[Route(path: "/MyAuth",inherited: true,automated: true)]
class MyAuth extends \Ubiquity\controllers\auth\AuthController{

	protected function onConnect($connected) {
		$urlParts=$this->getOriginalURL();
		USession::set($this->_getUserSessionKey(), $connected);
		if(isset($urlParts)){
			$this->_forward(implode("/",$urlParts));
		}else{
            UResponse::header('Location','/hub/home');
			//TODO
			//Forwarding to the default controller/action
		}
	}

	protected function _connect() {
        $co = false;
		if(URequest::isPost()){
			$email=URequest::post($this->_getLoginInputName());
			$password=URequest::post($this->_getPasswordInputName());
            $co = true;
			//TODO
			//Loading from the database the user corresponding to the parameters
			//Checking user creditentials
			//Returning the user
		}
		return $co;
	}
	
	/**
	 * {@inheritDoc}
	 * @see \Ubiquity\controllers\auth\AuthController::isValidUser()
	 */
	public function _isValidUser($action=null): bool {
		return USession::exists($this->_getUserSessionKey());
	}

	/*public function _getBaseRoute(): string {
		return ;
	}*/

    protected function hasAccountCreation():bool
    {
        return true;
    }

    /* protected function _AccountCreationRule(string $accountName): ?bool{
         $count = DAO::count(User::class,'login=?',false[$accountName]);
         return $count ==0;
     }*/
    protected function _create(string $login, string $password): ?bool
    {
            $create = false;
        if (!DAO::exists(User_::class, 'login= ?', [$login])) {
            $create = true;
            $user = new User_();
            $user->setLogin($login);
            $user->setPassword(URequest::password_hash($password));
            $user->setRole("@Etudiant");
            DAO::toInsert($user);
//Perform inserts
            DAO::flushInserts();
        }
        return $create;
    }
    public function  _displayInfoAsString(): bool{
        return true;
    }
    protected function _newAccountCreationRule(string $accountName): ?bool{
        $excluded=['admin','root','Admin'];
        return \array_search($accountName,$excluded)===false && filter_var($accountName);
    }

}
