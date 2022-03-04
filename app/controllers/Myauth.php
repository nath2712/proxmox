<?php
namespace controllers;
 use models\User;
 use models\User_;
 use Ubiquity\orm\DAO;
 use Ubiquity\utils\http\URequest;
 use Ubiquity\utils\http\USession;

 /**
  * Controller Myauth
  */
class Myauth extends \Ubiquity\controllers\auth\AuthController {
    protected function onConnect($connected) {
        $urlParts=$this->getOriginalURL();
        USession::set($this->_getUserSessionKey(), $connected);
        if(isset($urlParts)){
            $this->_forward(implode("/",$urlParts));
        }else{
            //TODO
            //Forwarding to the default controller/action
        }
    }

    protected function _connect() {
        if(URequest::isPost()){
            $email=URequest::post($this->_getLoginInputName());
            $password=URequest::post($this->_getPasswordInputName());
            //TODO
            //Loading from the database the user corresponding to the parameters
            //Checking user creditentials
            //Returning the user
        }
        return;
    }

    /**
     * {@inheritDoc}
     * @see \Ubiquity\controllers\auth\AuthController::isValidUser()
     */
    public function _isValidUser($action=null): bool {
        return USession::exists($this->_getUserSessionKey());
    }

    public function _getBaseRoute(): string {
        return 'Myauth';
    }
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
        if (!DAO::exists(User_::class, 'login= ?', [$login])) {

        $user = new User_();
        $user->setLogin($login);
        $user->setPassword(URequest::password_verify());
        }
        return false;
    }
    public function  _displayInfoAsString(): bool{
    return false;
    }
    protected function _newAccountCreationRule(string $accountName): ?bool{
        $excluded=['admin','root','Admin'];
        return \array_search($accountName,$excluded)===false && filter_var($accountName);
    }

}
