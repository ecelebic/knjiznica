<?php

class Knjiga extends Model
{
	const TABLE_NAME = 'knjiga';

	protected $sifra;
	protected $naslov;
	protected $autor;
	protected $godinaIzdanja;
	protected $dostupnostKnjige;
        protected $tableName = 'knjiga';
	
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

    public function vratiNaslov() 
    {
        return $this->naslov;
    }

    public function vratiAutora() 
    {
        return $this->autor;
    }
    
    public function vratiGodinuIzdanja() 
    {
        return $this->godinaIzdanja;
    }
    
    public function vratiDostupnostKnjige() 
    {
        return $this->dostupnostKnjige;
    }
    
    public function pretraga($naslov, $autor) {
       
    }
    
    public function setNaslov($naslov) {
        $this->data['naslov'] = $naslov;
    }
    
    public function setAutor($autor) {
        $this->data['autor'] = $autor;
    }
    
    public function setGodinaIzdanja($godinaIzdanja) {
        $this->data['godinaIzdanja'] = $godinaIzdanja;
    }
    
    public function setDostupnostKnjige($dostupnostKnjige) {
        $this->data['dostupnostKnjige'] = $dostupnostKnjige;
    }


}
