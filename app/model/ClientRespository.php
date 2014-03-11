<?php
namespace Model;

class ClientRespository {
   
    private $database;
    
    public function __construct($database)
    {
        $this->database = $database;
    }
    
    public function getClient($id){
        return $this->database->table('client')->where("clientID",$id);
    }
    
    public function getClients(){
        return $this->database->table('client');
    }
    
    
}
