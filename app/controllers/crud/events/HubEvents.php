<?php
namespace controllers\crud\events;

use models\Vm;
use Ubiquity\contents\validation\ValidationModelGenerator;
use Ubiquity\controllers\crud\CRUDEvents;
use Ubiquity\utils\http\USession;

/**
  * Class HubEvents
  */
class HubEvents extends CRUDEvents{
    public function onNewInstance(object $instance)
    {

    }

    public function onBeforeUpdate(object $instance, bool $isNew){
        if($instance instanceof Vm && $isNew){
            $instance->setUser_(USession::get('activeUser'));
        }
    }

}
