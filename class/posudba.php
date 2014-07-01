<?php

class Posudba
{
const TABLE_NAME = 'posudba';

protected $sifra;
protected $datumPosudbe;
protected $datumPovratka;
protected $ime;
protected $prezime;
protected $naslov;
protected $autor;

public function __construct($sifra)
{
     $pdo=new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $pdo->exec("set names utf8;");

        $izraz = $pdo->prepare("select a.datumPosudbe, a.datumPovratka, b.naslov, b.autor, c.ime, c.prezime
                                from posudba a
                                inner join knjiga b
                                on a.knjiga=b.sifra
                                inner join clan c   
                                on a.clan=c.sifra WHERE c.sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));

$data = $izraz->fetch(PDO::FETCH_ASSOC);
$pdo = null; // close connection

            $this->datumPosudbe = $data['datumPosudbe'];
            $this->datumPovratka = $data['datumPovratka'];
            $this->ime = $data['ime'];
            $this->prezime = $data['prezime'];
            $this->naslov = $data['naslov'];
            $this->autor = $data['autor'];

}
    
    public function vratidatumPosudbe()
    {
        return $this->datumPosudbe;
    }
    
    public function vratidatumPovratka()
    {
        return $this->datumPovratka;
    }
    
    
    public function vratiNaslovKnjige()
    {
        return $this->naslov;
    }
    
    
    public function vratiAutoraKnjige()
    {
        return $this->autor;
    }
    
     public function vratiImeClana()
    {
        return $this->ime;
    }
    
     public function vratiPrezimeClana()
    {
        return $this->prezime;
    }
}



