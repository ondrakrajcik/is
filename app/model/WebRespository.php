<?php
namespace Model;


class WebRespository {

private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }
    
    public function getWebPages(){
        return $this->database->table('webpage');
    }
    
}
