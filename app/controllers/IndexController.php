<?php
namespace controllers;

use Ubiquity\controllers\auth\WithAuthTrait;
use Ubiquity\core\postinstall\Display;
use Ubiquity\log\Logger;
use Ubiquity\themes\ThemesManager;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;

/**
 * Controller IndexController
 */
class IndexController extends ControllerBase {

    public function index() {
        //@activeTheme/main/vHeader.html
        //UResponse::header('Location','/');
       /* if ($this->getAuthController()->_getActiveUser()){
            $this->loadView('@activeTheme/Hub/index.html');
        }*/
        if(USession::exists('activeUser')){
            UResponse::header('Location','/home');
        }
        else {
            $this->loadView('@activeTheme/main/index.html');
        }

    }
}
