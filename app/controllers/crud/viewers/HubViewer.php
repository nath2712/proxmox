<?php
namespace controllers\crud\viewers;

use Ajax\semantic\html\elements\HtmlButton;
use Ajax\semantic\widgets\dataform\DataForm;
use Ajax\semantic\widgets\datatable\DataTable;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use Ubiquity\utils\http\USession;

/**
  * Class HubViewer
  */
class HubViewer extends ModelViewer{
	//use override/implement Methods
    protected function setFormFieldsComponent_(DataForm $form, $fieldTypes, $attributes = [])
    {
        $form->fieldAsDropDown('role',['@ADMIN'=>'@ADMIN','@Etudiant'=>'@Etudiant','@PROF'=>'@PROF']);
    }
  /*  protected function getDataTableRowButtons(): array
    {
        var_dump($this->controller->resource);die();
        $user=USession::get('activeUser');

        if($user!=null && $user->getRole()=='@ADMIN'){
            return ['display','edit','delete'];
        }
        return ['display'];
    }*/

    public function recordsPerPage($model, $totalCount = 0){
        return null;
    }


}
