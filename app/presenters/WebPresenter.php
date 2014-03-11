<?php

namespace App;

use Nette, Model;

class WebPresenter extends BasePresenter{

    private $WebRespository;
    /** @var IAddWebFormFactory @inject */
    public $addWebFormFactory;
    
    
    public function __construct(Nette\Database\Context $database){
        $this->WebRespository = new Model\WebRespository($database);
    }
    
    public function renderDefault(){
        
    }
    
    public function renderWebList(){
        $this->template->webpages = $this->WebRespository->getWebPages();
    }
    
    public function createComponentAddWebForm(){
        return $this->addWebFormFactory->create();
    }
    
}
