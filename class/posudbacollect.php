<?php

require_once 'class/collection.php';
class PosudbaCollection extends Collection
{
    protected $tableName = 'posudba';    
 
    public function __construct() {
        parent::__construct();
        $this->pdoConnection = new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $this->pdoConnection->exec("set names utf8;");	    
        
        $sql = "select a.sifra, a.datumPosudbe, a.datumPovratka, CONCAT(b.naslov, '-', b.autor) as knjiga, CONCAT(c.ime, ' ', c.prezime) as clan"
                                                . " from posudba as a"
                                                . " inner join knjiga b on a.knjiga=b.sifra "
                                                . " inner join clan c on a.clan=c.sifra";
        
        $izraz = $this->pdoConnection->prepare($sql);

        $izraz->execute();


        $this->data = $izraz->fetchAll(PDO::FETCH_ASSOC);
    }
    }
