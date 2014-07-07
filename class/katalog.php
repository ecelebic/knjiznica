<?php

class Katalog extends Model
{
	
    public function getNaslov() 
    {
        return $this->naslov;
    }

    public function getAutor() 
    {
        return $this->autor;
    }
    
    public function getGodinaIzdanja() 
    {
        return $this->godinaIzdanja;
    }
    
    public function getDostupnostKnjige() 
    {
        return $this->dostupnostKnjige;
    }
    
    public function pretraga($naslov, $autor) {
        
    }


}


