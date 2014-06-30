<?php

class Novaposudba
{
	
	protected $sifra;
	protected $datumPosudbe;
	protected $datumPovratka;
	protected $clan;
        protected $knjiga;

	public function __construct($sifra)
	{
    	$pdo=new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $pdo->exec("set names utf8;");

		$data = $izraz->fetch(PDO::FETCH_ASSOC);
		$pdo = null; // close connection

		$this->datumPosudbe = $data['datumPosudbe'];
		$this->datumPovratka = $data['datumPovratka'];
                $this->clan = $data['clan'];
		$this->knjiga = $data['knjiga'];
		
	    }
    
    public function dodajdatumPosudbe()
    {
        return $this->datumPosudbe;
    }
    
    public function dodajdatumPovratka()
    {
        return $this->datumPovratka;
    }
    
    
    public function dodajClana()
    {
        return $this->clan;
    }
    
    
    public function dodajKnjigu()
    {
        return $this->knjiga;
    }
    
    
	
}



