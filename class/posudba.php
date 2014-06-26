<?php

class posudba
{
	const TABLE_NAME = 'posudba';

	protected $sifra;
	protected $datumPosudbe;
	protected $datumPovratka;
	protected $knjiga;
	protected $clan;

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
		$this->knjiga = $data['knjiga'];
		$this->clan = $data['clan'];
	    }
    
    public function vratidatumPosudbe()
    {
        return $this->datumPosudbe;
    }
    
    public function vratidatumPovratka()
    {
        return $this->datumPovratka;
    }
    
    public function vratiKnjigu()
    {
        return $this->knjiga;
    }
    
    public function vratiClana()
    {
        return $this->clan;
    }
    
    
	
}



