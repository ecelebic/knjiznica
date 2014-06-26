<?php
class operater {
	const TABLE_NAME = 'operater';

	protected $sifra;
	protected $ime;
	protected $prezime;
	protected $email;
	protected $lozinka;
	
	public function __construct($sifra) {
		$data = $sifra -> array();

		$this->ime = $data['ime'];
		$this->prezime = $data['prezime'];
		$this->email = $data['email'];
		$this->lozinka = $data['lozinka'];
		
}

}
