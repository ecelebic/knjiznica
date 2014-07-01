<?php

include_once('class/baza.php');

trait noviClan
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

trait novaPosudba
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

trait novaKnjiga
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

class Operater extends Baza
{
    
    use novaKnjiga;
    use novaPosudba;
    use noviClan;
    public function Prijava($email, $lozinka){
        $status = false;

        if($email && $lozinka){
            $st = $this->db->prepare("select * from operater where email=? and lozinka=?");
            $st->bindParam(1,$email);
            $st->bindParam(2,$lozinka);
            $st->execute();

            if($st->rowCount() == 1){
                $res = $st->fetch(PDO::FETCH_ASSOC);

                $_SESSION['operater_sifra'] = $res['sifra'];

                $status = $res['sifra'];
            }
        }

        return $status;
    }

    public function Odjava() {
        session_destroy();
        session_regenerate_id();

//        if (isset($_SESSION['prijavljen'])) {
//            $_SESSION['prijavljen'] = false;
//        }
    }
}









