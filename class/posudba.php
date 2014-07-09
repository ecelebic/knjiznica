<?php

class Posudba extends Model
{
    protected $tableName = 'posudba';
    
    public function __construct($sifra=null) {
        parent::__construct();
   
        $this->pdoConnection = new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $this->pdoConnection->exec("set names utf8;");	    
	    	    
        if(is_null($sifra)) {
           $this->data['sifra'] = null;
           return;
        }
        
        $izraz = $this->pdoConnection->prepare("select a.sifra, a.datumPosudbe, a.datumPovratka, CONCAT(b.ime, ' ', b.prezime) as a.clan, CONCAT(c.autor, '-', c.naslov) as c.knjiga
                                                from posudba a
                                                inner join clan b
                                                on a.clan=b.sifra
                                                inner join knjiga c
                                                on a.knjiga=c.sifra WHERE a.sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));


    $this->data = $izraz->fetch(PDO::FETCH_ASSOC);
    }
     
           
    public function getdatumPosudbe()
    {
        return $this->data['datumPosudbe'];
    }
    
    public function getdatumPovratka()
    {
        return $this->data['datumPovratka'];
    }
        
    public function getClan()
    {
        return $this->data['clan'];
    }
    
    public function getKnjiga()
    {
        return $this->data['knjiga'];
    } 
            
     public function setDatumPosudbe($datumPosudbe) {
        $this->data['datumPosudbe'] = $datumPosudbe;
    } 
    
     public function setDatumPovratka($datumPovratka) {
        $this->data['datumPovratka'] = $datumPovratka;
    }
    
     public function setClan($clan) {
        $this->data['clan'] = $clan;
    }
    
     public function setKnjiga($knjiga) {
        $this->data['knjiga'] = $knjiga;
    }
   
}



