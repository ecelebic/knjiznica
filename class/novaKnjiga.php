<?php

class Novaknjiga 
{
	protected $sifra;
	protected $naslov;
	protected $autor;
	protected $godinaIzdanja;
	protected $dostupnostKnjige;
	
	public function __construct($sifra) 
	{
	
        $pdo=new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $pdo->exec("set names utf8;");

        $izraz = $pdo->prepare("SELECT * FROM `knjiga` WHERE sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));

		$data = $izraz->fetch(PDO::FETCH_ASSOC);
		$pdo = null; // close connection

		$this->naslov = $data['naslov'];
		$this->autor = $data['autor'];
		$this->godinaIzdanja = $data['godinaIzdanja'];
		$this->dostupnostKnjige = $data['dostupnostKnjige'];	

}

    public function dodajNaslov() 
    {
        return $this->naslov;
    }

    public function dodajAutora() 
    {
        return $this->autor;
    }
    
    public function dodajGodinuIzdanja() 
    {
        return $this->godinaIzdanja;
    }
    
    public function dodajDostupnostKnjige() 
    {
        return $this->dostupnostKnjige;
    }
    
    

}
