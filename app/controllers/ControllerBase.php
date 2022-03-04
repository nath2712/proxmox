<?php
namespace controllers;

use Ubiquity\controllers\auth\AuthController;
use Ubiquity\controllers\auth\WithAuthTrait;
use Ubiquity\controllers\Controller;
use Ubiquity\utils\http\URequest;

/**
 * controllers$ControllerBase
 */
abstract class ControllerBase extends Controller {
use WithAuthTrait;// appel le controller de connection

	protected $headerView = "@activeTheme/main/vHeader.html";

	protected $footerView = "@activeTheme/main/vFooter.html";

	public function initialize() {
		if (! URequest::isAjax()) {
			$this->loadView($this->headerView);
		}
	}

	public function finalize() {
		if (! URequest::isAjax()) {
			$this->loadView($this->footerView);
		}
	}

    protected function getAuthController(): AuthController// appelle le controlleur de connexion
    {
        return new Myauth($this);
    }


}

