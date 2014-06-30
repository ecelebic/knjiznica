<?php

class Clan
{
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


		$data = $izraz->fetch(PDO::FETCH_ASSOC);
		$pdo = null; // close connection

		$this->ime = $data['ime'];
		$this->prezime = $data['prezime'];
		$this->fakultet = $data['fakultet'];
		$this->kontakt = $data['kontakt'];
		$this->mjesto = $data['mjesto'];	
    }
    
    public function dodajIme()
    {
        return $this->ime;
    }
    
    public function dodajPrezime()
    {
        return $this->prezime;
    }
    
    public function dodajFakultet()
    {
        return $this->fakultet;
    }
    
    public function dodajKontakt()
    {
        return $this->kontakt;
    }
    
    public function dodajMjesto()
    {
        return $this->mjesto;
    }
    

}


