<?php

class clan
{
	const TABLE_NAME = 'clan';

	protected $sifra;
	protected $ime;
	protected $prezime;
	protected $fakultet;
	protected $kontakt;
	protected $mjesto;

	public function __construct($sifra)
	{
    	$pdo=new PDO("mysql:host=localhost;dbname=knjiznica","root","root");
        $pdo->exec("set names utf8;");

        $izraz = $pdo->prepare("SELECT * FROM `clan` WHERE sifra=:sifra");

        $izraz->execute(array(
            'sifra' => $sifra
        ));

		$data = $izraz->fetch(PDO::FETCH_ASSOC);
		$pdo = null; // close connection

		$this->ime = $data['ime'];
		$this->prezime = $data['prezime'];
		$this->fakultet = $data['fakultet'];
		$this->kontakt = $data['kontakt'];
		$this->mjesto = $data['mjesto'];	
    }
    
    public function vratiIme()
    {
        return $this->ime;
    }
    
    public function vratiPrezime()
    {
        return $this->prezime;
    }
    
    public function vratiFakultet()
    {
        return $this->fakultet;
    }
    
    public function vratiKontakt()
    {
        return $this->kontakt;
    }
    
    public function vratiMjesto()
    {
        return $this->mjesto;
    }
    

}


