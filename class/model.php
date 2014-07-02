<?php

class Model {
    protected $data = array();
    
    protected $tableName = null;
    
    protected $pdoConnection = null;
    
    public function __construct($sifra=null) {
        
        $this->pdoConnection = new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $this->pdoConnection->exec("set names utf8;");	    
	    	    
        if(is_null($sifra)) {
            $this->data['sifra'] = null;
            return;
        }
        
        $izraz = $this->pdoConnection->prepare("SELECT * FROM `{$this->tableName}` WHERE sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));


        $this->data = $izraz->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getSifra() {
        return $this->data['sifra'];
    }
    
    public function setSifra($sifra) {
        $this->data['sifra'] = $sifra;
    }
    
    public function save() {
        if(isset($this->data['sifra'])) {
            // Radi update
            $last = end($this->data);
            
            $sql = 'UPDATE '.$this->tableName;
            
            foreach ($this->data as $columnName => $columnValue) {
                $sql .= ' SET '.$columnName.'="'.$columnValue.'"';
                
                if($columnValue != $last) {
                    $sql .= ',';
                }
            } 
            
            $sql .= ' WHERE sifra = '.$this->data['sifra'];
            
            $this->pdoConnection->exec($sql);
            
        } else {
            // Radi insert
            $last = end($this->data);
            
            $sql = 'INSERT INTO '.$this->tableName;
            $values = array();
            $columns = array();
            
            foreach ($this->data as $columnName => $columnValue) {
                $values[] = $columnValue;
                $columns[] = $columnName;
            }  
            
            $sql .= "(`" . implode("`,`", $columns) . "`) VALUES ('" . implode("','", $values) . "')";
            
            $this->pdoConnection->exec($sql);
            
            $this->setSifra($this->pdoConnection->lastInsertId());
        } 
    }
    
    
    public function delete() {
        if(isset($this->data['sifra'])) {
            // Radi delete
                    
            $sql = 'DELETE '.$this->tableName;
            
            $sql .= ' WHERE sifra = '.$this->data['sifra'];
        
    }
}
}