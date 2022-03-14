<?php
namespace controllers\crud\viewers;

use Ajax\semantic\html\elements\HtmlButton;
use Ajax\semantic\widgets\dataform\DataForm;
use Ajax\semantic\widgets\datatable\DataTable;
use Ubiquity\controllers\crud\viewers\ModelViewer;
 /**
  * Class HubViewer
  */
class HubViewer extends ModelViewer{
	//use override/implement Methods
    protected function setFormFieldsComponent_(DataForm $form, $fieldTypes, $attributes = [])
    {
        $form->fieldAsDropDown('role',['admin'=>'@ADMIN','Etudiant'=>'@Etudiant','prof'=>'@PROF']);
    }


}
