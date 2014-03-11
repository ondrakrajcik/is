<?php

namespace App;

use Nette, Model;

class AddClientForm extends \Nette\Application\UI\Form{

    public function __construct(){
        parent::__construct();
        $this->buildForm();
    }
    
        /** @return Form */
    private function buildForm() {
        $this->addProtection();
        $this->addText("firmaOsvc","Firma/Osvč")->setAttribute("class","textField form-control")->setRequired();
        $this->addText("ic","IČ")->setAttribute("class","textField form-control")->addRule($this::INTEGER);
        $this->addText("dic","DIČ")->setAttribute("class","textField form-control")->addRule($this::INTEGER);
        $this->addText("email","email")->setAttribute("class","textField form-control")->addRule($this::EMAIL,"Zadejte platný email.")->setRequired();
        $this->addText("telefon","telefon")->setAttribute("class","textField form-control")->setRequired();
        $this->addSubmit("submit","Přidat záznam")->setAttribute("class","submitButton btn btn-default");
        $this->onSuccess[] = array($this, 'addClientFormSubmitted');

    }
    
    public function addClientFormSubmitted(AddClientForm $form){
        print "submited";
    }
    
}

interface IAddClientFormFactory{

    /** @return AddClientForm */
    public function create();

}
    

