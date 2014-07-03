<?php

class Clan extends Model
{
    protected $tableName = 'clan';
    
        
    public function getIme()
    {
        return $this->data['ime'];
    }
    
    public function getPrezime()
    {
        return $this->data['prezime'];
    }
    
    public function getFakultet()
    {
        return $this->data['fakultet'];
    }
    
    public function getKontakt()
    {
        return $this->data['kontakt'];
    }
    
    public function getMjesto()
    {
        return $this->data['mjesto'];
    }
    
     public function setIme($ime) {
        $this->data['ime'] = $ime;
    }
    
    public function setPrezime($prezime) {
        $this->data['prezime'] = $prezime;
    }
    
    public function setFakultet($fakultet) {
        $this->data['fakultet'] = $fakultet;
    }
    
    public function setKontakt($kontakt) {
        $this->data['kontakt'] = $kontakt;
    }
    
    public function setMjesto($mjesto) {
        $this->data['mjesto'] = $mjesto;
    }
    
}


