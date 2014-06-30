<?php

class Posudba
{
	const TABLE_NAME = 'posudba';

	protected $sifra;
	protected $datumPosudbe;
	protected $datumPovratka;
	protected $clan;
        protected $knjiga;

	public function __construct($sifra)
	{
    	$pdo=new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $pdo->exec("set names utf8;");

        $izraz = $pdo->prepare("SELECT * FROM `posudba` WHERE sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));

		$data = $izraz->fetch(PDO::FETCH_ASSOC);
		$pdo = null; // close connection

		$this->datumPosudbe = $data['datumPosudbe'];
		$this->datumPovratka = $data['datumPovratka'];
                $this->clan = $data['clan'];
		$this->knjiga = $data['knjiga'];
		
	    }
    
    public function vratidatumPosudbe()
    {
        return $this->datumPosudbe;
    }
    
    public function vratidatumPovratka()
    {
        return $this->datumPovratka;
    }
    
    
    public function vratiClana()
    {
        return $this->clan;
    }
    
    
    public function vratiKnjigu()
    {
        return $this->knjiga;
    }
    
    
	
}



