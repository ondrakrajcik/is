<?php

namespace App;

use Nette,Model;


class ClientPresenter extends BasePresenter{
    
    private $ClientRespository;
    
    /** @var IAddClientFormFactory @inject */
    public $addClientFormFactory;
    
    /** @var  Client|null */
    protected $client;
    
    public function __construct(Nette\Database\Context $database){
        $this->ClientRespository = new Model\ClientRespository($database);
    }
    
    public function renderDefault(){
        
    }
    
    public function renderClientList(){
        $this->template->clients = $this->ClientRespository->getClients();
    }
    
    public function renderEditClient($id){
        $client = $this->ClientRespository->getClient($id);
        if($client == false ){
            $this->flashMessage("Zákazník nebyl nalezen!","Not found");
        }
    }

    protected function createComponentAddClientForm() {
        return $this->addClientFormFactory->create();
    }
    
}