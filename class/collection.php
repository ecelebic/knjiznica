<?php

class Collection extends Model
{
    
    public function __construct() {
        
        $this->pdoConnection = new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $this->pdoConnection->exec("set names utf8;");	    
	        
        $izraz = $this->pdoConnection->prepare("SELECT * FROM `{$this->tableName}`");
        
        $izraz->execute();

        $this->data = $izraz->fetchAll(PDO::FETCH_ASSOC);
    }    
    
    public function getData()
    {
        return $this->data;
    }
}