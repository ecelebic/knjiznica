<?php

class Knjiga extends Model
{
    protected $tableName = 'knjiga';

    public function getNaslov() 
    {
        return $this->data['naslov'];
    }

    public function getAutor() 
    {
         return $this->data['autor'];
    }
    
    public function getGodinaIzdanja() 
    {
         return $this->data['godinaIzdanja'];
    }
    
    public function getDostupnostKnjige() 
    {
         return $this->data['dostupnostKnjige'];
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
