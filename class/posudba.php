<?php

class Posudba extends Model
{
    protected $tableName = 'posudba';
    
    public function __construct($sifra) {
        //parent::__construct();
   
        $this->pdoConnection = new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $this->pdoConnection->exec("set names utf8;");	    
	    	    
	    if(is_null($sifra)) {
	        return;
	    }
        $izraz = $this->pdoConnection->prepare("select a.datumPosudbe, a.datumPovratka, b.naslov, b.autor, c.ime, c.prezime
                                                from posudba a
                                                inner join knjiga b
                                                on a.knjiga=b.sifra
                                                inner join clan c
                                                on a.clan=c.sifra WHERE a.sifra=:sifra");

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
    
    public function getNaslovKnjige()
    {
        return $this->data['naslov'];
    }
        
    public function getAutorKnjige()
    {
        return $this->data['autor'];
    }
    
     public function getImeClana()
    {
        return $this->data['ime'];
    }
    
     public function getPrezimeClana()
    {
        return $this->data['prezime'];
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



