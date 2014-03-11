<?php

namespace App;

use Nette, Model;

class AddWebForm extends Nette\Application\UI\Form {

    public function __construct(){
        parent::__construct();
        $this->buildForm();
    }
    
    /** @return Form */
    private function buildForm(){
        $this->addText("url","URL")->setAttribute("class","textField form-control")->addRule($this::URL, "Zadejte adresu ve správném formátu.")->setRequired();
        $this->addCheckbox("mysql","MySQL")->setAttribute("class","checkBox");
        $this->addCheckbox("ftp","FTP")->setAttribute("class","checkBox");
        $this->addCheckbox("emails","Emaily")->setAttribute("class","checkBox");
        $this->addText("price","Cena")->setType('number')->setAttribute("class","textField form-control")->addRule($this::INTEGER, "Cena musí být číslo.")->setRequired();
        $this->addText("validityFrom","Platnost od")->setAttribute("class","textField form-control")->setRequired();
        $this->addText("validityTo","Platnost do")->setAttribute("class","textField form-control")->setRequired();
        $this->addSubmit("submit","Přidat web")->setAttribute("class","submitButton btn btn-default");
        $this->onSuccess[] = array($this,"addWebFormSubmitted");
    }
    
    public function addWebFormSubmitted(AddWebForm $form){
        $values = $form->getValues();
        $this->database->table("web")->insert(array("wID"=>NULL,"url"=>$values->url,"mysql"=>$values->mysql,"ftp"=>$values->ftp,"emaily"=>$values->emaily, "cena"=>$values->cena, "platnostOd"=>$values->platnostOd,"platnostDo"=>$values->platnostDo));
    }
    
}


interface IAddWebFormFactory{
    
    /** @return AddWebForm */
    public function create();
}